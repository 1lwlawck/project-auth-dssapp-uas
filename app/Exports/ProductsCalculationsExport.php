<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsCalculationsExport implements FromArray, WithHeadings
{
    protected $normalized;
    protected $rankedProducts;

    public function __construct(array $normalized, array $rankedProducts)
    {
        $this->normalized = $normalized;
        $this->rankedProducts = $rankedProducts;
    }

    public function array(): array
    {
        $combinedData = [];

        foreach ($this->rankedProducts as $index => $rankedProduct) {
            $combinedData[] = array_merge(
                [
                    'Ranking' => $rankedProduct['rank'],
                    'Kode Produk' => $rankedProduct['kd_produk'],
                    'Nama Produk' => $rankedProduct['nama_produk'],
                    'Nilai Preferensi' => $rankedProduct['nilai_preferensi'],
                ],
                $this->normalized[$index]
            );
        }

        return $combinedData;
    }

    public function headings(): array
    {
        return [
            'Ranking',
            'Kode Produk',
            'Nama Produk',
            'Nilai Preferensi',
            'Jumlah Penjualan',
            'Harga',
            'Rating',
            'Jumlah Permintaan',
            'Nilai Rekomendasi'
        ];
    }
}
