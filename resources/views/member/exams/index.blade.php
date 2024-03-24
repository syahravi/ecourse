@extends('layouts.backend.app', ['title' => 'Video'])

@section('content')
    <h1>Daftar Ujian</h1>
    <a href="{{ route('member.exams.create', $course->slug) }}" class="btn btn-primary mb-3">Buat Ujian Baru</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Pertanyaan</th>
                <th>No.Soal</th> <!-- Mengubah label menjadi No.Soal -->
                <th>Jawaban</th> <!-- Mengubah label menjadi Jawaban -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exams as $exam)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $exam->question }}</td>
                    <td>{{ $exam->soal }}</td> <!-- Menggunakan colom soal_number untuk menampilkan nomor soal -->
                    <td>{{ $exam->correct_answer }}</td> <!-- Menggunakan colom yang sesuai untuk menampilkan jawaban -->
                    <td>
                        <x-button-edit :url="route('member.exams.edit', [$course->slug, $exam->id])" class="btn btn-sm btn-primary">Edit</x-button-edit>
                        <x-button-delete :id="$exam->id" :url="route('member.exams.destroy', $exam->id)" class="sm:mr-2" />
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
