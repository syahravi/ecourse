@extends('layouts.auth.app', ['title' => 'Lupa Password'])

@section('content')
@if (session('status'))
<div x-data="{ open: true }">
    <div x-show="open" id="popup-modal" tabindex="-1"
        class="fixed inset-0 z-50 flex items-center justify-center overflow-y-auto overflow-x-hidden bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative bg-white rounded-lg shadow-lg">
                <button type="button"
                    class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center"
                    @click="open = false">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <span class="font-semibold text-green-700">Sukses</span>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kami telah mengirim tautan pengaturan ulang kata sandi ke email Anda.</h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endif


    <body class="antialiased bg-slate-200 bg-cover bg-center"
        style="background-image: url('https://cdn.rareblocks.xyz/collection/celebration/images/signin/4/girl-thinking.jpg');">
        <div class="flex justify-center items-center h-screen">
            <div class="max-w-lg w-full mx-4 bg-white bg-opacity-50 rounded-xl shadow-xl">
                <div class="p-8 z-50">
                    <h1 class="text-4xl font-medium text-black">Atur ulang kata sandi</h1>
                    <p class="text-black">Isi formulir untuk menyetel ulang kata sandi</p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="flex flex-col space-y-5">
                            <label for="email" class="text-black">
                                <p class="font-medium pb-2">Alamat email</p>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus
                                    class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"
                                    placeholder="Masukkan alamat email @error('email') @enderror">
                            </label>
                            @error('email')
                            <div class="bg-red-100 border my-2 border-red-400 text-red-700 px-4 py-2 text-sm rounded relative">
                                @if($message === 'We can\'t find a user with that email address.')
                                    <strong>Kami tidak dapat menemukan pengguna dengan alamat email tersebut.</strong>
                                @elseif($message === 'Please wait before retrying.')
                                    <strong>Mohon tunggu sebelum mencoba lagi.</strong>
                                @else
                                    <strong>{{ $message }}</strong>
                                @endif
                            </div>
                        @enderror
                        
                            <button type="submit"
                                class="w-full py-3 font-medium text-white bg-teal-600 hover:bg-teal-500 rounded-lg border-teal-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                                </svg>
                                <span>Atur ulang kata sandi</span>
                            </button>
                            <p class="text-center text-black">Belum punya akun? <a href="/register"
                                    class="text-teal-600 font-medium inline-flex space-x-1 items-center"><span>Daftar
                                        sekarang</span><span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg></span></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
