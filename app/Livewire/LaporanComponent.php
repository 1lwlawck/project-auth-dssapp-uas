<?php

namespace App\Livewire;


use Livewire\Component;


use Livewire\WithPagination;
use App\Models\Product;

class LaporanComponent extends Component
{
    use WithPagination;

    public $weights = [
        'harga' => 0.2,
        'stok' => 0.1,
        'jumlah_penjualan' => 0.3,
        'rating' => 0.3,
        'jumlah_permintaan' => 0.1
    ];

    public function render()
    {
        $products = Product::paginate(10);
        $normalized = $this->normalize($products, $this->weights);
        $ranked = $this->rank($normalized, $this->weights);

        // Combine the ranked values with the original product data
        $rankedProducts = $this->combineRankedWithProducts($products, $ranked);

        return view('livewire.laporan-component', [
            'products' => $products,
            'normalized' => $normalized,
            'rankedProducts' => $rankedProducts
        ]);
    }

    private function normalize($products, $weights)
    {
        $maxValues = [];
        foreach ($weights as $key => $weight) {
            $maxValues[$key] = $products->max($key);
        }

        $normalized = [];
        foreach ($products as $product) {
            $normalizedProduct = [];
            foreach ($weights as $key => $weight) {
                $normalizedProduct[$key] = $product->$key / $maxValues[$key];
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

        // Sort ranked values in descending order
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
}
