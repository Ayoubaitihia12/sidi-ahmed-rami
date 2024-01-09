<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'arName' => 'required',
            'frName' => 'required',
            'code' => 'required|unique:students',
            // 'code' => Rule::unique('students')->where(fn (Builder $query) => $query->where('account_id', 1)),
            'dateInscription' => 'required',
            'placeBirth' => 'required',
            'dateBirth' => 'required',
            'fatherName' => 'required',
            'motherName' => 'required',
            'frFatherName' => 'required',
            'frMotherName' => 'required',
            'studing' => 'required',
            'dateStuding' => 'required',
            'sex' => 'required',
            'level' => 'required',
        ];
    }
}
