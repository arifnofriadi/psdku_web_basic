<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
            'nama'       => 'required|string|max:255',
            'nim'        => 'required|numeric',
            'no_hp'      => 'required|numeric',
            'email'      => 'required|email:rfc,dns|unique:mahasiswas,email',
            'alamat'     => 'required',
            'kelas_id'   => 'required|exists:kelas,id',
        ];
    }

    public function messages()
    {
        return [
            'nama.required'     => 'Nama harus diisi.',
            'nama.string'       => 'Nama harus berupa string',
            'nama.max'          => 'Nama maksimal 255 karakter.',

            'nim.required'      => 'NIM harus diisi.',
            'nim.numeric'       => 'NIM harus berupa angka.',

            'no_hp.required'    => 'No HP harus diisi.',
            'no_hp.numeric'     => 'No HP harus berupa angka.',

            'email.required'    => 'Email harus diisi.',
            'email.email'       => 'Email tidak ditemukan.',
            'email.unique'      => 'Email sudah digunakan.',

            'alamat.required'   => 'Alamat harus diisi.',

            'kelas_id.required' => 'Kelas harus diisi.',
            'kelas_id.exists'   => 'Kelas tidak ditemukan.',
        ];
    }

}
