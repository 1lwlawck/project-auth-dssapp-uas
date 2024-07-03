<x-app-layout>
    @section('title', __('Dashboard'))
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

            <!-- Cards -->
            <div class="grid grid-cols-12 gap-6">

            </div>

        </div>

        <div class="container mx-auto mt-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Ringkasan Statistik -->
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Produk</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $totalProducts }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Kriteria</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $totalKriterias }}</div>
                </div>
                <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 dark:text-gray-300">Total Pengguna</div>
                    <div class="text-3xl font-bold text-gray-900 dark:text-gray-100">{{ $totalUsers }}</div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
