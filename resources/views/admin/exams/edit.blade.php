@extends('layouts.backend.app', ['title' => 'edit soal'])

@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-10">
            <form action="{{ route('admin.exams.update', [$course->slug, $exam->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <x-card-form title="EDIT SOAL" :url="route('admin.exams.index', $course->slug)" titleBtn="Update Soal">
                    <x-input title="Pertanyaan" name="question" type="text" placeholder="Enter question" :value="$exam->question" />
                    <div class="row">
                        <div class="col-6">
                            <x-input title="Option 1" name="option1" type="text" placeholder="Enter option 1"
                                :value="$exam->option1" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 2" name="option2" type="text" placeholder="Enter option 2"
                                :value="$exam->option2" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 3" name="option3" type="text" placeholder="Enter option 3"
                                :value="$exam->option3" />
                        </div>
                        <div class="col-6">
                            <x-input title="Option 4" name="option4" type="text" placeholder="Enter option 4"
                                :value="$exam->option4" />
                        </div>
                    </div>
                    <x-input title="No. Soal" name="soal" type="number" placeholder="Enter question number"
                        :value="$exam->soal" />
                        <x-input title="Jawaban Benar (Pilih opsi 1-4)" name="correct_answer" type="number"
                        placeholder="Enter correct answer" :value="$exam->correct_answer" min="1" max="4" />
                    
                </x-card-form>
            </form>
        </div>
    </div>
@endsection
