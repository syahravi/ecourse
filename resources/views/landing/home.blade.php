@extends('layouts.frontend.app', ['title' => 'Homepage'])

@section('content')
    @include('layouts.frontend.partials.hero')
    <section class="relative font-inter antialiased dark:bg-slate-800">

        <div class="relative  flex flex-col justify-center  overflow-hidden">
            <div class="w-full mx-auto px-4 ">
                <div class="text-center">
    
                    <!-- Logo Carousel animation -->
                    <div
                        x-data="{}"
                        x-init="$nextTick(() => {
                            let ul = $refs.logos;
                            ul.insertAdjacentHTML('afterend', ul.outerHTML);
                            ul.nextSibling.setAttribute('aria-hidden', 'true');
                        })"
                        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]"
                    >
                        <ul x-ref="logos" class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"  class="w-14 h-14 md:w-28 md:h-28 grayscale transition duration-300 ease-in-out hover:grayscale-0"  viewBox="0 0 48 48">
                                    <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path><path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path><path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path><path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                    </svg>
                            </li>
                            <li>
                                <img src="{{asset('asset/Logo Himatika.png')}}" alt="HIMATIKA" class=" grayscale transition duration-300 ease-in-out hover:grayscale-0 w-14 h-14 md:w-28 md:h-28" />
                            </li>
                            <li>
                                <img src="{{asset('asset/Universitas_Nahdlatul_Ulama_Indonesia_(UNUSIA)_logo.png')}}" alt="UNUSIA" class=" grayscale transition duration-300 ease-in-out hover:grayscale-0 w-14 h-14 md:w-28 md:h-28"  />
                            </li>
                            <li>
                                <img src="{{asset('asset/kemindut.png')}}" alt="Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi" class=" grayscale transition duration-300 ease-in-out hover:grayscale-0 w-14 h-14 md:w-28 md:h-28" />
                            </li>
                            <li>
                                <img src="{{asset('asset/KL2_Nahdlatul Ulama (NU) - Koleksilogo.com.svg')}}" alt="nahlatul ulama" class="grayscale transition duration-300 ease-in-out hover:grayscale-0 w-32 h-32 p-2  md:w-64 md:h-64"/>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class=" grayscale transition duration-300 ease-in-out hover:grayscale-0 w-14 h-14 md:w-28 md:h-28" viewBox="0 0 48 48">
                                    <path fill="#FF3D00" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path><path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                    </svg>
                            </li>
                            <li>
                                <img src="{{asset('asset/midtrans_logo.svg')}}" alt="" class="grayscale transition duration-300 ease-in-out hover:grayscale-0 P-2 w-32 h-32  md:w-64 md:h-64"/>
                            </li>
                            <li>
                                <img src="{{asset('asset/lokasi.png')}}" alt="nahlatul ulama" class=" grayscale transition duration-300 ease-in-out hover:grayscale-0 w-14 h-14 md:w-28 md:h-28"/>
                            </li>
                        </ul>                
                    </div>
                    <!-- End: Logo Carousel animation -->
                    
                </div>
    
            </div>
        </div>
    
    </section>
    <aside class="  text-black p-6 dark:bg-slate-800 dark:text-white">
        <div class="flex flex-col gap-4 items-center mt-8">
            <h1 class="text-3xl font-semibold ">DAFTAR COURSE</h1>
            <p class="text-sm text-black  lg:mx-auto text-center md:text-left dark:text-white">
                Kami menyediakan berbagai macam pembahasan dengan studi kasus yang dapat membantu menjadi seorang
                .
            </p>
            <div class="w-20 bg-teal-800 h-1 mt-2 dark:bg-teal-500"></div>
        </div>
    </aside>

    <section class="py-10 overflow-hidden  sm:py-16 lg:py-14 dark:bg-slate-800">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl py-2">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($courses->take(4) as $course)
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
    <div class="bg-teal-50 dark:bg-slate-800 ">
        <section class="pt-10 sm:pt-16 lg:pt-20">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <img class="w-full" src="{{ asset('asset/bella.png') }}" alt="" />
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl dark:text-white">
                            Tunggu Apa Lagi ?
                        </h1>

                        <p class="mt-8 text-base text-black sm:text-xl dark:text-white">Belajar lebih terarah dan sistematis dengan materi
                            berkualitas tinggi beserta pendampingan mentoring secara
                            intensif.</p>

                        <div class="mt-10 block md:flex md:flex-row justify-center md:justify-start sm:space-x-8">
                            <a href="{{ route('register') }}" title=""
                                class="flex justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-teal-500 hover:bg-teal-600 focus:bg-teal-600 dark:text-white"
                                role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 11h6m-3 -3v6"></path>
                                </svg>
                                Daftar Sekarang
                            </a>
                        </div>

                    </div>


                </div>
            </div>
        </section>
    </div>
    <div class="bg-white dark:bg-slate-800">
        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2 ">
                    <div>
                        <div>
                            <h3 class=" text-2xl lg:text-4xl font-extrabold dark:text-white">Unu Course Telah Berdampak Positif Mencetak
                                Kelas Digital Indonesia</h3>
                        </div>
                        <div class="flex justify-center mt-14 lg:mt-24 ">
                            <div class="grid grid-cols-2 gap-20">
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold dark:text-white">{{ $courseCount }}</dt>
                                    <dd class="text-gray-500 dark:text-white">Kelas</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold dark:text-white">{{ $categoryCount }}</dt>
                                    <dd class="text-gray-500 dark:text-white">Categories</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold dark:text-white">{{ $showcaseCount }}</dt>
                                    <dd class="text-gray-500 dark:text-white">Portofolio</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="mb-2 text-3xl font-extrabold dark:text-white">{{ $authorCount }}</dt>
                                    <dd class="text-gray-500 dark:text-white">Mentor</dd>
                                </div>
                                <div class=" block md:flex justify-center col-span-2 gap-6">
                                    <a href="{{ route('course.index') }}" type="button"
                                        class="text-white bg-teal-500 hover:bg-teal-600 font-extrabold rounded-lg w-full md:w-52 text-sm px-10 py-4 text-center me-2 mb-2">Selengkapnya</a>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScrKbFuzR7m2XCcsLCXxLQc24srF8IW1vn0CHW8M1dnim1HgQ/viewform?usp=sf_link"
                                        type="button" target="_blank"
                                        class="text-teal-500 bg-teal-100 hover:bg-teal-200 font-extrabold rounded-lg text-sm px-10 py-4 text-center w-full md:w-60  me-2 mb-2">Tulis
                                        Pendapat kamu</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="my-3 md:my-1">
                            <p class=" text-base lg:text-lg text-start lg:text-end dark:text-white">Unu Course adalah platform pendidikan
                                teknologi yang menyediakan konten pembelajaran keterampilan digital secara daring,
                                memungkinkan akses di mana saja.</p>
                        </div>
                        <div>
                            <img class="w-full" src="{{ asset('asset/landing.svg') }}" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>    
  
    

   
    
@endsection
