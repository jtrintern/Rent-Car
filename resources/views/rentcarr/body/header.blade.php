<!-- ======= Header ======= -->
<header id="header" class="fixed-top @if (request()->is('/')) @else header-inner-pages @endif">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('home') }}"><span>rent</span>car.</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto @if (request()->is('/')) active @endif"
                        href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto @if (request()->is('listcar', 'detailkendaraan', 'pesan', 'invoice')) active @endif"
                        href="{{ route('listkendaraan') }}">Kendaraan</a></li>
                <li><a class="nav-link scrollto" href="#galeri">Galeri</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                @role('User')
                <li><a class="nav-link scrollto" href="#contact">History</a></li>
                @endrole
                <li>@guest
                        <a class="getstarted scrollto" href="{{ route('login') }}">Masuk / Daftar</a>
                    @endguest
                    @auth
                        <a class="getstarted scrollto"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">Logout</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
