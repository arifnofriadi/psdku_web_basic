@extends('components.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Kelas</h3>
        </div>

        @if (session('error'))
            <script>
                Swal.fire({
                    toast: true,
                    icon: 'error',
                    title: '{{ session('error') }}',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endif

        <div class="card-body">
            <form action="{{ route('kelas.store') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Kelas</label>
                    <input type="text" name="nama_kelas" class="form-control">
                    @error('nama_kelas')
                        <div class="text-danger text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <a href="{{ route('kelas') }}" class="btn btn-sm btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
