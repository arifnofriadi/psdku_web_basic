@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="d-flex">
                <div class="w-100">
                    <h3 class="card-title">Data Mahasiswa</h3>
                </div>
                <div class="flex-shrink-1">
                    <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Kontak</th>
                    <th scope="col">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>12345678</td>
                    <td>08123456789</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Detail</a>
                        <a href="{{ route('mahasiswa.edit') }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
