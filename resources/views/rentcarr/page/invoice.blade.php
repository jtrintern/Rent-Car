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
                <button class="btn-entry" onclick="window.location.href='{{route ('pesanrental')}}'">Kembali</button>
            </div>
        </div>
    </div>
</section><!-- End Breadcrumbs -->
<main id="invoice">
    <div class="container py-3">
        <div class="invoice-body">

            <div class="nomor-invoice">
                <div class="card-body px-5">
                    <div class="judul-invoice col-lg-8">
                        <h3 style="font-weight: bold;">Invoice</h3>
                        <span>No. Invoice : REN37892TCR</span>
                    </div>
                </div>
            </div>
            <div class="data-pesanan">
                <div class="card-body px-5">
                    <div class="data-pemesan d-flex">
                        <div class="col-lg-8">
                            <h3 class="text-card">Data Pemesan :</h3>
                            <h4>Dzaki Ahmad Fajrianto</h4>
                            <h4>+6281234567890</h4>
                            <h3 class="text-card pt-3">Metode Pembayaran :</h3>
                            <h4>COD/Bayar ditempat</h4>
                        </div>
                        <div class="col-lg-4">
                            <h3 class="text-card" style="text-align: end;">Tanggal Pemesanan :</h3>
                            <h4 style="text-align: end;">25 Oktober 2023</h4>
                        </div>
                    </div>
                    <br>
                    <div class="rincian-pesanan">
                        <div class="title">
                            <div class="card-body px-5">
                                <!-- <div class="title col-lg-8"> -->
                                    <h3 style="font-weight: bold;">Rincian Pesanan</h3>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="rincian">
                            <div class="card-body px-5">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h3>Terios P 8799 XY - Lepas Kunci / Tanpa Pengemudi</h3>
                                        <h4>Tanggal Mulai - 25 Oktober 2023, 3 Hari</h4>
                                        <h4>Dzaki Ahmad Fajrianto</h4>
                                        <h4>+6281234567890</h4>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 style="text-align: end; padding:0;">Rp. 300.000</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <div class="card-body px-5">
                                <h4>Total Pembayaran</h4>
                                <h3
                                    style="font-family:'Plus Jakarta Sans'; color: var(--primary-color); font-size: 22px; font-weight: bold;">Rp. 300.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="button-download pt-5">
                        <a href=""></a><button class="btn-download">Cetak</button>
                        <a href="" style="padding-right: 6px;"></a><button class="btn-download">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content row">
            <img src="assets/img/Vector.png" alt="">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
