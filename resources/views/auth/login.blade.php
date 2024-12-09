<x-platform-login>
    <x-auth-card>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('platform.login') }}" id="loginForm">
            @csrf

            <!-- Email Address -->
            <div>
                <x-inputs.label for="email" :value="__('Email')" />

                <x-inputs.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-inputs.label for="password" :value="__('Password')" />

                <x-inputs.input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>



            <div class="mt-5 flex items-center justify-end">
                <x-inputs.button type="submit" class="text-white bg-primary-200 " form="loginForm">
                        {{ __('Login') }}
                </x-inputs.button>
            </div>
        </form>     
        <div class="mt-5 flex items-center justify-begin underline text-sm text-primary-500 shadow-sm hover:text-primary-600">
                <a href="/cadastrar"> {{ __('Ainda não tenho cadastro') }}</a>
        </div>

        <div class="mt-5 flex items-center justify-begin underline text-sm text-primary-500 shadow-sm hover:text-primary-600">
                <a href="{{ route('platform.password.request') }}"> {{ __('Forgot your password?') }}</a>
        </div>

        
    </x-auth-card>
    
</x-platform-login>
