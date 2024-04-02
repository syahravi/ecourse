@extends('layouts.auth.app', ['title' => 'Register'])

@section('content')
    <div class="min-h-screen  flex items-center justify-center"
        style="background-image: url('{{ asset('asset/23918964_6852524.svg') }}'); background-size: cover; background-position: center;">
        <section class="w-full max-w-6xl  pb-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 rounded-md">
                <div class="flex flex-col items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-7">
                    <img src="{{ asset('asset/logo1.png') }}" alt="" class="w-40 h-auto mb-6">
                    <div class="xl:w-full xl:max-w-md 2xl:max-w-md xl:mx-auto ">
                        <h2 class="text-3xl font-bold leading-tight text-center md:text-left text-black sm:text-4xl">Selamat
                            datang di Course <span class="bg-green-600 text-white px-2 rounded-md"> Unusia</span> </h2>
                        <p class="mt-2 text-base text-center md:text-left text-gray-600">Sudah Punya akun? <a href="/login"
                                title=""
                                class="font-medium text-teal-600 transition-all duration-200 hover:text-teal-700 focus:text-teal-700 hover:underline">Masuk</a>
                        </p>
                        <hr>
                        <form x-data="{ showPassword: false }" action="{{ route('register') }}" method="post" class="space-y-5">
                            @csrf
                            <div>
                                <label for="name" class="text-base font-medium text-gray-900">Nama Lengkap</label>
                                <div class="relative mt-2.5">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
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
                                        <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
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
                                        <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                        </svg>
                                    </div>
                                    <input x-bind:type="showPassword ? 'text' : 'password'" id="password" name="password"
                                        required placeholder="Masukkan kata sandi Anda"
                                        class="@error('password') is-invalid @enderror block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-teal-600 focus:bg-white caret-teal-600" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                        x-on:click="showPassword = !showPassword">
                                        <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path x-show="!showPassword" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path x-show="showPassword" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 17s4-2 4-5-4-5-4-5-4 2-4 5 4 5 4 5z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="password_confirmation" class="text-base font-medium text-gray-900">Ulangi
                                    Sandi</label>
                                <div class="relative mt-2.5">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400 focus-within:text-gray-600"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                        </svg>
                                    </div>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        required placeholder="Konfirmasi kata sandi Anda"
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
                        </form>
                    </div>
                </div>
                <div class="relative lg:flex hidden items-end px-4 pb-10 pt-24 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
                    <div class="absolute inset-0">
                        <img class="object-cover w-full h-full" src="{{ asset('asset/register.svg') }}" alt="" />
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
                </div>

            </div>
        </section>
    </div>
@endsection
