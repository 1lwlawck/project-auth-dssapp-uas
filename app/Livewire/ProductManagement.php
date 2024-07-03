<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductManagement extends Component
{
    use WithPagination;

    public $product_id, $kd_produk, $nama_produk, $harga, $stok, $description, $jumlah_penjualan, $rating, $jumlah_permintaan, $nilai_rekomendasi;
    public $isOpen = false;
    public $search = '';
    protected $paginationTheme = 'tailwind';

    public function render()
    {
        $products = Product::query()
            ->when($this->search, function ($query) {
                $searchTerm = '%' . $this->search . '%';
                $query->where('kd_produk', 'like', $searchTerm)
                    ->orWhere('nama_produk', 'like', $searchTerm)
                    ->orWhere('harga', 'like', $searchTerm)
                    ->orWhere('stok', 'like', $searchTerm)
                    ->orWhere('jumlah_penjualan', 'like', $searchTerm)
                    ->orWhere('rating', 'like', $searchTerm)
                    ->orWhere('jumlah_permintaan', 'like', $searchTerm)
                    ->orWhere('nilai_rekomendasi', 'like', $searchTerm)
                    ->orWhere('description', 'like', $searchTerm);
            })
            ->orderBy('product_id')
            ->paginate(10);

        return view('livewire.product-management', ['products' => $products]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->product_id = '';
        $this->kd_produk = '';
        $this->nama_produk = '';
        $this->harga = '';
        $this->stok = '';
        $this->jumlah_penjualan = '';
        $this->rating = '';
        $this->jumlah_permintaan = '';
        $this->nilai_rekomendasi = '';
        $this->description = '';
    }

    public function store()
    {
        $this->validate([
            'kd_produk' => 'required|unique:products,kd_produk,' . $this->product_id . ',product_id',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'jumlah_penjualan' => 'required|integer',
            'rating' => 'required|numeric',
            'jumlah_permintaan' => 'required|integer',
            'nilai_rekomendasi' => 'required|numeric',
        ]);

        DB::transaction(function () {
            Product::updateOrCreate(['product_id' => $this->product_id], [
                'kd_produk' => $this->kd_produk,
                'nama_produk' => $this->nama_produk,
                'harga' => $this->harga,
                'stok' => $this->stok,
                'jumlah_penjualan' => $this->jumlah_penjualan,
                'rating' => $this->rating,
                'jumlah_permintaan' => $this->jumlah_permintaan,
                'nilai_rekomendasi' => $this->nilai_rekomendasi,
                'description' => $this->description,
            ]);


            $this->reorderProductIDs();
        });

        session()->flash('message', $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

        $this->resetInputFields();
        $this->closeModal();
    }

    public function edit($id)
    {
        $product = Product::where('product_id', $id)->firstOrFail();
        $this->product_id = $id;
        $this->kd_produk = $product->kd_produk;
        $this->nama_produk = $product->nama_produk;
        $this->harga = $product->harga;
        $this->stok = $product->stok;
        $this->jumlah_penjualan = $product->jumlah_penjualan;
        $this->rating = $product->rating;
        $this->jumlah_permintaan = $product->jumlah_permintaan;
        $this->nilai_rekomendasi = $product->nilai_rekomendasi;
        $this->description = $product->description;

        $this->openModal();
    }

    public function delete($id)
    {
        DB::transaction(function () use ($id) {

            Product::find($id)->delete();

            $this->reorderProductIDs();
        });

        session()->flash('message', 'Product Deleted Successfully.');
    }

    private function reorderProductIDs()
    {

        $products = Product::orderBy('product_id')->get();


        $currentId = 1;
        foreach ($products as $product) {
            $product->product_id = $currentId++;
            $product->save();
        }
    }
}
