<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">Portal Mahasiswa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="row w-100">
            <div class="col-md-11">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('mahasiswa') }}">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
                    </li>
                  </ul>
            </div>
            <div class="col-md-1">
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>

      </div>
    </div>
</nav>
