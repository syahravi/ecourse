@extends('layouts.frontend.app', ['title' => 'tim'])

@section('content')
<section class="bg-white pt-5 md:pt-10 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tim Kami</h2>
        </div> 
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim3.svg')}}" alt="Saeful">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Saeful Mu'minin
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">CEO & Web Developer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">CEO bertanggung jawab atas pengambilan keputusan strategis sementara Web Developer merancang dan mengembangkan situs web.</p>
                </div>
            </div> 
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim2.svg')}}" alt="Bella melya">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Bella Melya
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Marketing & Sale</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Marketing & Sales bertanggung jawab atas strategi pemasaran dan penjualan produk </p>
                </div>
            </div> 
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim1.svg')}}" alt="syahravi">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Muh.fajri hidayat
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Senior Front-end Developer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Tugas seorang Senior Front-end Developer mencakup merancang, mengembangkan, dan mengelola antarmuka pengguna</p>
                </div>
            </div> 
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim5.svg')}}" alt="syahravi">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Syahravi
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Lead Software Engineer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Bertanggung jawab atas arsitektur, pengembangan, dan pemeliharaan sistem perangkat lunak inti perusahaan.</p>
                </div>
            </div>
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim4.svg')}}" alt="yuliana">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Yuliana
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Senior Data Scientist</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Menyelidiki data perusahaan untuk menemukan wawasan yang berharga dan mendukung pengambilan keputusan.</p>
                </div>
            </div>  
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div>
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="{{asset('asset/tim6.svg')}}" alt="riski">
                </div>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                       Muhamad Riski Maulana
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">DevOps Engineer</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Merancang, mengimplementasikan, dan memelihara infrastruktur otomatisasi dan manajemen kode untuk mempercepat siklus pengembangan perangkat lunak.</p>
                </div>
            </div>    
        </div>  
    </div>
  </section>
@endsection
