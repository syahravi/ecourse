<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Course;
use App\Models\Pretest;

class PretestController extends Controller
{
    public function index(Course $course)
    {
        $pretestQuestions = Exam::where('course_id', $course->id)->get(); // Mengambil semua soal pretest untuk kursus ini

        if ($pretestQuestions->isEmpty()) {
            return back()->with('toast_error', 'Tidak ada soal pretest untuk kursus ini.');
        }

        $pretestScore = Pretest::where('user_id', auth()->id())
            ->where('course_id', $course->id)
            ->first();

        $totalQuestions = $pretestQuestions->count();

        // Jika pengguna sudah memiliki skor pretest, lanjutkan ke route course.video
        if ($pretestScore) {
            return redirect()->route('course.show', [$course->slug])->with(compact('pretestScore'));
        }

        return view('landing.exams.pretest', compact('course', 'pretestQuestions', 'totalQuestions', 'pretestScore'));
    }

    public function submitPretest(Request $request, $slug)
    {
        $course = Course::where('slug', $slug)->firstOrFail();
    
        // Cek jika pengguna sudah memiliki skor pretest sebelumnya untuk kursus ini
        $pretestScore = Pretest::where('user_id', auth()->id())
            ->where('course_id', $course->id)
            ->first();
    
        // Mendapatkan informasi tentang jawaban yang dikirim oleh pengguna
        $pretestIds = $request->input('pretest_ids');
        $userAnswers = $request->input('answers');
    
        $totalQuestions = count($pretestIds);
        $correctAnswers = 0;
    
        // Menghitung jumlah jawaban yang benar
        foreach ($pretestIds as $pretestId) {
            $pretestQuestion = Exam::find($pretestId);
    
            if ($pretestQuestion && isset($userAnswers[$pretestId])) {
                if ((int) $userAnswers[$pretestId] === $pretestQuestion->correct_answer) {
                    $correctAnswers++;
                }
            }
        }
    
        // Menghitung skor pretest
        $pretestValue = round(($correctAnswers / $totalQuestions) * 100);
    
        // Jika pengguna telah menyelesaikan pretest sebelumnya, perbarui skornya
        if ($pretestScore) {
            $pretestScore->pretest = $pretestValue;
            $pretestScore->save();
        } else {
            // Jika tidak, buat entri baru untuk skor pretest
            $pretestScore = new Pretest([
                'course_id' => $course->id,
                'user_id' => auth()->id(),
                'nilai' => $pretestValue,
            ]);
            $pretestScore->save();
        }
    
        // Lanjutkan ke route course.video
        return redirect()->route('course.show', [$course->slug])->with(compact('pretestScore'));
    }
}
