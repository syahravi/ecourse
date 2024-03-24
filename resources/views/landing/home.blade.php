@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')

    <aside class="bg-slate-500 mt-12 md:mt-20 text-white p-6">
        <div class="flex flex-col gap-4 items-center mt-8">
            <h1 class="text-3xl font-semibold">DAFTAR COURSE</h1>
            <p class="text-sm text-white  lg:mx-auto text-center md:text-left">
                Kami menyediakan berbagai macam pembahasan dengan studi kasus yang dapat membantu menjadi seorang Developer
                Profesional.
            </p>
            <div class="w-20 bg-teal-800 h-1 mt-2"></div>
        </div>
    </aside>

    <section class="container p-8  md:text-2xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach ($courses as $course)
                <x-landing.course-item :course="$course" />
            @endforeach
        </div>

        <div class="flex justify-center mt-8">
            <a href="{{ route('course.index') }}"
                class="px-4 py-2 rounded-lg bg-teal-500 text-white hover:bg-teal-800 hover:duration-200 flex items-center gap-2 text-lg hover:transition-colors">
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
    <section class="w-full p-6 bg-slate-500 ">
        <div class="flex flex-col items-center justify-center p-4 space-y-8 md:p-10 md:px-24 xl:px-48">
            <h1 class="text-2xl md:text-3xl font-bold leading-none text-center text-white">
                TUNGGU APA LAGI ?
            </h1>
            <p class="text-sm md:text-base font-medium text-center text-white">
                Belajar lebih terarah dan sistematis dengan materi berkualitas tinggi beserta pendampingan mentoring secara
                intensif.
            </p>
            <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-8">
                <a href="{{ route('register') }}"
                    class="px-4 py-2 rounded-lg bg-slate-800 hover:text-teal-500 text-white text-base flex items-center gap-2 hover:scale-110 hover:duration-200 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        <path d="M16 11h6m-3 -3v6"></path>
                    </svg>
                    Daftar Gratis!
                </a>
            </div>
        </div>
    </section>
@endsection
