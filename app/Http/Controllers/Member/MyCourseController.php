<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use App\Models\Certificate;

class MyCourseController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = $request->user();

        $courses = TransactionDetail::with('transaction', 'course.reviews', 'course.certificates')
            ->whereHas('transaction', function ($query) use ($user) {
                $query->where('user_id', $user->id)->where('status', 'success');
            })
            ->whereHas('course', function ($query) {
                $query->where('name', 'like', '%' . request()->search . '%');
            })
            ->latest()
            ->paginate(3);

        // Loop through each course and fetch certificate score and serial number
        foreach ($courses as $course) {
            $courseId = $course->course_id;

            // Ambil data sertifikat berdasarkan ID kursus dan ID pengguna
            $certificate = Certificate::where('course_id', $courseId)
                ->where('user_id', $user->id)
                ->first();

            // Jika sertifikat ditemukan, ambil score dan serial number
            if ($certificate) {
                $course->certificate_score = $certificate->score;
                $course->certificate_serial_number = $certificate->serial_number;
            } else {
                // Jika sertifikat tidak ditemukan, atur score dan serial number menjadi null
                $course->certificate_score = null;
                $course->certificate_serial_number = null;
            }
        }
        
        return view('member.course.mycourse', compact('courses'));
    }
}
