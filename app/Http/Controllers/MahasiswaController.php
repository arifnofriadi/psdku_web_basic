<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function create()
    {
        return view('mahasiswa.create');
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
