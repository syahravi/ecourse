@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')

    <aside class=" mt-12 md:mt-20 text-black p-6">
        <div class="flex flex-col gap-4 items-center mt-8">
            <h1 class="text-3xl font-semibold">DAFTAR COURSE</h1>
            <p class="text-sm text-black  lg:mx-auto text-center md:text-left">
                Kami menyediakan berbagai macam pembahasan dengan studi kasus yang dapat membantu menjadi seorang
                .
            </p>
            <div class="w-20 bg-teal-800 h-1 mt-2"></div>
        </div>
    </aside>

    <section class="py-10 overflow-hidden  sm:py-16 lg:py-14">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl py-2">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($courses as $course)
                    <x-landing.course-item :course="$course" />
                @endforeach
            </div>
        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ route('course.index') }}"
                class="px-10 py-2 rounded-lg bg-amber-400 text-black font-bold hover:bg-amber-500 hover:duration-200 flex items-center gap-2 text-base hover:transition-colors">
                Lihat Semua Course
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right w-5 h-5"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg>
            </a>
        </div>
    </section>
    <div class="bg-teal-100">
        <section class="py-10 sm:pt-16 lg:pt-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                            Tunggu Apa Lagi ?
                        </h1>

                        <p class="mt-8 text-base text-black sm:text-xl">Belajar lebih terarah dan sistematis dengan materi
                            berkualitas tinggi beserta pendampingan mentoring secara
                            intensif.</p>

                        <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                            <a href="{{ route('register') }}" title=""
                                class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-teal-500 hover:bg-teal-600 focus:bg-teal-600"
                                role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 11h6m-3 -3v6"></path>
                                </svg>
                                Daftar Sekarang </a>

                        </div>
                    </div>

                    <div>
                        <img class="w-full"
                        src="{{asset('asset/Biru dan Oranye Modern Webinar Parenting Instagram Post.png')}}"
                            alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
