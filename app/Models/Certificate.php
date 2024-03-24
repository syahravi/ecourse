<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'user_id',
        'serial_number',
        'score',
        'file_path',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
    public function savePdf($pdfFile)
    {
        // Pastikan direktori penyimpanan tersedia
        $storagePath = public_path('sertifikat');
        if (!file_exists($storagePath)) {
            mkdir($storagePath, 0777, true);
        }

        // Buat nama unik untuk file PDF
        $fileName = uniqid() . '.pdf';

        // Simpan file PDF ke dalam direktori penyimpanan
        $pdfFile->move($storagePath, $fileName);

        // Tetapkan path file ke kolom 'file_path'
        $this->file_path = $fileName;
        $this->save();
    }
}
