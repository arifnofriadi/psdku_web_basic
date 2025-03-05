@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Kelas</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control">
                </div>
                <div class="mb-3">
                    <a href="{{ route('kelas') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

