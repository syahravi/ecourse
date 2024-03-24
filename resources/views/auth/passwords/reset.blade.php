@extends('layouts.auth.app', ['title' => 'Reset Kata Sandi'])

@section('content')
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-40 h-auto " src="{{ asset('asset/logo1.png') }}" alt="logo">
            </a>
            <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
                <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Ganti Kata Sandi Baru
                </h2>
                <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @if (session('status'))
                        <div class="text-red-900" >
                            {{ session('status') }}
                        </div>
                    @endif
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Anda</label>
                        <input id="email" type="email" name="email" value="{{ $request->email ?? old('email') }}"
                            required autocomplete="email" autofocus placeholder="Masukkan Alamat Email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 @error('email') is-invalid @enderror">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata
                            Sandi Baru</label>
                        <input id="password" type="password" name="password" required autocomplete="new-password"
                            placeholder="Masukkan Password Baru"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 @error('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata
                            Sandi</label>
                        <input id="password-confirm" type="password"
                            required autocomplete="new-password" placeholder="Konfirmasi Password Baru"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-teal-600 focus:border-teal-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500">
                    </div>
                    <button type="submit"
                        class="w-full text-white bg-teal-600 hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Reset
                        Kata Sandi</button>
                </form>
            </div>
        </div>
    </section>
@endsection
