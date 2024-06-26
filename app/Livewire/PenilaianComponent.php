<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class PenilaianComponent extends Component
{
    use WithPagination;

    public $search = '';
    protected $paginationTheme = 'tailwind';



    public function render()
    {
        $products = Product::paginate(10);
        return view('livewire.penilaian-component', ['products' => $products]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updateProduct($productId, $field, $value)
    {
        $product = Product::find($productId);
        if ($product) {
            $product->$field = $value;
            $product->save();
        }
    }
}
