@extends('layouts.auth.app', ['title' => 'Login'])

@section('content')
    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div
                class="relative md:flex items-end  hidden px-4 pb-10 pt-60 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-7">
                <div class="absolute inset-0">
                    <img class="object-cover object-top w-full h-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/signin/4/girl-thinking.jpg"
                        alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
            </div>

            <div class="flex flex-col items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-7">
                <img src="{{ asset('asset/logo1.png') }}" alt="" class="w-40 h-auto mb-6">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto ">
                    <h2 class="text-3xl text-center md:text-left font-bold leading-tight text-black sm:text-4xl">Selamat datang di Course <span class="bg-teal-500 text-white px-2 rounded-md  "> Unusia</span> </h2>
                    <p class="mt-2 text-base text-center md:text-left text-gray-600">Belum punya akun? <a href="/register" title=""
                            class="font-medium text-teal-600 transition-all duration-200 hover:text-teal-700 focus:text-teal-700 hover:underline">Buat
                            akun gratis</a></p>
                    @if ($errors->any())
                        <div class="bg-red-100 border my-2 border-red-400 text-red-700 px-4 py-2 text-sm rounded relative"
                            role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    @if ($error == 'These credentials do not match our records.')
                                        <li>Email ini belum terdaftar sebagai akun di E-course Unusia. <a class="font-bold"
                                                href="/register">Daftar</a></li>
                                    @else
                                        <li>{{ $error }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}" class="mt-8">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="email" class="text-base font-medium text-gray-900"> Alamat Email </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>

                                    <input type="email" type="email" id="email" name="email"
                                        value="{{ old('email') }}" required autofocus
                                        placeholder="Masukkan email untuk memulai"
                                        class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-500 focus:bg-white caret-teal-500" />
                                </div>
                            </div>

                            <div x-data="{ showPassword: false }">
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-base font-medium text-gray-900"> Kata Sandi </label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" title=""
                                            class="text-sm font-medium text-teal-600 transition-all duration-200 hover:text-teal-700 focus:text-teal-700 hover:underline">
                                            Lupa kata sandi? </a>
                                    @endif
                                </div>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                        </svg>
                                    </div>
                                    <!-- Password input -->
                                    <input x-bind:type="showPassword ? 'text' : 'password'" id="password" name="password" required
                                        placeholder="Masukkan kata sandi Anda"
                                        class="block w-full py-4 pl-10 pr-12 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-500 focus:bg-white caret-teal-500" />
                                    <!-- Mata icon untuk menampilkan atau menyembunyikan password -->
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <svg @click="showPassword = !showPassword" class="w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm-4.305 1.713a6 6 0 015.61 0l1.527-1.527A9.001 9.001 0 0012 7a9.001 9.001 0 00-6.832 14.664l1.527 1.527a6 6 0 015.61 0l1.528-1.527a3 3 0 00-2.262-4.948l1.058-1.059a1 1 0 011.414 1.414l-1.058 1.058a5 5 0 01-3.536 8.536A5.001 5.001 0 015 12a5.001 5.001 0 014.695-4.995l1.527-1.527a3 3 0 00-2.262-4.948l1.058-1.059a1 1 0 111.414 1.414l-1.058 1.059z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        <div>
                            <button type="submit"
                                class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-teal-500 focus:outline-none hover:opacity-80 focus:opacity-80">
                                Masuk
                            </button>
                        </div>
                </div>
                <div class="mt-3 space-y-3">
                    <a href="/auth/google" type="button"
                        class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                        <div class="absolute inset-y-0 left-0 p-4">
                            <img src="{{ asset('asset/googleicon.svg') }}" alt="google icon" class="w-6 h-6">
                        </div>
                        Masuk dengan Google
                    </a>
                    <a href="/auth/facebook" type="button"
                        class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                        <div class="absolute inset-y-0 left-0 p-4">
                            <svg class="w-6 h-6 text-[#2563EB]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path
                                    d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                </path>
                            </svg>

                        </div>
                        Masuk dengan Facebook
                    </a>
                    <a href="/auth/github" type="button"
                        class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none">
                        <div class="absolute inset-y-0 left-0 p-4">
                            <svg class="w-6 h-6 text-[#333333]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12 0C5.37 0 0 5.37 0 12c0 5.302 3.438 9.8 8.208 11.385.6.11.82-.26.82-.58 0-.29-.01-1.26-.01-2.29-3.002.65-3.891-.72-4.141-1.39-.141-.36-.76-1.39-1.3-1.67-.44-.28-1.06-.97-.01-.98.98-.01 1.68.9 1.92 1.3 1.13 1.87 2.93 1.35 3.64 1.03.11-.82.44-1.38.8-1.7-2.81-.32-5.75-1.41-5.75-6.28 0-1.39.49-2.52 1.3-3.41-.13-.33-.56-1.61.12-3.35 0 0 1.06-.34 3.5 1.3 1-.28 2.06-.42 3.12-.42 1.06 0 2.12.14 3.12.42 2.44-1.64 3.5-1.3 3.5-1.3.68 1.74.25 3.02.13 3.35.81.89 1.3 2.02 1.3 3.41 0 4.88-2.95 5.96-5.77 6.28.45.39.85 1.16.85 2.34 0 1.69-.01 3.05-.01 3.47 0 .32.22.7.83.58C20.565 21.797 24 17.287 24 12c0-6.63-5.37-12-12-12">
                                </path>
                            </svg>
                        </div>
                        Masuk dengan GitHub
                    </a>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
@endsection
