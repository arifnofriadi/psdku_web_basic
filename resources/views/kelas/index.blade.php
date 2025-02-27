@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="d-flex">
                <div class="w-100">
                    <h3 class="card-title">Data Kelas</h3>
                </div>
                <div class="flex-shrink-1">
                    <a href="{{ route('kelas.create') }}" class="btn btn-sm btn-primary">Tambah</a>
                </div>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Opsi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Kelas Programming</td>
                    <td>
                        <a href="{{ route('kelas.update') }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
