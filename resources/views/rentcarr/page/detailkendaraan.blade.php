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
            <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <button class="btn-entry" onclick="window.location.href='{{route ('listkendaraan')}}'">Kembali</button>
            </div>
        </div>
    </div>
</section><!-- End Breadcrumbs -->

<main id="main">
    <section class="kendaraan-detail" id="kendaraan-detail">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">
                        <!-- slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="https://images.unsplash.com/photo-1485465014387-7580000cd578?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="https://i.pinimg.com/564x/0f/e6/e2/0fe6e28598eeda6c9c43fca032c57434.jpg"
                                    alt="Hills">
                            </div>

                            <div class="carousel-item">
                                <img src="https://i.pinimg.com/564x/4b/32/2e/4b322ec0b4ade4db25516981c846538e.jpg"
                                    alt="Hills">
                            </div>
                        </div>

                        <!-- Left right -->
                        <!-- <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#custCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a> -->

                        <!-- Thumbnails -->
                        <ol class="carousel-indicators list-inline">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                    data-target="#custCarousel">
                                    <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                                    <img src="https://images.unsplash.com/photo-1485465014387-7580000cd578?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#custCarousel">
                                    <img src="https://i.pinimg.com/564x/0f/e6/e2/0fe6e28598eeda6c9c43fca032c57434.jpg"
                                        class="img-fluid">
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="3" data-target="#custCarousel">
                                    <img src="https://i.pinimg.com/564x/4b/32/2e/4b322ec0b4ade4db25516981c846538e.jpg"
                                        class="img-fluid">
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7 kendaraan-info">
                    <div class="kendaraan-info-judul">
                        <h3>Terios</h3>
                        <h5>Spesifikasi :</h5>
                    </div>
                    <div class="row d-flex">
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-kursi.png')}}" alt="">
                            </div>
                            <div>
                                <h4>Tempat Duduk</h4>
                                <h5>5 Kursi</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-bagasi.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h4>Bagasi</h4>
                                <h5>2 Bag</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-transmisi.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h4>Transmisi</h4>
                                <h5>Automatic</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-bahanbakar.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h4>Bahan Bakar</h4>
                                <h5>Bensin</h5>
                            </div>
                        </div>
                        <div class="col-sm-12 d-flex mt-4">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-bahanbakar.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h5>
                                    Kendaraan telah melalui proses verifikasi yang ketat dan telah memenuhi dengan
                                    sukses semua tes
                                    uji
                                    kelayakan jalan yang diperlukan.
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row sewa">
                        <div class="col-sm-12 tanya">
                            <h3>Ingin Menggunakan Kendaraan Ini?</h3>
                        </div>
                        <div class="col-sm-6 harga mt-2">
                            <h5>Harga Sewa</h5>
                            <h4>Rp. 300.000</h4>
                        </div>
                        <div
                            class="col-sm-6  entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                            <button class="btn-entry" onclick="window.location.href='{{route ('pesanrental')}}';">Sewa
                                Sekarang</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
