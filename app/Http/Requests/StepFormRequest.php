<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'file' => 'required|mimes:jpeg,png,pdf,docx,excel', // all type of files
            'title' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'note' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ];
    }
}
