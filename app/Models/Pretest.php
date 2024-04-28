<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pretest extends Model
{
    use HasFactory;
    protected $table = 'pretest';
    protected $fillable = [
        'user_id',
        'course_id',
        'nilai',
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
   
}


