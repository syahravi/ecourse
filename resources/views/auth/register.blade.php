@extends('layouts.auth.app', ['title' => 'Register'])

@section('content')
    {{-- <div class="card-body">

        <form action="{{ route('register') }}" method="post">
            @csrf
            
            

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="form-control @error('password') is-invalid @enderror" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>

        <div class="mt-4">
            <p>Already have an account? <a href="{{ route('login') }}">Log in here</a></p>
        </div>
    </div> --}}


    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-7">
                <img src="{{ asset('asset/logo2.png') }}" alt="" class="w-40 h-auto mb-6">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto ">
                    <h2 class="text-3xl font-bold leading-tight text-center md:text-left text-black sm:text-4xl">Selamat datang di Course <span class="bg-green-600 text-white px-2 rounded-md  "> Unusia</span> </h2>
                    <p class="mt-2 text-base text-center md:text-left text-gray-600">Sudah Punya akun? <a href="/login" title=""
                            class="font-medium text-teal-600 transition-all duration-200 hover:text-teal-700 focus:text-teal-700 hover:underline">Masuk</a>
                    </p>
                    <hr>
                    <form x-data="{ showPassword: false }" action="{{ route('register') }}" method="post" class="space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="text-base font-medium text-gray-900">Nama Lengkap</label>
                            <div class="relative mt-2.5">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                    placeholder="Masukkan nama lengkap Anda"
                                    class="@error('name') is-invalid @enderror block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-600 focus:bg-white caret-teal-600" />
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    
                        <div>
                            <label for="email" class="text-base font-medium text-gray-900">Alamat Email</label>
                            <div class="relative mt-2.5">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                </div>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                    placeholder="Masukkan email untuk memulai"
                                    class="@error('email') is-invalid @enderror block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-600 focus:bg-white caret-teal-600" />
                                </div>
                                @error('email')
                                <div class="text-red-500 mt-3 bg-red-100 border border-red-400 rounded-md p-3">
                                    Email sudah digunakan.
                                </div>
                                @enderror
                        </div>
                    
                        <div>
                            <label for="password" class="text-base font-medium text-gray-900">Kata Sandi</label>
                            <div class="relative mt-2.5">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                    </svg>
                                </div>
                                <input x-bind:type="showPassword ? 'text' : 'password'" id="password" name="password" required
                                    placeholder="Masukkan kata sandi Anda"
                                    class="@error('password') is-invalid @enderror block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-600 focus:bg-white caret-teal-600" />
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                    x-on:click="showPassword = !showPassword">
                                    <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path x-show="!showPassword" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path x-show="showPassword" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 17s4-2 4-5-4-5-4-5-4 2-4 5 4 5 4 5z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    
                        <div>
                            <label for="password_confirmation" class="text-base font-medium text-gray-900">Ulangi Sandi</label>
                            <div class="relative mt-2.5">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                    </svg>
                                </div>
                                <input type="password" id="password_confirmation" name="password_confirmation" required
                                    placeholder="Konfirmasi kata sandi Anda"
                                    class="@error('password') is-invalid @enderror block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-600 focus:bg-white caret-teal-600" />
                            </div>
                            @error('password')
                            <div class="text-red-500 mt-3 bg-red-100 border border-red-400 rounded-md p-3">
                                Konfirmasi kata sandi tidak sesuai.
                            </div>
                            
                            
                            @enderror
                        </div>
                    
                        <div>
                            <button type="submit"
                                class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-teal-500 focus:outline-none hover:opacity-80 focus:opacity-80">
                                Daftar
                            </button>
                        </div>
                    
                        <div class="space-y-3 mt-3">
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
                                    <svg class="w-6 h-6 text-[#2563EB]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
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
                                    <svg class="w-6 h-6 text-[#333333]" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M12 0C5.37 0 0 5.37 0 12c0 5.302 3.438 9.8 8.208 11.385.6.11.82-.26.82-.58 0-.29-.01-1.26-.01-2.29-3.002.65-3.891-.72-4.141-1.39-.141-.36-.76-1.39-1.3-1.67-.44-.28-1.06-.97-.01-.98.98-.01 1.68.9 1.92 1.3 1.13 1.87 2.93 1.35 3.64 1.03.11-.82.44-1.38.8-1.7-2.81-.32-5.75-1.41-5.75-6.28 0-1.39.49-2.52 1.3-3.41-.13-.33-.56-1.61.12-3.35 0 0 1.06-.34 3.5 1.3 1-.28 2.06-.42 3.12-.42 1.06 0 2.12.14 3.12.42 2.44-1.64 3.5-1.3 3.5-1.3.68 1.74.25 3.02.13 3.35.81.89 1.3 2.02 1.3 3.41 0 4.88-2.95 5.96-5.77 6.28.45.39.85 1.16.85 2.34 0 1.69-.01 3.05-.01 3.47 0 .32.22.7.83.58C20.565 21.797 24 17.287 24 12c0-6.63-5.37-12-12-12">
                                        </path>
                                    </svg>
                                </div>
                                Masuk dengan GitHub
                            </a>
                        </div>
                    </form>
                    



                    <p class="mt-5 text-sm text-gray-600">
                        Situs ini dilindungi oleh reCAPTCHA dan <a href="#" title=""
                            class="text-blue-600 transition-all duration-200 hover:underline hover:text-blue-700">Kebijakan
                            Privasi Google</a> &
                        <a href="#" title=""
                            class="text-blue-600 transition-all duration-200 hover:underline hover:text-blue-700">Persyaratan
                            Layanan</a>
                    </p>
                </div>
            </div>
            <div
                class="relative lg:flex hidden items-end px-4 pb-10 pt-60 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
                <div class="absolute inset-0">
                    <img class="object-cover w-full h-full"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/signup/4/girl-working-on-laptop.jpg"
                        alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>

                {{-- <div class="relative">
                    <div class="w-full max-w-xl xl:w-full xl:mx-auto xl:pr-24 xl:max-w-xl">
                        <h3 class="text-4xl font-bold text-white">Gabung dengan 35rb+ profesional web & <br class="hidden xl:block" />bangun situs web Anda</h3>
                        <ul class="grid grid-cols-1 mt-10 sm:grid-cols-2 gap-x-8 gap-y-4">
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> Lisensi Komersial </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> Ekspor Tanpa Batas </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> 120+ Blok Kode </span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <div class="inline-flex items-center justify-center flex-shrink-0 w-5 h-5 bg-blue-500 rounded-full">
                                    <svg class="w-3.5 h-3.5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <span class="text-lg font-medium text-white"> File Desain Termasuk </span>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>

        </div>
    </section>


@endsection
