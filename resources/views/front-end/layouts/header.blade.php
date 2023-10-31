  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top @if(request()->is('/')) 
  @else header-inner-pages @endif">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span>rent</span>car.</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto @if(request()->is('/')) active @endif" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto @if(request()->is('listkendaraan', 'detailkendaraan', 'pesan', 'invoice')) active @endif" href="{{ route('list') }}">Kendaraan</a></li>
          <li><a class="nav-link   scrollto" href="#galeri">Galeri</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
          <li><a class="getstarted scrollto" href="#about">Masuk / Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->