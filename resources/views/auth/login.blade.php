<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" style="width:844px; height:19rem;">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" style="    margin-left: 1rem;" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" style="margin-left: 1rem;
                width: 21rem;" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" style="    margin-left: 1rem;" />

            <x-text-input id="password" class="form-control" type="password" name="password" required
                autocomplete="current-password" style="margin-left: 1rem;
                width: 21rem;" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- for Remember Me  -->
        <div class="flex items-center justify-end mt-4" style="    margin-left: 1rem;">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style=" background-color: #080850;">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
