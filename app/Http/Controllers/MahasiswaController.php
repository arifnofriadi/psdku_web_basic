<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Support\Facades\Log;
use App\Models\Mahasiswa;
use App\Http\Requests\MahasiswaRequest;

class MahasiswaController extends Controller
{
    public function index()
    {
        try {
            // query untuk mengambil data dengan filtering
            $data = Mahasiswa::orderBy('created_at', 'desc')->get();
            return view('mahasiswa.index', compact('data'));
        } catch (\Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);

            return $th->getMessage();
        }
    }

    public function create()
    {
        try {
            $kelas = Kelas::all();

            return view('mahasiswa.create', compact('kelas'));
        } catch (\Throwable $th) {
            Log::error([
                'Line'      => $th->getLine(),
                'Message'   => $th->getMessage(),
                'File'      => $th->getFile(),
            ]);

            return $th->getMessage();
        }
    }

    public function store(MahasiswaRequest $request)
    {
        try {
            // query untuk menyimpan data
            $data = Mahasiswa::create([
               'nama'       => $request->nama,
               'nim'        => $request->nim,
               'no_hp'      => $request->no_hp,
               'email'      => $request->email,
               'alamat'     => $request->alamat,
               'kelas_id'   => $request->kelas_id

            ]);

            // jika gagal menyimpan data
            if (!$data) {
                return back()->with('error', 'Mahasiswa Gagal Ditambahkan');
            }

            return redirect()->route('mahasiswa')->with('success', 'Mahasiswa Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            Log::error([
                'message' => $th->getMessage(),
                'file' => $th->getFile(),
                'line' => $th->getLine(),
            ]);

            return $th->getMessage();
        }
    }

    public function edit()
    {
        return view('mahasiswa.update');
    }

    public function details()
    {
        return view('mahasiswa.details');
    }
}
