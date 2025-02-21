@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

