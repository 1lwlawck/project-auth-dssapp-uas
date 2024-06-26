<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('pages.dashboard.penilaian', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_produk' => 'required|unique:products',
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'jumlah_penjualan' => 'required|integer',
            'rating' => 'required|numeric',
            'jumlah_permintaan' => 'required|integer',
            'nilai_rekomendasi' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('penilaian')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'kd_produk' => 'required|unique:products,kd_produk,' . $product->id,
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'jumlah_penjualan' => 'required|integer',
            'rating' => 'required|numeric',
            'jumlah_permintaan' => 'required|integer',
            'nilai_rekomendasi' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('penilaian')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('penilaian')->with('success', 'Product deleted successfully.');
    }
}

