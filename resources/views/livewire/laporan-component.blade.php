<div x-data="{ darkMode: false }" :class="{ 'dark': darkMode }"
    class="min-h-screen bg-gray-100 dark:bg-gray-900 text-black dark:text-white">
    <div class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Laporan Produk Terpopuler</h1>
            <div class="flex items-center">
                <button wire:click="export" class="inline-block bg-blue-500 text-white py-2 px-4 rounded mr-4">Unduh
                    Laporan</button>
            </div>
        </div>

        <h2 class="text-xl font-semibold mb-4">Normalisasi Tabel</h2>
        <table class="min-w-full bg-white dark:bg-gray-800 text-black dark:text-white border-collapse">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700">
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Kode Produk</th>
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Nama Produk</th>
                    @foreach (array_keys($weights) as $criteria)
                        <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">
                            {{ ucwords(str_replace('_', ' ', $criteria)) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($normalized as $index => $product)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">
                            {{ $products[$index]->kd_produk }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">
                            {{ $products[$index]->nama_produk }}</td>
                        @foreach ($product as $value)
                            <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">
                                {{ number_format($value, 4) }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 mb-4">
            {{ $normalized->links() }}
        </div>

        <h2 class="text-xl font-semibold mb-4 mt-8">Rangking Tabel</h2>
        <table class="min-w-full bg-white dark:bg-gray-800 text-black dark:text-white border-collapse">
            <thead>
                <tr class="bg-gray-200 dark:bg-gray-700">
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Ranking</th>
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Kode Produk</th>
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Nama Produk</th>
                    <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($rankedProducts as $product)
                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">{{ $product['rank'] }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">{{ $product['kd_produk'] }}
                        </td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600 ">
                            {{ $product['nama_produk'] }}</td>
                        <td class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">
                            {{ number_format($product['nilai_preferensi'], 4) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 mb-4">
            {{ $rankedProducts->links() }}
        </div>
    </div>
</div>
