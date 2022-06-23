<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Sewa Buku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('data_peminjam.index') }}" class="nav-link active" aria-current="page">Data Peminjam</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('peminjaman.index') }}" class="nav-link">Transaksi Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-danger btn-sm" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form action="{{ route('logout') }}" method="post" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <div>
                @if(Auth::check())
                    <b>{{ 'Hai, '. Auth::user()->name }}</b>
                @else
                @endif
            </div>
            <form action="" class="d-flex">
                <input type="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>