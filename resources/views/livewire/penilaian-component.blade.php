<div class="container mx-auto mt-8 px-4">
    @if (session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg wire:click="$set('error', null)" class="fill-current h-6 w-6 text-red-500" role="button"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348,5.652a.5.5,0,0,1,.707.707L10.707,10l4.348,4.348a.5.5,0,0,1-.707.707L10,10.707l-4.348,4.348a.5.5,0,0,1-.707-.707L9.293,10,4.945,5.652a.5.5,0,0,1,.707-.707L10,9.293l4.348-4.348A.5.5,0,0,1,14.348,5.652Z" />
                </svg>
            </span>
        </div>
    @endif

    @if (session()->has('success'))
        <div class="bg-green-200 border-green-600 border-l-4 p-4 mb-4 relative">
            <div class="flex items-center">
                <div class="text-green-600">
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M18.37 5.63l-1.8-1.79c-.32-.32-.74-.48-1.17-.48s-.85.16-1.17.48L12 7.05 8.97 4.02c-.32-.32-.74-.48-1.17-.48s-.85.16-1.17.48l-1.8 1.79c-.32.32-.48.74-.48 1.17s.16.85.48 1.17L7.05 12l-2.03 3.03c-.32.32-.48.74-.48 1.17s.16.85.48 1.17l1.8 1.79c.32.32.74.48 1.17.48s.85-.16 1.17-.48L12 16.95l3.03 3.03c.32.32.74.48 1.17.48s.85-.16 1.17-.48l1.8-1.79c.32-.32.48-.74.48-1.17s-.16-.85-.48-1.17L16.95 12l2.03-3.03c.32-.32.48-.74.48-1.17s-.16-.85-.48-1.17zm1.41 2.42c.39.39.39 1.02 0 1.41l-8.49 8.49c-.39.39-1.02.39-1.41 0l-4.24-4.24c-.39-.39-.39-1.02 0-1.41s1.02-.39 1.41 0L12 14.59l7.07-7.07c.39-.39 1.02-.39 1.41 0z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-green-600">{{ session('success') }}</p>
                </div>
            </div>
            <div class="absolute top-0 right-0 px-4 py-3">
                <button class="text-gray-600 hover:text-gray-800 focus:outline-none" wire:click="$refresh">
                    <!-- Refresh table on close -->
                    <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 11.414l3.293 3.293a1 1 0 0 0 1.414-1.414L11.414 10l3.293-3.293a1 1 0 0 0-1.414-1.414L10 8.586 6.707 5.293a1 1 0 0 0-1.414 1.414L8.586 10 5.293 13.293a1 1 0 1 0 1.414 1.414L10 11.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    @endif




    <!-- Form Pencarian Produk -->
    <div class="max-w-4xl mx-auto mt-2 mb-2">
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Cari</label>
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
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white text-center">
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
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white text-center">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                    <input type="text" value="{{ $product->description }}"
                                        wire:change="updateProduct({{ $product->product_id }}, 'description', $event.target.value)"
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                    <input type="text" value="{{ $product->jumlah_penjualan }}"
                                        wire:change="updateProduct({{ $product->product_id }}, 'jumlah_penjualan', $event.target.value)"
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white text-center">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                    <input type="text" value="{{ $product->rating }}"
                                        wire:change="updateProduct({{ $product->product_id }}, 'rating', $event.target.value)"
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white text-center">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                    <input type="text" value="{{ $product->jumlah_permintaan }}"
                                        wire:change="updateProduct({{ $product->product_id }}, 'jumlah_permintaan', $event.target.value)"
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white text-center">
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                                    <input type="text" value="{{ $product->nilai_rekomendasi }}"
                                        wire:change="updateProduct({{ $product->product_id }}, 'nilai_rekomendasi', $event.target.value)"
                                        class="w-full bg-transparent border-none text-gray-900 dark:text-white text-center">
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
