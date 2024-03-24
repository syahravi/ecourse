@extends('layouts.backend.app', ['title' => 'Episode'])
@section('content')
    <h1>Buat Ujian Baru</h1>
    <form action="{{ route('admin.exams.store', $course->slug)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="question">Pertanyaan:</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <div class="form-group">
            <label for="option1">Option 1:</label>
            <input type="text" class="form-control" id="option1" name="option1" required>
        </div>
        <div class="form-group">
            <label for="option2">Option 2:</label>
            <input type="text" class="form-control" id="option2" name="option2" required>
        </div>
        <div class="form-group">
            <label for="option3">Option 3:</label>
            <input type="text" class="form-control" id="option3" name="option3" required>
        </div>
        <div class="form-group">
            <label for="option4">Option 4:</label>
            <input type="text" class="form-control" id="option4" name="option4" required>
        </div>
        <div class="form-group">
            <label for="soal">No.Soal</label>
            <input type="number" class="form-control" id="soal" name="soal" required>
        </div>
        <div class="form-group">
            <label for="correct_answer">Jawaban Benar (Pilih opsi 1-4):</label>
            <input type="number" class="form-control" id="correct_answer" name="correct_answer" min="1" max="4" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

