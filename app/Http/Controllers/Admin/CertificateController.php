<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\ExamScore;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index($slug)
    {
        // Temukan course berdasarkan slug
        $course = Course::where('slug', $slug)->firstOrFail();

        // Ambil semua skor ujian yang terkait dengan course yang ditemukan
        $examScores = ExamScore::whereHas('course', function ($query) use ($course) {
            $query->where('id', $course->id);
        })
            ->where('passed', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.certificates.index', compact('examScores', 'course'));
    }

   
    
    public function show(ExamScore $examScore)
    {
        // Temukan data sertifikat berdasarkan ID
        $certificate = Certificate::where('user_id', $examScore->user_id)
            ->where('course_id', $examScore->course_id)
            ->first();

        // Validasi apakah data sertifikat ada
        if (!$certificate) {
            abort(404);
        }

        // Muat tampilan sertifikat dengan data sertifikat
        $html = View::make('admin.certificates.show', compact('certificate'))->render();

        // Atur opsi Dompdf
        $options = new Options();
        $options->set('isPhpEnabled', true);
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->set('isFontSubsettingEnabled', true);
        $options->set('debugPng', true);
        $options->set('isJavascriptEnabled', true);
        $options->set('logOutputFile', storage_path('logs/dompdf.log'));
        $options->set('defaultFont', 'Arial');
        $options->set('chroot', public_path());

        // Muat Dompdf dengan opsi yang ditentukan
        $pdf = new Dompdf($options);

        // Tetapkan jalur dasar untuk aset
        $basePath = public_path();
        $pdf->setBasePath($basePath);

        // Muat konten HTML ke Dompdf
        $pdf->loadHtml($html);

        // Atur ukuran kertas dan orientasi
        $pdf->setPaper('A4', 'landscape');

        // Render PDF
        $pdf->render();

        // Tampilkan pratinjau sertifikat
        return $pdf->stream();
    }

    
}
