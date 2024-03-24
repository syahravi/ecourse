@extends('layouts.ujian.app', ['title' => 'Hasil ujian'])

@section('content')
    <div
        class="max-w-2xl mx-4 sm:max-w-sm md:max-w-sm lg:max-w-sm xl:max-w-sm sm:mx-auto md:mx-auto lg:mx-auto xl:mx-auto mt-16 bg-white shadow-xl rounded-lg text-gray-900">
        <div class="rounded-t-lg h-32 overflow-hidden">
            <img class="object-cover object-top w-full"
                src='https://images.unsplash.com/photo-1659422530627-a2a429733450?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
                alt='Mountain'>
        </div>
        <div class="mx-auto w-32 h-32 relative -mt-16 border-4 border-white rounded-full overflow-hidden">
            <img class="object-cover object-center h-32" src="{{ Auth::user()->avatar }}">
        </div>
        <div class="text-center mt-2">
            <h2 class="font-semibold">{{ $user->name }}</h2>
            <p class="text-gray-500">{{ $course->name }}</p>
        </div>
        <div class="p-4 border-t mx-8 mt-2">
            <button
                class="w-1/2 block mx-auto rounded-full {{ $examScore->passed ? 'bg-teal-500' : 'bg-red-500' }} hover:shadow-lg font-semibold text-white px-6 py-2">{{ $score }}</button>
        </div>
        <div class="p-4 border-t mx-8 mt-2">
            <button
                class="w-1/2 block mx-auto rounded-full {{ $examScore->passed ? 'bg-teal-500' : 'bg-red-500' }} hover:shadow-lg font-semibold text-white px-6 py-2">{{ $examScore->passed ? 'Lulus' : 'Tidak Lulus' }}</button>
        </div>
        <div class="p-4 border-t mx-8 mt-2">
            @if($examScore->passed)
                @if(auth()->user()->hasRole(['admin']))
                    <a href="{{ route('admin.mycourse') }}" class="block mx-auto text-center font-semibold text-black px-6 py-2">Lihat Sertifikat</a>
                @else
                    <a href="{{ route('member.mycourse') }}" class="block mx-auto text-center font-semibold text-black px-6 py-2">Lihat Sertifikat</a>
                @endif
            @else
            <a href="{{ route('exams.exam', [$course->slug]) }}"class="block mx-auto text-center font-semibold text-black px-6 py-2">Ulangi Ujian</a>
            @endif
        </div>
        
    </div>
@endsection


