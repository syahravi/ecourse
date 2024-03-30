<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Course;
use App\Http\Requests\ExamRequest;

class ExamController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $exams = Exam::where('course_id', $course->id)->get();
        return view('member.exams.index', compact('exams', 'course'));
    }

    public function create($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('member.exams.create', compact('course'));
    }

    public function store($slug, ExamRequest $request)
    {
        $course = Course::where('slug', $slug)->first();

        $request->validate([
            'question' => 'required',
            'option1' => 'required',
            'option2' => 'required',
            'option3' => 'required',
            'option4' => 'required',
            'soal' => 'required|integer',
            'correct_answer' => 'required|integer|between:1,4',
        ]);

        $course->exams()->create([
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'soal' => $request->soal,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect()->route('member.exams.index', $slug)->with('success', 'Exam created successfully.');
    }

    public function edit($slug, Exam $exam)
    {
        $course = Course::where('slug', $slug)->first();
        return view('member.exams.edit', compact('exam', 'course'));
    }

    public function update($slug, ExamRequest $request, Exam $exam)
    {
        $request->validate([
            'correct_answer' => 'required|integer|between:1,4',
        ]);

        $course = Course::where('slug', $slug)->first();

        $exam->update([
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'soal' => $request->soal,
            'correct_answer' => $request->correct_answer,
        ]);

        return redirect(route('member.exams.index', $slug))->with('toast_success', 'Exams Updated');
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return back()->with('toast_success', 'Exam Deleted');
    }
}
