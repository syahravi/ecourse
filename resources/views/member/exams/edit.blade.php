@extends('layouts.backend.app', ['title' => 'Episode'])

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <form action="{{ route('member.exams.update', [$course->slug, $exam->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <x-card-form title="EDIT UJIAN" :url="route('member.exams.index', $course->slug)" titleBtn="Simpan Perubahan">
                    <x-input title="Pertanyaan" name="question" type="text" placeholder="Masukkan pertanyaan" :value="$exam->question" required />
                    <div class="row">
                        <div class="col-6">
                            <x-input title="Option 1" name="option1" type="text" placeholder="Masukkan opsi 1"
                                :value="$exam->option1" required />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 2" name="option2" type="text" placeholder="Masukkan opsi 2"
                                :value="$exam->option2" required />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 3" name="option3" type="text" placeholder="Masukkan opsi 3"
                                :value="$exam->option3" required />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 4" name="option4" type="text" placeholder="Masukkan opsi 4"
                                :value="$exam->option4" required />
                        </div>
                    </div>
                    <x-input title="No. Soal" name="soal" type="number" placeholder="Masukkan nomor soal" :value="$exam->soal" required />
                    <x-input title="Jawaban Benar (Pilih opsi 1-4)" name="correct_answer" type="number" placeholder="Pilih jawaban benar (1-4)" :value="$exam->correct_answer" min="1" max="4" required />
                </x-card-form>
            </form>
        </div>
    </div>
@endsection
