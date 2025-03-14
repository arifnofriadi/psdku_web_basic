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

            <table class="table" id="myTable">
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
                    @forelse ($data as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>
                                <a href="tel:+{{ $item->no_hp }}">{{ $item->no_hp }}</a> <br>
                                <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                            </td>
                            <td>
                                <a href="{{ route('mahasiswa.details', $item->id) }}"
                                    class="btn btn-sm btn-primary">Detail</a>
                                <a href="{{ route('mahasiswa.edit') }}" class="btn btn-sm btn-success">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
