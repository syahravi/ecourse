@extends('layouts.frontend.app', ['title' => 'faq'])

@section('content')
    <section class="relative py-14 overflow-hidden bg-black sm:py-16 lg:py-24 xl:py-32">
        <div class="absolute inset-0">
            <img class="object-cover w-full h-full md:object-left md:scale-150 md:origin-top-left"
                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/5/girl-working-on-laptop.jpg"
                alt="" />
        </div>

        <div class="absolute inset-0 hidden bg-gradient-to-r md:block from-black to-transparent"></div>

        <div class="absolute inset-0 block bg-black/60 md:hidden"></div>

        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="text-center md:w-2/3 lg:w-1/2 xl:w-1/3 md:text-left">
                <h2 class="text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl">Frequently Asked Questions
                </h2>
                <p class="mt-4 text-base text-gray-200">Kumpulan jawaban dari pertanyaan yang paling sering ditanyakan.</p>
            </div>
        </div>
    </section>
    <section class="py-10 overflow-hidden  sm:py-16 lg:py-24 xl:py-32">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <h2 class="text-2xl font-bold leading-tight text-black sm:text-3xl lg:text-4xl">PROGRAM PELATIHAN</h2>
            <div class="flow-root mt-9 md:mt-9">

                <div id="accordion-color" data-accordion="collapse"
                    data-active-classes="bg-teal-100 dark:bg-gray-800 text-teal-600 dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500  rounded-t-xl gap-3"
                            data-accordion-target="#accordion-color-body-1" aria-expanded="true"
                            aria-controls="accordion-color-body-1">
                            <span>Major apa saja yang tersedia di unusia course?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="p-5  dark:border-gray-700 dark:bg-gray-900">

                            <ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-gray-400">

                                <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                    <li>Design</li>
                                    <li>Software Engineering 
                                    </li>
                                    <li>Data Science
                            </ul>

                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500  focus:ring-4 focus:ring-teal-200 dark:focus:ring-teal-800 dark:border-gray-700 dark:text-gray-400 hover:bg-teal-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-2" aria-expanded="false"
                            aria-controls="accordion-color-body-2">
                            <span>Metode pembelajaran seperti apa yang digunakan di unusia course?</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="p-5  ">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed
                                Metode pembelajaran yang digunakan di Unusia Course berfokus pada interaktivitas dan adaptabilitas, dengan menyediakan konten yang menarik dan relevan bagi siswa dari berbagai latar belakang. Mereka mengintegrasikan teknologi untuk memfasilitasi keterlibatan siswa melalui video pembelajaran, latihan interaktif, dan forum diskusi online yang memungkinkan kolaborasi dan pertukaran ide. Dengan pendekatan ini, Unusia Course menciptakan lingkungan belajar yang dinamis dan mendukung pertumbuhan intelektual yang holistik bagi setiap individu yang mengaksesnya.</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button"
                            class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-teal-200 dark:focus:ring-teal-800 dark:border-gray-700 dark:text-gray-400 hover:bg-teal-100 dark:hover:bg-gray-800 gap-3"
                            data-accordion-target="#accordion-color-body-3" aria-expanded="false"
                            aria-controls="accordion-color-body-3">
                            <span>Siapa yang dapat menjadi Tutor di unsuia course??</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                            <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components
                                Kami hanya memilih Tutor dengan pengalaman bekerja minimal 3 tahun, dengan track-record yang sangat baik, dan pernah atau sedang bekerja di perusahaan teknologi ternama.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
