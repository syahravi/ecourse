@extends('layouts.auth.app', ['title' => 'Node Found'])

@section('content')
<section class="pt-10 bg-gray-100 sm:pt-16 lg:pt-24">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold leading-tight text-teal-500 sm:text-4xl lg:text-5xl lg:leading-tight">Halaman ini Tidak Di Temukan</h2>
            <p class="mt-6 text-lg text-gray-900">Maaf, kami tidak bisa menemukan halaman tersebut. Anda akan menemukan banyak yang bisa dijelajahi di halaman utama.</p>
            <a href="/" title="" class="inline-flex items-center justify-center px-6 py-4 mt-12 text-base font-semibold text-white transition-all duration-200 bg-teal-600 border border-transparent rounded-md hover:bg-teal-700 focus:bg-teal-700" role="button">
                <svg class="w-5 h-5 mr-2 -ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                Kembali Ke Halaman Utama
            </a>
        </div>
    </div>

    <div class="container mx-auto 2xl:px-12">
        <img class="w-full mt-6" src="{{asset("asset/eror.png")}}" alt="" />
    </div>
</section>

@endsection
