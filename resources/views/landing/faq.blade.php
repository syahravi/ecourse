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
    <div class="relative font-inter antialiased">
        <div class="relative min-h-4 flex flex-col justify-center bg-slate-50 dark:bg-slate-900 overflow-hidden">
            <div class="w-full max-w-7xl mx-auto px-4 md:px-6 py-24">
                <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-4">FAQs</h1>
                <!-- Komponen Akordion -->
                <div class="divide-y divide-slate-200">
                    <!-- Item Akordion 1 -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button id="faqs-title-01" type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2 dark:text-white"
                                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-01">
                                <span>Apa saja kursus yang ditawarkan?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                </svg>
                            </button>
                        </h2>
                        <div id="faqs-text-01" role="region" aria-labelledby="faqs-title-01"
                            class="grid text-sm text-slate-600  dark:text-white overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                    Kami menawarkan berbagai macam kursus termasuk pengembangan web, ilmu data,
                                    desain grafis, pemasaran digital, dan lainnya. Periksa situs web kami untuk
                                    daftar lengkap kursus.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Akordion 2 -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button id="faqs-title-02" type="button"
                                class="flex items-center justify-between w-full text-left font-semibold py-2 dark:text-white"
                                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-02">
                                <span>Apakah Anda menyediakan sertifikasi untuk kursus Anda?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                </svg>
                            </button>
                        </h2>
                        <div id="faqs-text-02" role="region" aria-labelledby="faqs-title-02"
                            class="grid text-sm text-slate-600 dark:text-white overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                    Ya, kami menyediakan sertifikasi untuk kursus kami setelah menyelesaikannya
                                    dengan sukses. Sertifikasi kami diakui dan dihargai oleh para profesional
                                    industri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Akordion 3 -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button id="faqs-title-03" type="button"
                                class="flex items-center justify-between dark:text-white w-full text-left font-semibold py-2"
                                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-03">
                                <span>Apakah kursus Anda dapat diikuti kapan saja?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                </svg>
                            </button>
                        </h2>
                        <div id="faqs-text-03" role="region" aria-labelledby="faqs-title-03"
                            class="grid text-sm text-slate-600 dark:text-white overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                    Ya, sebagian besar kursus kami dapat diikuti kapan saja, memungkinkan Anda
                                    untuk belajar sesuai kenyamanan dan kecepatan Anda sendiri.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Item Akordion 4 -->
                    <div x-data="{ expanded: false }" class="py-2">
                        <h2>
                            <button id="faqs-title-04" type="button"
                                class="flex items-center dark:text-white justify-between w-full text-left font-semibold py-2"
                                @click="expanded = !expanded" :aria-expanded="expanded" aria-controls="faqs-text-04">
                                <span>Apakah Anda menyediakan dukungan instruktur?</span>
                                <svg class="fill-indigo-500 shrink-0 ml-8" width="16" height="16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                    <rect y="7" width="16" height="2" rx="1"
                                        class="transform origin-center rotate-90 transition duration-200 ease-out"
                                        :class="{ 'rotate-180': expanded }" />
                                </svg>
                            </button>
                        </h2>
                        <div id="faqs-text-04" role="region" aria-labelledby="faqs-title-04"
                            class="grid text-sm text-slate-600 dark:text-white overflow-hidden transition-all duration-300 ease-in-out"
                            :class="expanded ? 'grid-rows-[1fr] opacity-100' : 'grid-rows-[0fr] opacity-0'">
                            <div class="overflow-hidden">
                                <p class="pb-3">
                                    Ya, kami menyediakan dukungan instruktur untuk membantu Anda dalam perjalanan
                                    belajar Anda. Instruktur kami siap membantu dan menjawab pertanyaan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir: Komponen Akordion -->
            </div>
        </div>
    </div>
@endsection
