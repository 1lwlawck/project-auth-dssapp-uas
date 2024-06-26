<!-- resources/views/components/google-login-button.blade.php -->

<a href="auth/redirect"
    {{ $attributes->merge(['class' => 'btn bg-indigo-500 hover:bg-indigo-600 text-white whitespace-nowrap']) }}>
    {{ $slot }}
</a>
