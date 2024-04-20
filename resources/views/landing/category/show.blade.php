@extends('layouts.frontend.app', ['title' => 'Course'])

@section('content')
    <!-- hero section -->
    <x-landing.hero-section title="Category"
        subtitle="Kumpulan video tutorial dengan category {{ str()->lower($category->name) }}"
        details="Disini kita akan mempelajarinya semua dari awal, jangan terlalu lama berfikir! karena disini tidak hanya mengajarkan tentang fundamental tetapi dengan studi kasus didalamnya."
        :data="$courses" cardtitle="Course">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category-2 h-10 w-10 md:w-20 md:h-20"
            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M14 4h6v6h-6z"></path>
            <path d="M4 14h6v6h-6z"></path>
            <circle cx="17" cy="17" r="3"></circle>
            <circle cx="7" cy="7" r="3"></circle>
        </svg>
    </x-landing.hero-section>
    <!-- search section -->
    <x-landing.search-section :url="route('category', $category->slug)" />
    <!-- course section -->
    <div class="py-10 overflow-hidden  sm:py-16 lg:py-14 dark:bg-slate-900 ">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl py-2">
            <h2 class="text-2xl font-bold text-center leading-tight dark:text-white sm:text-3xl lg:text-4xl">Course Yang Tersedia</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto my-5 items-start">
                @foreach ($courses as $course)
                    <x-landing.course-item :course="$course" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
