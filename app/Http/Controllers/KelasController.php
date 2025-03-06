<?php

namespace App\Http\Controllers;

use App\Http\Requests\KelasRequest;
use App\Models\Kelas;
use Illuminate\Support\Facades\Log;

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

    public function store(KelasRequest $request)
    {
        try {
            $data = Kelas::create([
                'nama_kelas' => $request->nama_kelas
            ]);

            if (!$data) {
                return back()->with('error', 'Kelas Gagal Ditambahkan');
            }

            return redirect()->route('kelas')->with('success', 'Kelas Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            Log::error([
                'Line'      => $th->getLine(),
                'Message'   => $th->getMessage(),
                'File'      => $th->getFile(),
            ]);

            return $th->getMessage();
        }
    }

    public function update()
    {
        return view('kelas.update');
    }

    

    public function destroy($id)
    {
        try {
            $data = Kelas::find($id);

            if (!$data) return back()->with('error', 'Data Kelas Tidak Ditemukan');

            $data->delete();

            return back()->with('success', 'Data Kelas Berhasil Dihapus');

        } catch (\Throwable $th) {
            Log::error([
                'Line'      => $th->getLine(),
                'Message'   => $th->getMessage(),
                'File'      => $th->getFile(),
            ]);

            return $th->getMessage();
        }
    }
}
