<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Kriteria;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Pagination\LengthAwarePaginator;

class LaporanComponent extends Component
{
    use WithPagination;

    public $weights = [];

    protected $paginationTheme = 'tailwind';

    public function mount()
    {
        $this->loadWeights();
    }

    public function loadWeights()
    {
        $criteriaMapping = [
            'jumlah_penjualan' => 1,
            'harga' => 2,
            'rating' => 3,
            'jumlah_permintaan' => 4,
            'nilai_rekomendasi' => 5
        ];

        foreach ($criteriaMapping as $key => $id) {
            $kriteria = Kriteria::find($id);
            if ($kriteria) {
                $this->weights[$key] = $kriteria->bobot;
            }
        }
    }

    public function export()
    {
        $products = Product::all();
        $normalized = $this->normalize($products, $this->weights);
        $ranked = $this->rank($normalized, $this->weights);
        $rankedProducts = $this->combineRankedWithProducts($products, $ranked);

        $csvContent = $this->generateCSV($rankedProducts);
        $fileName = 'laporan_produk_terpopuler.csv';
        Storage::disk('local')->put($fileName, $csvContent);

        return Response::download(storage_path("app/{$fileName}"));
    }

    public function render()
    {
        $products = Product::paginate(10);
        $allProducts = Product::all();

        $normalized = $this->normalize($allProducts, $this->weights);
        $ranked = $this->rank($normalized, $this->weights);
        $rankedProducts = $this->combineRankedWithProducts($allProducts, $ranked);

        $pagedNormalized = $this->paginateArray($normalized, 10, 'normalizedPage');
        $pagedRankedProducts = $this->paginateArray($rankedProducts, 10, 'rankedPage');

        return view('livewire.laporan-component', [
            'products' => $products,
            'normalized' => $pagedNormalized,
            'rankedProducts' => $pagedRankedProducts,
        ]);
    }

    private function normalize($products, $weights)
    {
        $maxValues = [];
        $minValues = [];

        foreach ($weights as $key => $weight) {
            $maxValues[$key] = $products->max($key) ?: 1;
            $minValues[$key] = $products->min($key) ?: 1;
        }

        $normalized = [];
        foreach ($products as $product) {
            $normalizedProduct = [];
            foreach ($weights as $key => $weight) {
                if (in_array($key, ['jumlah_penjualan', 'rating', 'nilai_rekomendasi'])) {
                    $normalizedProduct[$key] = $product->$key ? $product->$key / $maxValues[$key] : 0;
                } else {
                    $normalizedProduct[$key] = $product->$key ? $minValues[$key] / $product->$key : 0;
                }
            }
            $normalized[] = $normalizedProduct;
        }

        return $normalized;
    }

    private function rank($normalized, $weights)
    {
        $ranked = [];
        foreach ($normalized as $product) {
            $total = 0;
            foreach ($weights as $key => $weight) {
                $total += $product[$key] * $weight;
            }
            $ranked[] = $total;
        }

        arsort($ranked);
        return $ranked;
    }

    private function combineRankedWithProducts($products, $ranked)
    {
        $rankedProducts = [];
        $rank = 1;
        foreach ($ranked as $index => $score) {
            $rankedProducts[] = [
                'rank' => $rank,
                'kd_produk' => $products[$index]->kd_produk,
                'nama_produk' => $products[$index]->nama_produk,
                'nilai_preferensi' => $score
            ];
            $rank++;
        }
        return $rankedProducts;
    }

    private function generateCSV($rankedProducts)
    {
        $header = ['Ranking', 'Kode Produk', 'Nama Produk', 'Nilai Preferensi'];
        $csvContent = implode(',', $header) . "\n";

        foreach ($rankedProducts as $product) {
            $csvContent .= "{$product['rank']},{$product['kd_produk']},{$product['nama_produk']},{$product['nilai_preferensi']}\n";
        }

        return $csvContent;
    }

    private function paginateArray(array $items, int $perPage, string $pageName)
    {
        $page = LengthAwarePaginator::resolveCurrentPage($pageName);
        $total = count($items);
        $currentItems = array_slice($items, ($page - 1) * $perPage, $perPage);
        return new LengthAwarePaginator($currentItems, $total, $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
            'pageName' => $pageName,
        ]);
    }
}
