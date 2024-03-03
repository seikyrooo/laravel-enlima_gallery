<nav class="navbar navbar-expand-lg bg-success navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand" href={{ route('home') }}">Enlima Gallery</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Halaman Utama</a>
                </li>
                </li>
            </ul>
        </div>
        @if (!Auth::check())
            <div>
                <a href="{{ route('login.index') }}" class="btn btn-dark text-white">Masuk</a>
            </div>
        @else
            <div class="dropdown">
                <a class="btn text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->nama }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profil</a></li>
                    <li><a class="dropdown-item" href="{{ route('photo.post') }}">Unggah</a></li>
                    <li><a class="dropdown-item" href="{{ route('album.create_album') }}">Buat Album</a></li>
                    <li><a class="dropdown-item" href="{{ route('album.index', Auth::user()->id) }}">Album</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                </ul>
            </div>
        @endif

    </div>
</nav>
