<?php

namespace App\Http\Controllers\Landing;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Video;
use App\Models\Course;
use App\Models\Review;
use App\Models\ExamScore;
use App\Models\Transaction;
use App\Models\Exam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        /*
            tampung semua data course kedalam variabel $courses, kemudian kita memanggil relasi menggunakan withcount,
            selanjutnya pada saat melakukan pemanggilan relasi details yang kita ubah namanya menjadi enrolled, disini kita melakukan sebuah query untuk mengambil data transaksi yang memiliki status "success", disini kita juga menambahkan method search yang kita dapatkan dari sebuah trait hasScope, dan juga kita urutkan datanya dari yang paling baru.
        */
        $courses = Course::withCount([
            'videos',
            'reviews',
            'details as enrolled' => function ($query) {
                $query->whereHas('transaction', function ($query) {
                    $query->where('status', 'success');
                });
            },
        ])
            ->search('name')
            ->latest()
            ->get();

        // passing variabel $courses kedalam view.
        return view('landing.course.index', compact('courses'));
    }
    

    public function show(Course $course)
    {
        $videos = Video::where('course_id', $course->id)->get();

        $enrolled = Transaction::with('details.course')
            ->where('status', 'success')
            ->whereHas('details', function ($query) use ($course) {
                $query->where('course_id', $course->id);
            })
            ->count();

        if (Auth::user()) {
            $alreadyBought = Transaction::with('details.course')
                ->where('status', 'success')
                ->where('user_id', Auth::id())
                ->whereHas('details', function ($query) use ($course) {
                    $query->where('course_id', $course->id);
                })
                ->first();
        } else {
            $alreadyBought = [];
        }

        $reviews = Review::where('course_id', $course->id)->get();

        $avgRating = Review::where('course_id', $course->id)->avg('rating');

        return view('landing.course.show', compact('course', 'videos', 'enrolled', 'alreadyBought', 'reviews', 'avgRating'));
    }

    public function video(Course $course, $episode)
    {
        $user = Auth::user();

        $video = Video::where('course_id', $course->id)
            ->where('episode', $episode)
            ->firstOrFail();

        $transaction = $user
            ? Transaction::with('user', 'details.course')
                ->where('user_id', $user->id)
                ->where('status', 'success')
                ->whereHas('details', function ($query) use ($course) {
                    $query->where('course_id', $course->id);
                })
                ->get()
            : [];

        $reviews = Review::where('course_id', $course->id)->get();

        $avgRating = $reviews->avg('rating');

        $videoTexts = Video::where('course_id', $course->id)->pluck('teori');

        if (count($transaction)) {
            $alreadyBought = $transaction;
        } else {
            $alreadyBought = '';
        }

        if ($alreadyBought || $video->intro == 0) {
            $videos = Video::where('course_id', $course->id)
                ->orderBy('episode')
                ->get();
            $totalEpisodes = $videos->count();
        } else {
            return back()->with('toast_error', 'Episode ini hanya untuk member premium');
        }

        return view('landing.course.video', compact('course', 'video', 'videos', 'alreadyBought', 'reviews', 'avgRating', 'videoTexts', 'totalEpisodes'));
    }
}
