<x-guest-layout>
<div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/img/login.jpeg');">
    <div class="p-10 border border-gray-300 rounded-lg bg-white bg-opacity-70 shadow-lg w-full max-w-md">
        <div class="flex justify-center">
            <img src="/img/kota pekalongan.png" class="h-20">
        </div>


        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-900">{{ __('Remember me') }}</span>
                </label>
                 @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center w-full justify mt-4">
                <button class="w-full bg-primary hover:bg-blue-800  py-2 px-4 rounded text-white">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
   
</div>
</x-guest-layout>
