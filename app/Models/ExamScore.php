<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'course_id',
        'score',
        'passed', // Kolom untuk menandai apakah ujian lulus atau tidak
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relasi dengan Exam untuk mendapatkan jawaban
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
