<div class="container mx-auto mt-8">
    <div class="grid grid-cols-1 gap-4">
        <!-- Tabel Produk -->
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
