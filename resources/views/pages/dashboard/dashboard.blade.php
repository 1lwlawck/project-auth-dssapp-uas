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
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700">Total Produk</div>
                    <div class="text-3xl font-bold text-gray-900">{{ $totalProducts }}</div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700">Total Kriteria</div>
                    <div class="text-3xl font-bold text-gray-900">{{ $totalKriterias }}</div>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700">Total Pengguna</div>
                    <div class="text-3xl font-bold text-gray-900">{{ $totalUsers }}</div>
                </div>

                <!-- Grafik Penjualan -->
                <div class="col-span-1 md:col-span-2 lg:col-span-3 bg-white shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 mb-4">Grafik Penjualan Bulanan</div>
                    <canvas id="salesChart"></canvas>
                </div>
                <!-- Aktivitas Terbaru -->
                <div class="col-span-1 md:col-span-2 lg:col-span-1 bg-white shadow-lg rounded-lg p-4">
                    <div class="text-xl font-bold text-gray-700 mb-4">Aktivitas Terbaru</div>
                    <ul>
                        @forelse($activities as $activity)
                            <li class="border-b py-2">{{ $activity->description }}</li>
                        @empty
                            <li class="py-2">Tidak ada aktivitas terbaru.</li>
                        @endforelse
                    </ul>
                </div>

                {{--  Ranking Sementara --}}


</x-app-layout>
