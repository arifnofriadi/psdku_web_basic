@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Kelas</h3>
        </div>
        <div class="card-body">
            <form action="{{  route('kelas.update-process', $data->id) }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" name="nama_kelas" class="form-control" value="{{ $data->nama_kelas }}">
                </div>
                <div class="mb-3">
                    <a href="{{ route('kelas') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
@endsection

