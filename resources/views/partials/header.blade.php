<header>
    <nav class="navbar navbar-expand-md  fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown text-light">
                        {{ env('APP_NAME') }}
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ auth()->user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="#">Ubah Password</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
</header>
