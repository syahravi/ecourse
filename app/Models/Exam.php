<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'course_id',
        'slug',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'correct_answer',
        'pertama',
        'soal',
        'time_taken',
        'answer', // tambahkan field answer
    ];

    // Relasi dengan Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // Relasi dengan ExamScore
    public function examScores()
    {
        return $this->hasMany(ExamScore::class);
    }

    // Method untuk memeriksa apakah pertanyaan sudah dijawab
    public function isAnswered()
    {
        return !is_null($this->answer);
    }
}

