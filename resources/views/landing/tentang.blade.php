@extends('layouts.frontend.app', ['title' => 'Tentang Kami'])

@section('content')
<section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="grid items-center grid-cols-1 lg:items-stretch md:grid-cols-2 gap-y-8 gap-x-12 xl:gap-x-20">
            <div class="relative">
                <div class="aspect-w-4 aspect-h-3">
                    <img class="object-cover w-full h-full" src="{{asset('asset/5 reasons.svg')}}" alt="unusia course" />
                </div>
            </div>

            <div class="flex flex-col justify-between md:py-5">
                <blockquote>
                    <p class="text-2xl leading-relaxed text-black">"Kenapa Unusia Course karena komitmen mereka terhadap kualitas pembelajaran dan pengalaman pengguna yang unik. Dengan berbagai fitur interaktif dan kurikulum yang disesuaikan, Unusia Course memberikan solusi yang tepat bagi kebutuhan pendidikan kami yang beragam. Dukungan tim teknis yang responsif dan fleksibilitas platform membuatnya menjadi pilihan yang ideal untuk membangun masa depan karir kami."</p>
                </blockquote>

                <div class="mt-6 lg:mt-auto">
                    <p class="text-xl font-semibold text-black">Yuliana</p>
                    <p class="mt-2 text-base text-gray-600">Senior Data Scientist</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
