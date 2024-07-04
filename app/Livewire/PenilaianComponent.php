<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class PenilaianComponent extends Component
{
    use WithPagination;

    public $search = '';
    public $error;

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
            ->paginate(10);

        return view('livewire.penilaian-component', ['products' => $products]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedSearch()
    {
        if (empty($this->search)) {
            $this->resetPage();
        }
    }

    public function updateProduct($productId, $field, $value)
    {
        $product = Product::find($productId);
        if ($product) {
            // Validasi khusus untuk rating
            if ($field === 'rating' && (!is_numeric($value) || $value < 0 || $value > 5)) {
                session()->flash('error', 'Rating must be a number between 0 and 5.');
                return;
            }

            // Validasi khusus untuk nilai rekomendasi
            if ($field === 'nilai_rekomendasi' && (!is_numeric($value) || $value < 0 || $value > 100)) {
                session()->flash('error', 'Nilai Rekomendasi must be a number between 0 and 100.');
                return;
            }

            // Update nilai dan simpan
            $product->$field = $value;
            $product->save();

            session()->flash('success', 'Product updated successfully.');
        }
    }

    public function delete($productId)
    {
        $product = Product::find($productId);
        if ($product) {
            $product->delete();
            session()->flash('success', 'Product deleted successfully.');
        }
    }
}
