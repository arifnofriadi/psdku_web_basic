<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KelasRequest extends FormRequest
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
            'nama_kelas' => 'required|string|max:255|unique:kelas,nama_kelas',
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'nama kelas harus diisi.',
            'string'    => 'nama kelas harus berupa teks.',
            'max'       => 'nama kelas maksimal 255 karakter.',
            'unique'    => 'nama kelas sudah digunakan.',
        ];
    }
}
