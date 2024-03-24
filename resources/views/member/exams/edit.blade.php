@extends('layouts.backend.app', ['title' => 'Episode'])

@section('content')
    <h1>Edit Ujian</h1>
    <form action="{{ route('member.exams.update', [$course->slug, $exam->id]) }}" method="POST" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Pertanyaan:</label>
            <input type="text" class="form-control" id="question" name="question" value="{{ $exam->question }}" required>
        </div>
        <div class="form-group">
            <label for="option1">Option 1:</label>
            <input type="text" class="form-control" id="option1" name="option1" value="{{ $exam->option1 }}" required>
        </div>
        <div class="form-group">
            <label for="option2">Option 2:</label>
            <input type="text" class="form-control" id="option2" name="option2" value="{{ $exam->option2 }}" required>
        </div>
        <div class="form-group">
            <label for="option3">Option 3:</label>
            <input type="text" class="form-control" id="option3" name="option3" value="{{ $exam->option3 }}" required>
        </div>
        <div class="form-group">
            <label for="option4">Option 4:</label>
            <input type="text" class="form-control" id="option4" name="option4" value="{{ $exam->option4 }}" required>
        </div>
        <div class="form-group">
            <label for="soal">No.Soal</label>
            <input type="number" class="form-control" id="soal" name="soal" value="{{ $exam->soal }}" required>
        </div>
        <div class="form-group">
            <label for="correct_answer">Jawaban Benar (Pilih opsi 1-4):</label>
            <input type="number" class="form-control" id="correct_answer" name="correct_answer" value="{{ $exam->correct_answer }}" min="1" max="4" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
