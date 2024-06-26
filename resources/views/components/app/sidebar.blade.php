<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 bg-slate-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-white dark:bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between mb-10 pr-3 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="{{ route('dashboard') }}">
                <svg width="32" height="32" viewBox="0 0 32 32">
                    <defs>
                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%" />
                            <stop stop-color="#A5B4FC" offset="100%" />
                        </linearGradient>
                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%" />
                            <stop stop-color="#38BDF8" offset="100%" />
                        </linearGradient>
                    </defs>
                    <rect fill="#6366F1" width="32" height="32" rx="16" />
                    <path
                        d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                        fill="#4F46E5" />
                    <path
                        d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                        fill="url(#logo-a)" />
                    <path
                        d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                        fill="url(#logo-b)" />
                </svg>
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span>
                </h3>
                <ul class="mt-3 ">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 22 21">
                                <path
                                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path
                                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3 font-semibold">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('alternative') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap font-semibold">Alternative</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kriteria') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path
                                    d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap font-semibold">Kriteria</span>

                        </a>
                    </li>
                    <li>
                        <a href="{{ route('penilaian') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon untuk Penilaian -->
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10.9788315,0.622701964 L13.2088343,5.0937337 C13.3696541,5.41898806 13.6833886,5.64532516 14.0473153,5.698638 L19.0425214,6.42627649 C19.3361902,6.46746623 19.6010526,6.62197034 19.7785029,6.8556019 C19.9559533,7.08923346 20.0313617,7.38273074 19.9880426,7.671152 C19.9534763,7.91020966 19.8407724,8.13174403 19.6669222,8.30235648 L16.0453978,11.809048 C15.7801525,12.0569606 15.6594885,12.4193205 15.7242774,12.7733882 L16.6162785,17.7090566 C16.7147938,18.2995122 16.3208523,18.8609116 15.7242774,18.9802323 C15.4801297,19.0185775 15.229908,18.9786152 15.0106765,18.8662648 L10.550671,16.5430816 C10.2203789,16.3761286 9.82840179,16.3761286 9.4981097,16.5430816 L5.03810421,18.8662648 C4.48873261,19.1584416 3.80239017,18.9584302 3.50386232,18.4191616 C3.39074686,18.2033073 3.35014981,17.9577724 3.38790218,17.7178233 L4.27990327,12.7821549 C4.34469215,12.4280873 4.22402814,12.0657274 3.95878288,11.8178148 L0.337258419,8.31112321 C0.124797095,8.10519293 0.00518811324,7.82415733 0.00518811324,7.53088433 C0.00518811324,7.23761134 0.124797095,6.95657574 0.337258419,6.75064546 C0.508415451,6.57648914 0.7350439,6.46512211 0.97949921,6.43504322 L5.97470536,5.70740472 C6.33863203,5.65409189 6.65236657,5.42775479 6.81318639,5.10250043 L8.96290904,0.622701964 C9.15090319,0.24057682 9.54799821,0.000936542622 9.97979029,0.00903094105 L10.1135905,0.00903094105 C10.489336,0.0558783885 10.8151899,0.286989836 10.9788315,0.622701964 Z">
                                </path>
                                <path
                                    d="M10.0065503,16.4115807 C9.81118897,16.4103023 9.62747134,16.4746291 9.45365767,16.5622959 L5.00773517,18.8797981 C4.47450301,19.1484697 3.7974056,18.9325826 3.50386232,18.4191616 C3.39024338,18.2066302 3.34956803,17.9636968 3.38790218,17.72659 L4.27990327,12.7996884 C4.33980187,12.4433294 4.22008857,12.0805563 3.95878288,11.8265815 L0.328338408,8.31988994 C-0.109446136,7.88870587 -0.109446136,7.19059625 0.328338408,6.75941219 C0.499576039,6.59022427 0.721593581,6.47958644 0.961659188,6.44380995 L5.97470536,5.70740472 C6.36101524,5.65133519 6.63712459,5.43773896 6.81318639,5.10250043 L8.99095422,0.571355753 C9.15691252,0.202753827 9.71488681,-0.0519721233 10.0154703,0.00903094105 C10.0065503,0.307099724 10.0065503,16.2099459 10.0065503,16.4115807 Z">
                                </path>
                                <span class="flex-1 ms-3 whitespace-nowrap font-semibold">Penilaian</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('proses') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon untuk Proses SPK -->
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path class="puchipuchi_een" d="M28,11V3c0-1.1-0.9-2-2-2H6C4.9,1,4,1.9,4,3v8H28z M7,4c0-0.55,0.45-1,1-1h16c0.55,0,1,0.45,1,1v4
                                c0,0.55-0.45,1-1,1H8C7.45,9,7,8.55,7,8V4z M4,12v17c0,1.1,0.9,2,2,2h20c1.1,0,2-0.9,2-2V12H4z M8.5,28C7.672,28,7,27.328,7,26.5
                                S7.672,25,8.5,25s1.5,0.672,1.5,1.5S9.328,28,8.5,28z M8.5,23C7.672,23,7,22.328,7,21.5S7.672,20,8.5,20s1.5,0.672,1.5,1.5
                                S9.328,23,8.5,23z M8.5,18C7.672,18,7,17.328,7,16.5S7.672,15,8.5,15s1.5,0.672,1.5,1.5S9.328,18,8.5,18z M13.5,28
                                c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S14.328,28,13.5,28z M13.5,23c-0.828,0-1.5-0.672-1.5-1.5
                                s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S14.328,23,13.5,23z M13.5,18c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5
                                S14.328,18,13.5,18z M18.5,28c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S19.328,28,18.5,28z M18.5,23
                                c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S19.328,23,18.5,23z M18.5,18c-0.828,0-1.5-0.672-1.5-1.5
                                s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5S19.328,18,18.5,18z M25,26.5c0,0.829-0.671,1.5-1.5,1.5S22,27.329,22,26.5v-5
                                c0-0.829,0.671-1.5,1.5-1.5s1.5,0.671,1.5,1.5V26.5z M23.5,18c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5s1.5,0.672,1.5,1.5
                                S24.328,18,23.5,18z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap font-semibold">Proses SPK</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('laporan') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <!-- Ikon untuk Laporan -->
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 18">
                                <path class="stone_een" d="M15,5L15,5c0-0.552-0.448-1-1-1h-1.051C12.982,4.162,13,4.329,13,4.5v2C13,7.878,11.879,9,10.5,9
                                    c-0.107,0-0.215-0.007-0.325-0.021C8.935,8.82,8,7.732,8,6.448V6.303c0-0.764,0.549-1.446,1.307-1.541
                                    C9.552,4.731,9.787,4.76,10,4.836V4.5C10,4.224,10.224,4,10.5,4S11,4.224,11,4.5v1.972c0,0.25-0.171,0.482-0.418,0.522
                                    C10.554,6.998,10.527,7,10.5,7C10.224,7,10,6.775,10,6.5V6.25c0-0.304-0.271-0.544-0.584-0.493C9.17,5.797,9,6.028,9,6.277v0.162
                                    c0,0.778,0.566,1.472,1.34,1.553C10.394,7.997,10.447,8,10.5,8C11.327,8,12,7.327,12,6.5v-2C12,3.672,11.328,3,10.5,3
                                    C9.848,3,9.298,3.419,9.092,4H8.051H6C5.448,4,5,4.448,5,5v10c0,0.552,0.448,1,1,1h8c0.552,0,1-0.448,1-1L15,5L15,5z M11.5,13h-3
                                    C8.224,13,8,12.776,8,12.5C8,12.224,8.224,12,8.5,12h3c0.276,0,0.5,0.224,0.5,0.5C12,12.776,11.776,13,11.5,13z M11.5,11h-3
                                    C8.224,11,8,10.776,8,10.5C8,10.224,8.224,10,8.5,10h3c0.276,0,0.5,0.224,0.5,0.5C12,10.776,11.776,11,11.5,11z M30,25.618V26
                                    c0,1.657-1.343,3-3,3H5c-1.657,0-3-1.343-3-3v-0.382C2.734,26.458,3.8,27,5,27h22C28.2,27,29.266,26.458,30,25.618z M5,26h22
                                    c1.657,0,3-1.343,3-3V8c0-1.657-1.343-3-3-3H16v10c0,1.103-0.897,2-2,2H6c-1.103,0-2-0.897-2-2V5.184C2.837,5.597,2,6.696,2,8v15
                                    C2,24.657,3.343,26,5,26z M5.5,22h2.793l2.854-2.854C11.24,19.053,11.367,19,11.5,19h3.793l2.854-2.854
                                    c0.195-0.195,0.512-0.195,0.707,0L20.707,18h1.586l3-3H22.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h4
                                    c0.065,0,0.13,0.013,0.191,0.038c0.122,0.051,0.22,0.148,0.271,0.271C26.987,14.37,27,14.435,27,14.5v4c0,0.276-0.224,0.5-0.5,0.5
                                    S26,18.776,26,18.5v-2.793l-3.146,3.146C22.76,18.947,22.633,19,22.5,19h-2c-0.133,0-0.26-0.053-0.354-0.146L18.5,17.207
                                    l-2.646,2.646C15.76,19.947,15.633,20,15.5,20h-3.793l-2.854,2.854C8.76,22.947,8.633,23,8.5,23h-3C5.224,23,5,22.776,5,22.5
                                    S5.224,22,5.5,22z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap font-semibold">Laporan</span>
                        </a>
                    </li>





                    <!-- Community -->

                    <!-- Finance -->

                    <!-- Job Board -->

                    <!-- Tasks -->

                    <!-- Messages -->

                    <!-- Inbox -->

                    <!-- Calendar -->

                    <!-- Campaigns -->

                    <!-- Settings -->

                    <!-- Utility -->

                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                    <span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3>
                <ul class="mt-3">

                    <li x-data="{ open: false }" class="relative">
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            aria-controls="dropdown-example" @click="open = !open" aria-expanded="false">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-slate-600" d="M8.07 16H10V8H8.07a8 8 0 110 8z" />
                                <path class="fill-current text-slate-400" d="M15 12L8 6v5H0v2h8v5z" />
                            </svg>
                            <span
                                class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap font-semibold">Authentication</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <ul id="dropdown-example" x-show="open" @click.away="open = false"
                            class="py-2 space-y-2 bg-white dark:bg-gray-800 rounded-lg shadow-lg mt-1 absolute w-full z-10 left-0"
                            style="min-width: 10rem; max-width: calc(100% - 2rem); overflow-y: auto;">
                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="flex items-center w-full p-2 text-gray-900 dark:text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700"
                                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        <span
                                            class="text-sm font-semibold lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign
                                            In</span>
                                    </a>
                                </form>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="flex items-center w-full p-2 text-gray-900 dark:text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700"
                                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        <span
                                            class="text-sm font-semibold lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Sign
                                            Up</span>
                                    </a>
                                </form>
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a class="flex items-center w-full p-2 text-gray-900 dark:text-white transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:hover:bg-gray-700"
                                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        <span
                                            class="text-sm font-semibold lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Reset
                                            Password
                                        </span>
                                    </a>
                                </form>
                            </li>

                        </ul>
                    </li>

                    <!-- Authentication -->

                    <!-- Onboarding -->

                    <!-- Components -->

                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>
