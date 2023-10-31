@extends('index')
@section('content')

    <!-- ======= Hero Section ======= -->
  <section id="entry-hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>Pemesanan</h1>
          <h2><span>Cari</span> <i class="fa-solid fa-angle-right"></i> <span >Pilih Kendaraan</span> <i class="fa-solid fa-angle-right text-warning"></i> <span style="color: var(--secondary-color);">Pemesanan & Pembayaran</span> <i class="fa-solid fa-angle-right"></i></h2>
        </div>
        <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <a href="index.html"></a><button class="btn-entry">Kembali</button>
          </div>
      </div>
    </div>
    </div>

  </section><!-- End Hero -->

<main id="invoice">
    <div class="container py-3">
        <div class="card">
            <div class="card-body px-5">
                <div class="judul-invoice col-lg-8">
                    <h3 style="font-weight: bold;">Invoice</h3>
                    <span>No. Invoice : REN37892TCR</span>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body px-5">
                <div class="row">
                    <div class="col-lg-8 row">
                        <span class="text-card">Data Pemesan :</span>
                        <span>Dzaki Ahmad Fajrianto</span>
                        <span>+6281234567890</span>
                        <span class="text-card pt-3">Metode Pembayaran :</span>
                        <span>COD/Bayar ditempat</span>
                    </div>
                    <div class="col-lg-4 row">
                        <span class="text-card" style="text-align: end;">Tanggal Pemesanan :</span>
                        <span style="text-align: end; margin-top: -17%; ">25 Oktober 2023</span>
                    </div>
                </div> <br>
                <div class="card-rinci">
                    <div class="card-body px-4">
                        <span class="text-card">Rincian Pesanan</span>
                    </div>
                </div>
                <div class="card-rinci">
                    <div class="card-body px-4">
                        <div class="row">
                            <div class="col-lg-8 row">
                                <span class="text-card">Terios P 8799 XY -  Lepas Kunci / Tanpa Pengemudi</span>
                                <span>Tanggal Mulai - 25 Oktober 2023, 3 Hari</span>
                                <span>Dzaki Ahmad Fajrianto</span>
                                <span>+6281234567890</span>
                            </div>
                            <div class="col-lg-4 row">
                                <span style="text-align: end;">Rp. 300.000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-rinci">
                    <div class="card-body px-4 row">
                        <span>Total Pembayaran</span>
                        <span style="color: var(--primary-color); font-size: 22px; font-weight: bold;">Rp.300.000</span>
                    </div>
                </div>
                <div class="button-download pt-5">
                    <a href=""></a><button class="btn-download">Cetak</button>
                    <a href="" style="padding-right: 6px;"></a><button class="btn-download">Download</button>
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