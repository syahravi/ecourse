<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // By default, allow all users to make this request.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question' => 'required|string',
            'option1' => 'required|string',
            'option2' => 'required|string',
            'option3' => 'required|string',
            'soal' => 'required','unique:exam', 
            'correct_answer' => 'required|in:1,2,3,4', // Assuming correct_answer is 1, 2, 3, or 4
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'question.required' => 'The question field is required.',
            'question.string' => 'The question must be a string.',
            'option1.required' => 'The option1 field is required.',
            'option1.string' => 'The option1 must be a string.',
            'option2.required' => 'The option2 field is required.',
            'option2.string' => 'The option2 must be a string.',
            'option3.required' => 'The option3 field is required.',
            'option3.string' => 'The option3 must be a string.',
            'soal' => 'required','unique:exam,soal'.$this->id,
            'correct_answer.required' => 'The correct_answer field is required.',
            'correct_answer.in' => 'The selected correct answer is invalid.',
        ];
    }
}
