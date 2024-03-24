@extends('layouts.frontend.app', ['title' => 'Course'])

@section('content')
<section class="py-10 bg-white sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:grid-cols-2 gap-x-12 xl:gap-x-24 gap-y-12">
            <div class="relative lg:mb-12">
                <img class="absolute -right-0 -bottom-8 xl:-bottom-12 xl:-right-4" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/dots-pattern.svg" alt="" />
                <div class="pl-12 pr-6">
                    <img class="relative" src="https://cdn.rareblocks.xyz/collection/celebration/images/content/3/girl-working-on-laptop.jpg" alt="" />
                </div>
            </div>

            <div class="2xl:pl-16">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl lg:leading-tight">Kumpulan Course</h2>
                <p class="text-xl leading-relaxed text-gray-900 mt-9"> Kumpulan video tutorial yang dapat membantu proses belajar anda secara sistematis</p>
                <p class="mt-6 text-xl leading-relaxed text-gray-900"> Disini kita akan mempelajarinya semua dari awal, jangan terlalu lama berfikir! karena disini tidak hanya mengajarkan tentang fundamental tetapi dengan studi kasus didalamnya.</p>
            </div>
        </div>
    </div>
</section>
    <!-- search section -->
    <x-landing.search-section :url="route('course.index')" />
    <!-- course section -->
    <div class="w-full bg-white p-3 ">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 container mx-auto my-5 items-start">
                @foreach ($courses as $course)
                    <x-landing.course-item :course="$course" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
