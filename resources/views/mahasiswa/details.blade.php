@extends('components.master')

@section('content')

    <div class="container mt-4 mb-4 d-flex justify-content-center">
        <div class="card w-25">
            <div class="card-body">
                <h4 class="card-title text-center">Detail Mahasiswa</h4>

                <div class="text-center">
                    <img class="text-center mb-3" style="border-radius: 30%; width: 200px;" src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?q=80&w=3542&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Profile">

                    <h5 class="text-bold mt-3">John Doe</h5>
                    <p class="text-secondary">12345678</p>
                    <span>08123456789</span>
                </div>

                <hr>
                <a href="{{ route('mahasiswa') }}" class="btn btn-secondary">Kembali</a>

            </div>
        </div>
    </div>

@endsection
