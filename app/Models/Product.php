<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'kd_produk',
        'nama_produk',
        'harga',
        'stok',
        'jumlah_penjualan',
        'rating',
        'jumlah_permintaan',
        'nilai_rekomendasi',
        'description',
    ];
}
