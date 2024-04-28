@extends('layouts.ujian.app', ['title' => 'Course'])

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <h1 class="text-2xl font-bold mb-4 text-center">Pretest untuk {{ $course->name }}</h1>
            <button data-drawer-target="separator-sidebar" data-drawer-toggle="separator-sidebar"
                aria-controls="separator-sidebar" type="button"
                class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                    </path>
                </svg>
            </button>
            <div class="flex justify-between my-4">
                <button type="button"
                    class="text-black hover:bg-slate-300 font-bold py-2 px-4 rounded previous-question">Sebelumnya</button>
                <button type="button"
                    class="text-black hover:bg-slate-300 font-bold py-2 px-4 rounded next-question">Selanjutnya</button>
            </div>
            <form id="pretestForm" action="{{ route('exams.submitPretest', $course->slug) }}" method="POST"
                class="w-full">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach ($pretestQuestions as $soal)
                        <div id="question{{ $soal->soal }}"
                            class="question-container bg-white mb-4 p-6 {{ $soal->soal != 1 ? 'hidden' : '' }}">
                            <h1 class="mb-4 text-lg">{{ $soal->soal }}. {{ $soal->question }}</h1>
                            <input type="hidden" name="pretest_ids[]" value="{{ $soal->id }}">
                            <div class="mb-4">
                                <div class="flex flex-col space-y-2">
                                    @foreach (range(1, 4) as $option)
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="answers[{{ $soal->id }}]"
                                                value="{{ $option }}" class="form-radio">
                                            <span class="ml-2">{{ $soal->{'option' . $option} }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>


    <aside id="separator-sidebar"
        class="fixed top-0 left-0 z-40 w-auto md:w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
            <div class="md:col-span-1">
                <h1 class="text-2xl font-bold mb-4">Soal Pretest</h1>
                <div class="grid grid-cols-5  gap-2">
                    @foreach ($pretestQuestions as $soal)
                        <button type="button" class="text-black shadow font-bold py-2 px-4 rounded question-button"
                            data-soal="{{ $soal->soal }}">
                            {{ $soal->soal }}
                        </button>
                    @endforeach
                </div>
                <div class="mt-4">
                    <button id="submitButton"
                        class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded opacity-50 cursor-not-allowed w-full"
                        disabled>Submit</button>
                </div>
            </div>
        </div>
    </aside>

    <script>
        $(document).ready(function() {
            var currentQuestion = 1;
            var totalQuestions = {{ $totalQuestions }};
            showQuestion(currentQuestion);
            updateButtonVisibility(currentQuestion, totalQuestions);

            $('.next-question').click(function() {
                if (currentQuestion < totalQuestions) {
                    currentQuestion++;
                    showQuestion(currentQuestion);
                    updateButtonVisibility(currentQuestion, totalQuestions);
                }
            });

            $('.previous-question').click(function() {
                if (currentQuestion > 1) {
                    currentQuestion--;
                    showQuestion(currentQuestion);
                    updateButtonVisibility(currentQuestion, totalQuestions);
                }
            });

            $('.question-button').click(function() {
                currentQuestion = $(this).data('soal');
                showQuestion(currentQuestion);
                updateButtonVisibility(currentQuestion, totalQuestions);
            });

            $('input[type="radio"]').click(function() {
                updateSubmitButton();
                updateQuestionButtons();
            });

            function showQuestion(questionNumber) {
                $('.question-container').addClass('hidden');
                $('#question' + questionNumber).removeClass('hidden');
                updateSubmitButton();
                updateQuestionButtons();
            }

            function updateSubmitButton() {
                var isAllAnswered = true;
                $('input[type="radio"]').each(function() {
                    var name = $(this).attr('name');
                    if (!$('input[name="' + name + '"]:checked').length) {
                        isAllAnswered = false;
                    }
                });
                $('#submitButton').prop('disabled', !isAllAnswered);
                if (isAllAnswered) {
                    $('#submitButton').removeClass('opacity-50 cursor-not-allowed');
                } else {
                    $('#submitButton').addClass('opacity-50 cursor-not-allowed');
                }
            }

            function updateQuestionButtons() {
                $('[data-soal]').each(function() {
                    var soal = $(this).data('soal');
                    var isAnswered = $('input[name="answers[' + soal + ']"]:checked').length > 0;
                });
            }

            function updateButtonVisibility(currentQuestion, totalQuestions) {
                if (currentQuestion === 1) {
                    $('.previous-question').hide();
                } else {
                    $('.previous-question').show();
                }

                if (currentQuestion === totalQuestions) {
                    $('.next-question').hide();
                } else {
                    $('.next-question').show();
                }
            }
        });

        $(document).ready(function() {
            $('#submitButton').click(function() {
                $('#pretestForm').submit(); // Submit form ketika tombol submit ditekan
            });
        });
    </script>
@endsection
