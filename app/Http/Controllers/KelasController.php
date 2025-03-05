<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data = Kelas::orderBy('created_at', 'desc')->get();
        return view('kelas.index', compact('data'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $data = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        if (!$data) {
            return back()->with('error', 'Kelas Gagal Ditambahkan');
        }

        return redirect()->route('kelas')->with('success', 'Kelas Berhasil Ditambahkan');
    }

    public function update()
    {
        return view('kelas.update');
    }
}
