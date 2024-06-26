<!-- resources/views/livewire/laporan-component.blade.php -->

<div>
    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-8">Laporan Produk Terpopuler</h1>

        <h2 class="text-xl font-semibold mb-4">Normalisasi Tabel</h2>
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Kode Produk</th>
                    <th class="py-2 px-4 border">Nama Produk</th>
                    @foreach (array_keys($weights) as $criteria)
                        <th class="py-2 px-4 border">{{ ucwords(str_replace('_', ' ', $criteria)) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($normalized as $index => $product)
                    <tr>
                        <td class="py-2 px-4 border">{{ $products[$index]->kd_produk }}</td>
                        <td class="py-2 px-4 border">{{ $products[$index]->nama_produk }}</td>
                        @foreach ($product as $value)
                            <td class="py-2 px-4 border">{{ number_format($value, 4) }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2 class="text-xl font-semibold mb-4 mt-8">Rangking Tabel</h2>
        <table class="min-w-full bg-white border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 border">Ranking</th>
                    <th class="py-2 px-4 border">Kode Produk</th>
                    <th class="py-2 px-4 border">Nama Produk</th>
                    <th class="py-2 px-4 border">Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rankedProducts as $product)
                    <tr>
                        <td class="py-2 px-4 border">{{ $product['rank'] }}</td>
                        <td class="py-2 px-4 border">{{ $product['kd_produk'] }}</td>
                        <td class="py-2 px-4 border">{{ $product['nama_produk'] }}</td>
                        <td class="py-2 px-4 border">{{ number_format($product['nilai_preferensi'], 4) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 mb-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
