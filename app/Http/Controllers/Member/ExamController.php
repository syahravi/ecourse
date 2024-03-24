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
        // tampung data course kedalam variabel $course, yang dimana "slug"nya sama dengan variabel $slug.
        $course = Course::where('slug', $slug)->first();

        // tampung seluruh data video kedalam variabel $videos, yang dimana "course_id"nya sama dengan variable $course->id.
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
        // tampung data course kedalam variabel $course, yang dimana "slug"nya sama dengan variabel $slug.
        $course = Course::where('slug', $slug)->first();

        // update data video berdasarkan id
        $exam->update([
            'question' => $request->question,
            'option1' => $request->option1,
            'option2' => $request->option2,
            'option3' => $request->option3,
            'option4' => $request->option4,
            'soal' => $request->soal,
            'correct_answer' => $request->correct_answer,
        ]);

        // kembali kehalaman member/video/index dengan variabel $course dan toastr.
        return redirect(route('member.exams.index', $course))->with('toast_success', 'exams Updated');
    }

    

    public function destroy( Exam $exam)
    {
        
        $exam->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr
        return back()->with('toast_success', 'exam Deleted');
    }
}
