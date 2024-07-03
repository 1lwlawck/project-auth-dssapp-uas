<div class="container mx-auto mt-8 px-4">
    <div class="grid grid-cols-1 gap-4">
        <!-- Form Pencarian Produk -->
        <div class="max-w-xl mx-auto mt-2 mb-2">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" wire:model.live="search" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Produk Alternatif" />
            </div>
        </div>

        <!-- Tabel Produk -->
        <div class="p-4 col-span-1">
            <div class="overflow-x-auto">
                <div class="min-w-full shadow-md sm:rounded-lg">
                    <table class="min-w-full bg-white dark:bg-gray-800 text-black dark:text-white border-collapse">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">ID Produk</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Kode Produk</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Nama Produk</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Harga</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Stok</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Deskripsi</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Jumlah Penjualan
                                </th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Rating</th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Jumlah Permintaan
                                </th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600">Nilai Rekomendasi
                                </th>
                                <th class="py-2 px-4 border-b border-gray-300 dark:border-gray-600"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($products as $product)
                                <tr>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                        {{ $product->product_id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->kd_produk }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'kd_produk', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->nama_produk }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'nama_produk', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->harga }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'harga', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->stok }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'stok', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->description }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'description', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->jumlah_penjualan }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'jumlah_penjualan', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->rating }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'rating', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->jumlah_permintaan }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'jumlah_permintaan', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                        <input type="text" value="{{ $product->nilai_rekomendasi }}"
                                            wire:change="updateProduct({{ $product->product_id }}, 'nilai_rekomendasi', $event.target.value)"
                                            class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button wire:click="delete({{ $product->product_id }})"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11"
                                        class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">No
                                        products found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="m-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
