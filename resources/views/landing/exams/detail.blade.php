@extends('layouts.ujian.app', ['title' => 'Hasil ujian'])

@section('content')
    <div class="max-w-md mx-auto mt-48 rounded-lg text-gray-900">
        <div class="w-32 h-32 mx-auto -mt-16 border-4 {{ $examScore->passed ? 'border-teal-500' : 'border-red-500' }} rounded-full overflow-hidden flex justify-center items-center">
            <h1 class="text-black text-4xl font-bold {{ $examScore->passed ? 'text-teal-500' : 'text-red-500' }}">{{ $score }}</h1>
        </div>
        <div class="shadow-xl py-6">
            <p class="text-center py-3">Anda di nyatakan 
                <span class="{{ $examScore->passed ? 'text-teal-500' : 'text-red-500' }}"> {{ $examScore->passed ? 'Lulus' : 'Tidak Lulus' }}</span>
                <span>Pada kelas {{$course->name}}</span>
            </p>
            <div class="p-4 border-t mx-8">
                @if ($examScore->passed)
                    @if (auth()->user()->hasRole(['admin']))
                        <a href="{{ route('admin.mycourse') }}" class="block mx-auto text-center font-semibold text-white bg-teal-500 hover:bg-teal-600 px-6 py-2 rounded-md">Lihat Sertifikat</a>
                    @else
                        <a href="{{ route('member.mycourse') }}" class="block mx-auto text-center font-semibold text-white bg-teal-500 hover:bg-teal-600 px-6 py-2 rounded-md">Lihat Sertifikat</a>
                    @endif
                @else
                    <a href="{{ route('exams.exam', [$course->slug]) }}" class="block mx-auto text-center font-semibold text-white bg-red-500 hover:bg-red-600 px-6 py-2 rounded-md">Ulangi Ujian</a>
                @endif
            </div>
            
            <div class="flex justify-center items-center my-4">
                <img src="{{ Auth::user()->avatar }}" alt="Profil" class="w-10 h-10 rounded-full mr-2">
                <p class="text-sm font-semibold">{{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
@endsection
