<x-authentication-layout>

    @section('title', __('Login'))


    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Welcome back!') }} ✨</h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div>
                <x-label for="password" value="{{ __('Password') }}" />
                <div class="relative">
                    <button type="button" class="absolute top-0 end-0 p-3.5 rounded-e-md"
                        onclick="togglePasswordVisibility()">
                        <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                            <path class="hs-password-active:hidden"
                                d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                            </path>
                            <path class="hs-password-active:hidden"
                                d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                            </path>
                            <line class="hs-password-active:hidden" x1="2" x2="22" y1="2"
                                y2="22"></line>
                            <path class="hidden hs-password-active:block"
                                d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                            <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                            </circle>
                        </svg>
                    </button>
                </div>
                <x-input id="password" type="password" name="password" required autocomplete="current-password" />
            </div>
        </div>
        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <div class="mr-1">
                    <a class="text-sm underline hover:no-underline" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                </div>
            @endif

            <x-btn-google>
                {{ __('Login with Google') }}
            </x-btn-google>

            <x-button class="">
                {{ __('Sign in') }}
            </x-button>


        </div>
    </form>
    <x-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('Don\'t you have an account?') }} <a
                class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                href="{{ route('register') }}">{{ __('Sign Up') }}</a>
        </div>

    </div>
    <script src="/js/togglePassword.js"></script>

</x-authentication-layout>
