<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Basic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @if (session('warning'))
        <script>
             Swal.fire({
                toast: true,
                icon: 'warning',
                title: '{{ session('warning') }}',
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
    <main class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <div class="card p-4" style="max-width: 400px; width: 100%;">
            <h3 class="text-center mb-4">Silakan Masuk</h3>
            <form action="{{ route('login.post') }}" method="post">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Masukkan email Anda">
                    @error('email')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan password Anda">
                    @error('password')
                        <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none">Lupa Password?</a>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
