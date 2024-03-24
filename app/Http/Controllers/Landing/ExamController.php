<?php

namespace App\Http\Controllers\Landing;

use App\Models\ExamScore;
use App\Models\Exam;
use App\Models\Course;
use App\Models\Certificate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function exam(Course $course)
    {
        $exams = Exam::where('course_id', $course->id)->get();

        if ($exams->isEmpty()) {
            return back()->with('toast_error', 'Tidak ada soal ujian untuk kursus ini.');
        }

        $examScore = ExamScore::where('user_id', auth()->id())
            ->where('course_id', $course->id)
            ->first();

        if ($examScore) {
            if ($examScore->passed || $examScore->attempt_count >= 2) {
                return redirect()->route('exams.examDetail', $course->slug);
            }
        }

        $totalSoal = $exams->count();

        return view('landing.exams.exam', compact('course', 'exams', 'totalSoal'));
    }

    public function examDetail(Course $course)
    {
        $examScore = ExamScore::where('user_id', auth()->id())
            ->where('course_id', $course->id)
            ->first();

        $user = null;
        $score = null;

        if ($examScore) {
            $user = $examScore->user;
            $score = $examScore->score;
        }

        return view('landing.exams.detail', compact('user', 'score', 'course', 'examScore'));
    }

    public function submitExam(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();

        // Cari skor ujian sebelumnya untuk pengguna dan kursus yang sedang diuji
        $examScore = ExamScore::where('course_id', $course->id)
            ->where('user_id', auth()->id())
            ->first();

        // Jika ada skor ujian sebelumnya dan pengguna belum lulus, perbarui skor dengan yang baru
        if ($examScore && !$examScore->passed) {
            $examIds = $request->input('exam_ids');
            $userAnswers = $request->input('answers');

            $totalQuestions = count($examIds);
            $correctAnswers = 0;

            foreach ($examIds as $examId) {
                $exam = Exam::find($examId);

                if ($exam && isset($userAnswers[$examId])) {
                    if ((int) $userAnswers[$examId] === $exam->correct_answer) {
                        $correctAnswers++;
                    }
                }
            }

            $score = round(($correctAnswers / $totalQuestions) * 100);
            $passed = $score >= 65;

            // Perbarui skor ujian yang ada
            $examScore->score = $score;
            $examScore->passed = $passed;
            $examScore->save();

            // Jika lulus, simpan sertifikat
            if ($passed) {
                $certificate = new Certificate();
                $certificate->course_id = $course->id;
                $certificate->user_id = auth()->id();
                $certificate->score = $score;
                $certificate->serial_number = uniqid(); // generate unique serial number
                $certificate->file_path = ''; // set file path
                $certificate->save();
            }

            return redirect()
                ->route('exams.examDetail', [$course->slug])
                ->with('toast_success', 'Skor ujian berhasil diperbarui. Skor Anda sekarang: ' . $score);
        }
    }
}
