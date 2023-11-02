@extends('rentcarr.index_master')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up" data-aos-delay="200">
            <h1>Temukan Kendaraan Impian untuk <br>Perjalanan yang Tidak Terlupakan!</h1>
            <h2>rentCAR, siap membawa anda menuju petualangan yang tak terlupakan</h2>
            <div class="d-flex justify-content-center justify-content-lg-center">
                <a href="#all-car" class="btn-get-started scrollto">Lihat Kendaraan</a>
            </div>
        </div>
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
  <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
</div> -->
    </div>

</div>

</section>
<!-- End Hero -->

<main id="main">

<!-- ======= home-kendaraan Section ======= -->
<section id="home-kendaraan" class="home-kendaraan section-bg">
    <div class="container">
        <div class="section-title">
            <h4>KATEGORI KENDARAAN</h4>
            <h2>Temukan Kendaraan Impian Anda</h2>
            <p>Sed non dapibus dolor, non rhoncus dui. Ut eleifend justo at ipsum aliquam, vel cursus tellus
                pulvinar.
                Nulla vel tempus diam. Nunc vulputate, quam sit amet commodo tincidunt, enim lorem scelerisque
                massa, vel
                ultricies.</p>
        </div>
        <div class="row image" data-aos="zoom-in">

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset ('rentCar/assets/img/Group 194.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset ('rentCar/assets/img/Group 141.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset ('rentCar/assets/img/Group 162.png') }}"
                    class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="{{ asset ('rentCar/assets/img/Group 163.png') }}"
                    class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>
<!-- End home-kendaraan Section -->

<section id="all-car" class="all-car">
    <div class="container">
        <div class="section-title">
            <h4>SEMUA KENDARAAN</h4>
            <h2>Dapatkan Kendaraan Berkualitas <br>Terbaik untuk Perjalanan Anda</h2>
            <p>Sed non dapibus dolor, non rhoncus dui. Ut eleifend justo at ipsum aliquam, vel cursus tellus
                pulvinar.
                Nulla vel tempus diam. Nunc vulputate, quam sit amet commodo tincidunt, enim lorem scelerisque
                massa, vel
                ultricies.</p>
        </div>
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
                                    onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat
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
                                    onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat
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
                                    onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat
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
            <button class="btn-homecar"  onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat
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
            <button class="btn-homecar"  onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat
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
                            onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat Kendaraan</button>
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
                            onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat Kendaraan</button>
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
                            onclick="window.location.href = '{{route ('listkendaraan')}}';">Lihat Kendaraan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="homecar-button"
        style="margin-top: 60px; justify-content: center; align-items: center; align-self: center;">
        <button class="btn-homecar center-block" onclick="window.location.href = '{{route ('listkendaraan')}}';">Muat
            Lebih
            Banyak</button>
    </div>
    </div>
</section>
</main>
<!-- End #main -->

@endsection
