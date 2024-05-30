{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
    <section class="bg-white w-full">
        <div class="h-full">
            <nav class="flex w-full px-20 py-5">
                <a href="{{ route('home') }}">
                    <h1 class="text-black text-2xl font-bold">KOLNUT</h1>
                </a>
            </nav>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex justify-center items-center h-[38.6rem]">
                    <div class="flex flex-col items-center py-10 rounded-md bg-kuning h-[30rem] w-[30rem] border-[3px] border-black ">
                        <div class="flex flex-col justify-between h-[30rem] w-[25rem]">
                            <div class="flex justify-center items-center h-[4rem] w-[25rem]">
                                <h1 class="text-black text-3xl font-semibold cursor-default">Login</h1>
                            </div>
                            <div class="flex flex-col justify-center h-full">
                                <div class="flex flex-col justify-between h-[10rem]">
                                    <div class="w-[25rem]">
                                        <!-- Floating Input -->
                                        <div class="relative">
                                            <input name="email" type="email" id="hs-floating-input-email" class="peer p-4 block w-full rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-[2px] border-black dark:text-black 
                                            focus:pt-7
                                            focus:pb-3
                                            [&:not(:placeholder-shown)]:pt-7
                                            [&:not(:placeholder-shown)]:pb-3
                                            autofill:pt-7
                                            autofill:pb-3" placeholder="you@email.com">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            <label for="hs-floating-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-black peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                            peer-focus:text-xs
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-black
                                            peer-[:not(:placeholder-shown)]:text-xs
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-black font-semibold">Email</label>
                                        </div>
                                        <!-- End Floating Input -->
                                    </div>
                                    <div class=" w-[25rem]">
                                        <!-- Floating Input -->
                                        <div class="relative">
                                            <input name="password" type="password" id="hs-floating-input-passowrd" class="peer p-4 block w-full rounded-lg text-sm placeholder:text-transparent  disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:border-[2px] border-black dark:text-black 
                                            focus:pt-7
                                            focus:pb-3
                                            [&:not(:placeholder-shown)]:pt-7
                                            [&:not(:placeholder-shown)]:pb-3
                                            autofill:pt-7
                                            autofill:pb-3" placeholder="password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            <label for="hs-floating-input-passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-black peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                            peer-focus:text-xs
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-black
                                            peer-[:not(:placeholder-shown)]:text-xs
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-black font-semibold">Password</label>
                                        </div>
                                        <!-- End Floating Input -->
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-end h-[10rem]">
                                <button type="submit" class="flex justify-center items-center text-white bg-black h-[3rem] w-full rounded-md text-lg font-semibold">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center items-center h-10">
                    <h1 class="font-medium cursor-default">© 2024 Kolnut. Seluruh hak cipta dilindungi undang-undang</h1>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
