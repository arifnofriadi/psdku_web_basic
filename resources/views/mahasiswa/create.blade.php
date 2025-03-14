@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Mahasiswa</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control">
                    @error('nama')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control">
                    @error('nim')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                    <input type="text" name="no_hp" class="form-control">
                    @error('no_hp')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                    @error('email')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                    <select name="kelas_id" class="form-control">
                        <option disabled selected>Silakan Pilih Kelas</option>
                        @foreach ($kelas as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                        @endforeach
                    </select>
                    @error('kelas_id')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                    @error('alamat')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <a href="{{ route('mahasiswa') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

