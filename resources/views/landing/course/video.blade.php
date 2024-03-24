@extends('layouts.auth.app', ['title' => 'Homepage'])

@section('content')
    <!-- Main Content -->
    <div class="w-full  p-5 md:p-20">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <!-- Video Content -->
                <div class="col-span-12  md:ml-52 ">
                    @php
                        $totalEpisodes = count($videos);
                    @endphp
                    <div class="w-auto h-56 md:h-96 border rounded-lg relative">
                        <iframe src="https://www.youtube.com/embed/{{ $video->video_code }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen class="rounded-lg w-full h-full"></iframe>
                    </div>
                    <div class="mt-2 text-xs md:text-sm ">
                        {!! $video->teori !!}
                    </div>
                    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
                        aria-controls="default-sidebar" type="button"
                        class="absolute bottom-0 top-0 left-0 p-2 mt-2 mr-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <!-- Tambahan Tombol Episode Selanjutnya dan Sebelumnya -->
                    <div class="flex justify-between mt-4">
                        @if ($video->episode > 1)
                            <a href="{{ route('course.video', [$course->slug, $video->episode - 1]) }}"
                                class="flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Sebelumnya
                            </a>
                        @endif
                        @if ($video->episode < $totalEpisodes)
                            <a href="{{ route('course.video', [$course->slug, $video->episode + 1]) }}"
                                class="flex items-center px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                Selanjutnya
                            </a>
                        @endif
                        @if ($video->episode == $totalEpisodes)
                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-md dark:bg-red-600 dark:hover:bg-red-700 dark:focus:bg-red-700 hover:bg-red-600 focus:outline-none focus:bg-red-500 focus:ring focus:ring-red-300 focus:ring-opacity-50">
                                    <span>Selesaikan Kelas</span>
                                </button>

                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="flex items-center justify-center min-h-screen px-4 text-center">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl">
                                            <div class="flex items-center justify-between">
                                                <h1 class="text-xl font-medium text-gray-800">Mempersiapkan Ujian</h1>
                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <p class="mt-2 text-sm text-gray-500">Persiapkan diri Anda untuk ujian. Pastikan
                                                Anda siap menjawab semua pertanyaan dengan cermat.</p>
                                            <div class="flex justify-end mt-4">
                                                <button @click="modelOpen = false"
                                                    class="px-4 py-2 mr-2 text-gray-700 bg-gray-300 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400">Cancel</button>
                                                <a href="{{ route('exams.exam', [$course->slug]) }}"
                                                    class="px-4 py-2 text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Mulai
                                                    Ujian</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <aside id="default-sidebar"
                    class="fixed top-0 left-0  z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
                    aria-label="Sidebar">
                    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                        <ul class="space-y-2 font-medium">
                            <li>
                                <p
                                    class="flex flex-col items-center p-2 pt-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                    <span class="mb-1  text-md text-black font-bold">Daftar Modul</span>
                                    <span class="text-sm">Total Episodes {{ $course->videos->count() }}</span>
                                </p>
                                <div class="flex items-center justify-center text-xs text-yellow-500 gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-star w-3 h-3 fill-yellow-500" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                        </path>
                                    </svg>
                                    {{ round($avgRating, 1) }} ( {{ $course->reviews->count() }} Rating )
                                </div>
                            </li>
                            <li class="{{ videoActive($video->episode) }}">
                                @foreach ($videos as $video)
                                    <a href="{{ route('course.video', [$course->slug, $video->episode]) }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ videoActive($video->episode) }}">
                                        <span class="flex-1 ms-3 whitespace-nowrap text-sm"> {{ $video->episode }}.
                                            {{ $video->name }}</span>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                        <div class="p-4 flex justify-end gap-2">
                            @if ($alreadyBought)
                                <div
                                    class="px-4 py-2 rounded-lg bg-sky-800 text-white flex items-center gap-2 text-sm border cursor-not-allowed border-sky-600">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-discount-check w-5 h-5" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M5 7.2a2.2 2.2 0 0 1 2.2 -2.2h1a2.2 2.2 0 0 0 1.55 -.64l.7 -.7a2.2 2.2 0 0 1 3.12 0l.7 .7c.412 .41 .97 .64 1.55 .64h1a2.2 2.2 0 0 1 2.2 2.2v1c0 .58 .23 1.138 .64 1.55l.7 .7a2.2 2.2 0 0 1 0 3.12l-.7 .7a2.2 2.2 0 0 0 -.64 1.55v1a2.2 2.2 0 0 1 -2.2 2.2h-1a2.2 2.2 0 0 0 -1.55 .64l-.7 .7a2.2 2.2 0 0 1 -3.12 0l-.7 -.7a2.2 2.2 0 0 0 -1.55 -.64h-1a2.2 2.2 0 0 1 -2.2 -2.2v-1a2.2 2.2 0 0 0 -.64 -1.55l-.7 -.7a2.2 2.2 0 0 1 0 -3.12l.7 -.7a2.2 2.2 0 0 0 .64 -1.55v-1">
                                        </path>
                                        <path d="M9 12l2 2l4 -4"></path>
                                    </svg>
                                    Premium Akses
                                </div>
                            @else
                                <form action="{{ route('cart.store', $course->id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="px-4 py-2 rounded-md bg-teal-500  text-white hover:bg-teal-800  flex items-center gap-2 text-sm w-48">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-basket w-5 h-5" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="7 10 12 4 17 10"></polyline>
                                            <path d="M21 10l-2 8a2 2.5 0 0 1 -2 2h-10a2 2.5 0 0 1 -2 -2l-2 -8z"></path>
                                            <circle cx="12" cy="15" r="2"></circle>
                                        </svg>
                                        Beli Sekarang
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
