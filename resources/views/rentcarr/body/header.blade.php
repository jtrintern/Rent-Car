<!-- ======= Header ======= -->
<header id="header" class="fixed-top @if (request()->is('home')) @else header-inner-pages @endif">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html"><span>rent</span>car.</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto @if (request()->is('/')) active @endif"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto @if (request()->is('listkendaraan', 'detailkendaraan')) active @endif"
                        href="{{ route('listkendaraan') }}">Kendaraan</a></li>
                <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                @if (!Auth::check())
                    <li><a class="getstarted scrollto @if (request()->is('login')) active @endif"
                            href="{{ route('login') }}">Masuk / Daftar</a></li>
                @else
                    <li><a class="getstarted scrollto" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
