<?php

namespace App\Http\Controllers\Landing;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\User;
use App\Models\Course;

class CertificateController extends Controller
{
    public function show($user, $courseName, $serialNumber)
    {
        // Cari user berdasarkan nama pengguna (user)
        $userModel = User::where('name', $user)->first();

        // Validasi apakah user ditemukan
        if (!$userModel) {
            abort(404);
        }

        // Cari kursus berdasarkan nama
        $course = Course::where('name', $courseName)->first();

        // Validasi apakah kursus ditemukan
        if (!$course) {
            abort(404);
        }

        // Cari sertifikat berdasarkan user_id, course_id, dan serial number
        $certificate = Certificate::where('user_id', $userModel->id)
            ->where('course_id', $course->id)
            ->where('serial_number', $serialNumber)
            ->first();

        // Validasi apakah sertifikat ditemukan
        if (!$certificate) {
            abort(404);
        }

        return view('landing.certificates.show', [
            'certificate' => $certificate,
            'user' => $userModel->name,
            'courseName' => $course->name,
            'serialNumber' => $certificate->serial_number,
        ]);
    }

    public function generatePDF($user, $courseName, $serialNumber)
    {
        // Cari user berdasarkan nama pengguna (user)
        $userModel = User::where('name', $user)->first();

        // Validasi apakah user ditemukan
        if (!$userModel) {
            abort(404);
        }

        // Cari kursus berdasarkan nama
        $course = Course::where('name', $courseName)->first();

        // Validasi apakah kursus ditemukan
        if (!$course) {
            abort(404);
        }

        // Cari sertifikat berdasarkan user_id, course_id, dan serial number
        $certificate = Certificate::where('user_id', $userModel->id)
            ->where('course_id', $course->id)
            ->where('serial_number', $serialNumber)
            ->first();

        // Validasi apakah sertifikat ditemukan
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
        return $pdf->stream('dompdf_out.pdf', ['Attachment' => false]);
    }
}
