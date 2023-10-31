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

<main id="pesan">
    <div class="container py-3">
        <div class="card">
            <div class="card-body px-5">
                <div class="judul-pesan">
                    <h3>Data Pesanan</h3> <br>
                </div>
                <div class="row">
                    <div class="div d-flex">
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Unit Kendaraan</label> <span style="color: var(--primary-color);"> *</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kendaraan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Masa Sewa</label> <span style="color: var(--primary-color);"> *</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih masa sewa</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Tanggal Mulai</label> <span style="color: var(--primary-color);"> *</span>
                                    <input type="date" class="form-control form-control" placeholder="Date">
                            </select>
                        </div>
                    </div>
                    <div class="div">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Tanpa Pengemudi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Dengan Pengemudi</label>
                        </div>
                    </div>
                </div>
                
            </div>
        </div> <br>
        <div class="card">
            <div class="card-body px-5">
                <div class="judul-pesan">
                    <h3>Data Penyewa</h3> <br>
                </div>
                <div class="row">
                    <div class="div d-flex">
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Nomor Induk Kependudukan (NIK)</label> <span style="color: var(--primary-color);"> *</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Masukan NIK anda</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Nama Penyewa</label> <span style="color: var(--primary-color);"> *</span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Masukan nama penyewa</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-4" style="padding: 5px;">
                            <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">No. Telpon/Whatsapp</label> <span style="color: var(--primary-color);"> *</span>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"> +62</span>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan no telepon tanpa angka 0">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="exampleDropdownFormEmail1" class="form-label" style="padding-left: 4px;">Foto KTP</label> <span style="color: var(--primary-color);"> *</span>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02" placeholder="Upload KTP anda">
                        </div>
                    </div>
                </div>
                
            </div>
        </div> <br>
        <div class="card">
            <div class="card-body px-5">
                <div class="judul-pesan">
                    <h3>Metode Pembayaran</h3> <br>
                </div>
                <div class="row">
                    <div class="div row">
                        <div class="col-lg-9" style="padding: 5px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label active" for="inlineRadio1">COD/Tunai</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Transfer Bank</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">Gopay</label>
                            </div> <br> <br>
                            <span style="color: red;">* maaf untuk saat ini hanya tersedia pembayaran COD/Tunai</span>
                        </div>
                        <div class="pt-3 d-flex" style="padding: 5px;">
                            <div class="col-lg-8 row">
                                <span style="color: var(--primary-color);">Total Pembayaran</span>
                                <span style="color: var(--primary-color); font-weight: bold; font-size: 20px;">Rp. 300.000</span>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn-bayar" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">Bayar Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ===== modal ===== -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content row">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- body modal -->
                    <img src="{{ asset('rentCar/assets/img/Vector.png') }}" alt="" style="width: 20%; text-align: center;">
                <!-- footer modal -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
            </div>
        </div>
    </div>
<!-- end modal -->
@endsection