@extends('layouts.backend.app', ['title' => 'ujian'])

@section('content')
    <a href="{{ route('admin.course.index') }}" class="btn btn-danger mb-3">
        <i class="fas fa-arrow-left mr-1"></i> GO BACK
    </a>
    <x-button-create title="ADD NEW SOAL" :url="route('admin.exams.create', $course->slug)" />

    <x-card title="LIST SOAL - {{ $course->name }}">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NO.SOAL</th>
                    <th>PERTAYAAN</th>
                    <th>JAWABAN</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exams as $exam)
                    <tr>
                        <td>{{ $exam->soal }}</td>
                        <td>{{ $exam->question }}</td>
                        <td>{{ $exam->correct_answer }}</td>


                        <td>
                            <x-button-edit :url="route('admin.exams.edit', [$course->slug, $exam->id])" class="sm:mr-2" />
                            <x-button-delete :id="$exam->id" :url="route('admin.exams.destroy', $exam->id)" class="sm:mr-2" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
@endsection
