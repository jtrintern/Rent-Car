@extends('rentcarr.index_master')
@section('title','RentCar | Detail Car')
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
                    {{-- <li><a href="">Pemesanan & Pembayaran</a></li> --}}
                </ol>
            </div>
            {{-- <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                <button class="btn-entry" onclick="window.location.href='{{route ('listkendaraan')}}'">Kembali</button>
            </div> --}}
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
                            @foreach ($car->galleryImage as $key => $img )
                                
                            <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                <img src="{{asset('images/gallery/'.$img)}}"
                                    alt="Hills">
                            </div>
                            @endforeach
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
                            @foreach ($car->galleryImage as $key => $img )
                                
                            <li class="list-inline-item {{$key == 0 ? 'active' : '' }}">
                                <a id="{{'carousel-selector-'.$key}}" class="selected" data-slide-to="{{$key}}"
                                    data-target="#custCarousel">
                                    <img src="{{asset('images/gallery/'.$img)}}"
                                        class="img-fluid">
                                </a>
                            </li>
                            @endforeach

                            
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7 kendaraan-info">
                    <div class="kendaraan-info-judul">
                        <h3>{{$car->carBrand.' '.$car->carName}}</h3>
                        <h5>Spesifikasi :</h5>
                    </div>
                    <div class="row d-flex">
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-kursi.png')}}" alt="">
                            </div>
                            <div>
                                <h4>Tempat Duduk</h4>
                                <h5>{{$car->totalSit}} Kursi</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-bagasi.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h4>Bagasi</h4>
                                <h5>{{$car->totalLuggage}} Bag</h5>
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex">
                            <div>
                                <img src="{{asset ('rentCar/assets/img/detail-kendaraan/icon-transmisi.png')}}" alt="">
                            </div>
                            <div class="div">
                                <h4>Transmisi</h4>
                                <h5>{{$car->transmission()}}</h5>
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
                            <h4>Rp. {{number_format($car->costPerDay)}}/Hari</h4>
                        </div>
                        <div
                            class="col-sm-6  entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                            <a class="btn-entry" href="/book/{{$car->id}}">Sewa
                                Sekarang</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@endsection
