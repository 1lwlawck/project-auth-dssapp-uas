<x-authentication-layout>
    @section('title', __('Register'))
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Create your Account') }} ✨</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus
                    autocomplete="name" />
            </div>

            <div>
                <x-label for="email">{{ __('Email Address') }} <span class="text-rose-500">*</span></x-label>
                <x-input id="email" type="email" name="email" :value="old('email')" required />
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
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-6 space-x-4">
            <x-btn-google>
                {{ __('Login with Google') }}
            </x-btn-google>

            <x-button>
                {{ __('Sign Up') }}
            </x-button>
        </div>
        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-6">
                <label class="flex items-start">
                    <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                    <span class="text-sm ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                                '<a target="_blank" href="' .
                                route('terms.show') .
                                '" class="text-sm underline hover:no-underline">' .
                                __('Terms of Service') .
                                '</a>',
                            'privacy_policy' =>
                                '<a target="_blank" href="' .
                                route('policy.show') .
                                '" class="text-sm underline hover:no-underline">' .
                                __('Privacy Policy') .
                                '</a>',
                        ]) !!}
                    </span>
                </label>
            </div>
        @endif
    </form>
    <x-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-slate-200 dark:border-slate-700">
        <div class="text-sm">
            {{ __('Have an account?') }} <a
                class="font-medium text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400"
                href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
    <script src="/js/togglePassword.js"></script>
</x-authentication-layout>
