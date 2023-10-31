@extends('rentcarr.index_master')
@section('content')

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <h2>Detail Kendaraan</h2>
                <ol>
                    <li> <a href="index.html">Home</a></li>
                    <li><a href="listkendaraan.html">Pilih Kendaraan</a></li>
                    <li style="color: #E1B12C;"><a href="detailkendaraan.html">Detail Kendaraan</a></li>
                    <li><a href="">Pemesanan & Pembayaran</a></li>
                </ol>
            </div>
            <!-- <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <button class="btn-entry">Kembali</button>
            </div> -->
        </div>
    </div>
</section><!-- End Breadcrumbs -->

  <main id="main">
    <section id="all-car" class="all-car">
      <div class="container filter-kendaraan" style=" padding:0">
        <div class="filter d-flex">
          <div class="col-md-1">
            <h4>Filter :</h4>
          </div>
          <div class="col-md-9 col-md-4 col-sm-2 d-flex" style=" padding:0">
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                Kapasitas Penumpang
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">4</a></li>
                <li><a class="dropdown-item" href="#">6</a></li>
                <li><a class="dropdown-item" href="#">8</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                Transmisi
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Matic</a></li>
                <li><a class="dropdown-item" href="#">Matic</a></li>
                <li><a class="dropdown-item" href="#">Matic</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                Kategori
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">MPV</a></li>
                <li><a class="dropdown-item" href="#">Sedan</a></li>
                <li><a class="dropdown-item" href="#">Hatchback</a></li>
                <li><a class="dropdown-item" href="#">Crossover</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                Unit
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Toyota</a></li>
                <li><a class="dropdown-item" href="#">Colco</a></li>
                <li><a class="dropdown-item" href="#">Audi</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2" style="text-align: end; padding:0">
            <div class="dropdown">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                Urutkan
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Harga Tertinggi</a></li>
                <li><a class="dropdown-item" href="#">Harga Terendah</a></li>
              </ul>
            </div>
          </div>


        </div>
      </div>
      <div class="container">
      <div class="products row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3"
            data-aos="fade-up">
            <div class="product col">
                <div class="card card-product shadow-sm h-100">
                    <img class="card-img-top"
                        src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'
                        alt=''>
                    <div class="card-body h-100">
                        <h2 class="card-title">Toyota Avanza Veloz</h2>
                        <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                        <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                        <div>
                            <table>
                                <tr>
                                    <td>Transmisi</td>
                                    <td>:</td>
                                    <td>Matic</td>
                                </tr>
                                <tr>
                                    <td>Kursi</td>
                                    <td>:</td>
                                    <td>4 Orang</td>
                                </tr>
                                <tr>
                                    <td>Bagasi</td>
                                    <td>:</td>
                                    <td>2 Bagasi</td>
                                </tr>
                            </table>
                        </div>
                        <div class="button-kendaraan">
                            <div class="homecar-button">
                                <button class="btn-homecar"
                                    onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat
                                    Kendaraan</button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="product col">
                <div class="card card-product shadow-sm h-100">
                    <img class="card-img-top"
                        src='{{ asset ("rentCar/assets/img/all car/car 2.png") }}'
                        alt=''>
                    <div class="card-body h-100">
                        <h2 class="card-title">Colco XC90</h2>
                        <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                        <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                        <div>
                            <table>
                                <tr>
                                    <td>Transmisi</td>
                                    <td>:</td>
                                    <td>Matic</td>
                                </tr>
                                <tr>
                                    <td>Kursi</td>
                                    <td>:</td>
                                    <td>4 Orang</td>
                                </tr>
                                <tr>
                                    <td>Bagasi</td>
                                    <td>:</td>
                                    <td>2 Bagasi</td>
                                </tr>
                            </table>
                        </div>
                        <div class="button-kendaraan">
                            <div class="homecar-button">
                                <button class="btn-homecar"
                                    onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat
                                    Kendaraan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product col">
                <div class="card card-product shadow-sm h-100">
                    <img class="card-img-top"
                        src='{{ asset ("rentCar/assets/img/all car/car 3.png") }}'
                        alt=''>
                    <div class="card-body h-100">
                        <h2 class="card-title">Audi RS E-Tron GT</h2>
                        <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                        <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                        <div>
                            <table>
                                <tr>
                                    <td>Transmisi</td>
                                    <td>:</td>
                                    <td>Matic</td>
                                </tr>
                                <tr>
                                    <td>Kursi</td>
                                    <td>:</td>
                                    <td>4 Orang</td>
                                </tr>
                                <tr>
                                    <td>Bagasi</td>
                                    <td>:</td>
                                    <td>2 Bagasi</td>
                                </tr>
                            </table>
                        </div>
                        <div class="button-kendaraan">
                            <div class="homecar-button">
                                <button class="btn-homecar"
                                    onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat
                                    Kendaraan</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="product col">
                <div class="card card-product shadow-sm h-100">
                    <img src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'' alt='' class="card-img-top">
      <div class="card-body h-100">
        <h2 class="card-title">Toyota Avanza Veloz</h2>
        <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
        <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
        <div>
          <table>
            <tr>
              <td>Transmisi</td>
              <td>:</td>
              <td>Matic</td>
            </tr>
            <tr>
              <td>Kursi</td>
              <td>:</td>
              <td>4 Orang</td>
            </tr>
            <tr>
              <td>Bagasi</td>
              <td>:</td>
              <td>2 Bagasi</td>
            </tr>
          </table>
        </div>

        <div class="button-kendaraan">
          <div class="homecar-button">
            <button class="btn-homecar"  onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat
                    Kendaraan</button>
                </div>
            </div>
        </div>

    </div>
    </div>
    <div class="product col">
        <div class="card card-product shadow-sm h-100">
            <img src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'' alt='' class="card-img-top">
      <div class="card-body h-100">
        <h2 class="card-title">Toyota Avanza Veloz</h2>
        <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
        <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
        <div>
          <table>
            <tr>
              <td>Transmisi</td>
              <td>:</td>
              <td>Matic</td>
            </tr>
            <tr>
              <td>Kursi</td>
              <td>:</td>
              <td>4 Orang</td>
            </tr>
            <tr>
              <td>Bagasi</td>
              <td>:</td>
              <td>2 Bagasi</td>
            </tr>
          </table>
        </div>
        <div class="button-kendaraan">
          <div class="homecar-button">
            <button class="btn-homecar"  onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat
            Kendaraan</button>
        </div>
    </div>
    </div>

    </div>
    </div>
    <div class="product col">
        <div class="card card-product shadow-sm h-100">
            <img src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'
                alt='' class="card-img-top">
            <div class="card-body h-100">
                <h2 class="card-title">Toyota Avanza Veloz</h2>
                <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                <div>
                    <table>
                        <tr>
                            <td>Transmisi</td>
                            <td>:</td>
                            <td>Matic</td>
                        </tr>
                        <tr>
                            <td>Kursi</td>
                            <td>:</td>
                            <td>4 Orang</td>
                        </tr>
                        <tr>
                            <td>Bagasi</td>
                            <td>:</td>
                            <td>2 Bagasi</td>
                        </tr>
                    </table>
                </div>
                <div class="button-kendaraan">
                    <div class="homecar-button">
                        <button class="btn-homecar"
                            onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat Kendaraan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product col">
        <div class="card card-product shadow-sm h-100">
            <img src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'
                alt='' class="card-img-top">
            <div class="card-body h-100">
                <h2 class="card-title">Toyota Avanza Veloz</h2>
                <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                <div>
                    <table>
                        <tr>
                            <td>Transmisi</td>
                            <td>:</td>
                            <td>Matic</td>
                        </tr>
                        <tr>
                            <td>Kursi</td>
                            <td>:</td>
                            <td>4 Orang</td>
                        </tr>
                        <tr>
                            <td>Bagasi</td>
                            <td>:</td>
                            <td>2 Bagasi</td>
                        </tr>
                    </table>
                </div>
                <div class="button-kendaraan">
                    <div class="homecar-button">
                        <button class="btn-homecar"
                            onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat Kendaraan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product col">
        <div class="card card-product shadow-sm h-100">
            <img src='{{ asset ("rentCar/assets/img/all car/car 1.png") }}'
                alt='' class="card-img-top">
            <div class="card-body h-100">
                <h2 class="card-title">Toyota Avanza Veloz</h2>
                <h3 class="card-title"><span>Rp.250.000</span> /Hari</h3>
                <!-- <p class="card-text">
          Lorem ipsum dolor sit amet
        </p> -->
                <div>
                    <table>
                        <tr>
                            <td>Transmisi</td>
                            <td>:</td>
                            <td>Matic</td>
                        </tr>
                        <tr>
                            <td>Kursi</td>
                            <td>:</td>
                            <td>4 Orang</td>
                        </tr>
                        <tr>
                            <td>Bagasi</td>
                            <td>:</td>
                            <td>2 Bagasi</td>
                        </tr>
                    </table>
                </div>
                <div class="button-kendaraan">
                    <div class="homecar-button">
                        <button class="btn-homecar"
                            onclick="window.location.href = '{{route ('detailkendaraan')}}';">Lihat Kendaraan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <div class="homecar-button"
          style="margin-top: 60px; justify-content: center; align-items: center; align-self: center;">
          <button class="btn-homecar center-block">Muat Lebih Banyak</button>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection