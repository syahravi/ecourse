@extends('layouts.backend.app', ['title' => 'SOAL'])

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <form action="{{ route('member.exams.store', $course->slug) }}" method="POST">
                @csrf
                <x-card-form title="BUAT SOAL BARU" :url="route('member.exams.index', $course->slug)" titleBtn="Buat Soal">
                    <x-input title="Pertanyaan" name="question" type="text" placeholder="Masukkan pertanyaan" :value="old('question')" />
                    <div class="row">
                        <div class="col-6">
                            <x-input title="Option 1" name="option1" type="text" placeholder="Masukkan opsi 1"
                                :value="old('option1')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 2" name="option2" type="text" placeholder="Masukkan opsi 2"
                                :value="old('option2')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 3" name="option3" type="text" placeholder="Masukkan opsi 3"
                                :value="old('option3')" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 4" name="option4" type="text" placeholder="Masukkan opsi 4"
                                :value="old('option4')" />
                        </div>
                    </div>
                    <x-input title="No. Soal" name="soal" type="number" placeholder="Masukkan nomor soal" :value="old('soal')" />
                    <x-input title="Jawaban Benar (Pilih opsi 1-4)" name="correct_answer" type="number" placeholder="Pilih jawaban benar (1-4)" :value="old('correct_answer')" min="1" max="4" />
                </x-card-form>
            </form>
        </div>
    </div>
@endsection
