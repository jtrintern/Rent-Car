@extends('rentcarr.index_master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h2>Detail Kendaraan</h2>
                    <ol>
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('listkendaraan') }}">Pilih Kendaraan</a></li>
                        <li><a href="/detailcar/{{ $car->id }}">Detail Kendaraan</a></li>
                        <li><a style="color: #E1B12C;" href="/book/{{ $car->id }}">Pemesanan & Pembayaran</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <main id="pesan" class="pesan">
        <div class="container py-3">
            <form
                @if (Auth::check()) action="{{ route('transaction') }}" method="POST"
            @else
            action="{{ route('login') }}" method="GET" @endif
                id="formtransaction" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body px-5">
                        <div class="judul-pesan">
                            <h3>Data Pesanan</h3> <br>
                        </div>
                        <div class="data-pesanan">
                            <div class="row d-flex">
                                <div class="col-md-6">
                                    <label for="exampleDropdownFormEmail1" class="form-label">Tanggal
                                        Mulai</label> <span style="color: var(--primary-color);"> *</span>
                                    <input required name="startBook" type="date" class="form-control form-control"
                                        placeholder="Date">
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="masasewa" class="form-label">Masa Sewa</label> <span
                                        style="color: var(--primary-color);"> *</span>
                                    <input required onInput="getValue()" name="duration" type="number"
                                        class="form-control form-control" id="masasewa">
                                    </select>
                                </div>
                            </div>
                            <div class="div" style="margin-top: 14px;">
                                <div class="form-check form-check-inline">
                                    <input name="bookType" class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="0">
                                    <label class="form-check-label" for="inlineRadio1">Tanpa Pengemudi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="bookType" class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="1">
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
                        <div class="data-penyewa">
                            <div class="row d-flex">
                                <div class="col-md-6">
                                    <label for="exampleDropdownFormEmail1" class="form-label"
                                        style="padding-left: 4px;">Nomor
                                        Induk Kependudukan (NIK)</label> <span style="color: var(--primary-color);">
                                        *</span>
                                    <input required name="NIK" type="text" class="form-control"
                                        placeholder="E.g 33XXXXXXXXXXXXXX">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleDropdownFormEmail1" class="form-label"
                                        style="padding-left: 4px;">Foto
                                        KTP</label> <span style="color: var(--primary-color);"> *</span>
                                    <div class="input-group mb-3">
                                        <input name="fotoktp" required type="file" class="form-control"
                                            id="inputGroupFile02" placeholder="Upload KTP anda">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <br>
                <input type="hidden" name="carId" value="{{ $car->id }}">
                @if (Auth::check())
                    
                <input type="hidden" name="userId" value="{{ Auth::user()->id }}">
                @endif
                <input type="number" hidden name="totalCost" id="totalCost" value="">
            </form>
            <div class="card">
                <div class="card-body px-5">
                    <div class="judul-pesan">
                        <h3>Metode Pembayaran</h3> <br>
                    </div>
                    <div class="row">
                        <div class="div">
                            <div class="col-lg-9" style="padding: 5px;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                    <label class="form-check-label active" for="inlineRadio1">COD/Tunai</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Transfer Bank</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Gopay</label>
                                </div> <br> <br>
                                <span style="color: red;">* maaf untuk saat ini hanya tersedia pembayaran COD/Tunai</span>
                            </div>
                            <div class="pt-3 d-flex">
                                <div class="col-lg-8 row">
                                    <span style="color: var(--primary-color);">Total Pembayaran</span>
                                    <span style="color: var(--primary-color); font-weight: bold; font-size: 20px;"
                                        id="total">Rp.</span>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn-bayar" type="button" style="float: right;"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">Bayar Sekarang</button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="content">
                                            <img src="{{ asset('assets/rentCar/assets/img/modal.png') }}" alt="">
                                            <h3>Peringatan !</h3>
                                            <h5>Pastikan data yang anda isi sudah benar dan sesuai</h5>
                                        </div>
                                        <div class="row butt">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn1"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn2"
                                                    onclick="event.preventDefault(); document.getElementById('formtransaction').submit();">Save
                                                    changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <?php
    $cost = $car->costPerDay;
    echo "<script>
                                            function getValue() {
                                                let masasewa = document.getElementById('masasewa').value * $cost;
                                                document.getElementById('total').innerText = Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(masasewa,);
                                                document.getElementById('totalCost').value = masasewa;
                                            }
                                        </script>";
    ?>
@endsection
