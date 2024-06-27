<div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 gap-4">
        <!-- Tabel Produk -->


        <form class="max-w-xl ml-3 mt-2 mb-2">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Produk Alternatif" required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
            </div>
        </form>
        <div class="p-4 col-span-1">
            <div class="container mx-auto">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                ID Produk
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Kode Produk
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Nama Produk
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Harga
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Stok
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Deskripsi
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Jumlah Penjualan
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Rating
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Jumlah Permintaan
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                                                Nilai Rekomendasi
                                            </th>
                                            <th scope="col" class="relative px-6 py-3">
                                                <span class="sr-only">Delete</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($products as $product)
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                                    {{ $product->product_id }}
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->kd_produk }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'kd_produk', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->nama_produk }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'nama_produk', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->harga }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'harga', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->stok }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'stok', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->description }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'description', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->jumlah_penjualan }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'jumlah_penjualan', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->rating }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'rating', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->jumlah_permintaan }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'jumlah_permintaan', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                                    <input type="text" value="{{ $product->nilai_rekomendasi }}"
                                                        wire:change="updateProduct({{ $product->product_id }}, 'nilai_rekomendasi', $event.target.value)"
                                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <button wire:click="delete({{ $product->product_id }})"
                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="m-4">
                                    {{ $products->links() }}
                                </div>
                                @if ($products->isEmpty())
                                    <p class="text-center py-4">No products found.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
