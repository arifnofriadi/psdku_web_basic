<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = [
        'nama',
        'nim',
        'no_hp',
        'email',
        'alamat',
        'kelas_id',
    ];

    public function getKelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
