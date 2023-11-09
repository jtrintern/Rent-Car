@extends('rentcarr.index_master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h2>Invoice</h2>
                    <ol>
                        <li> <a href="index.html">Home</a></li>
                        <li><a href="listkendaraan.html">History</a></li>
                        <li><a  style="color: #E1B12C;" href="detailkendaraan.html">Invoice</a></li>
                    </ol>
                </div>
                <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <button class="btn-entry" onclick="window.location.href='{{ route('listkendaraan') }}'">Kembali</button>
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
                                <h4>{{ $transaction->user->firstName . ' ' . $transaction->user->lastName }}</h4>
                                <h4>{{ '+62' . $transaction->user->phone }}</h4>
                                <h3 class="text-card pt-3">Metode Pembayaran :</h3>
                                <h4>COD/Bayar ditempat</h4>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="text-card" style="text-align: end;">Tanggal Pemesanan :</h3>
                                <h4 style="text-align: end;">{{ $transaction->created_at->format('d F Y') }}</h4>
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
                                            <h3>{{ $transaction->car->carBrand . ' ' . $transaction->car->carName . ' (' . $transaction->car->noPol.') - ' . $transaction->type() }}
                                            </h3>
                                            <h4>Tanggal Mulai - {{ date('d F Y', strtotime($transaction->startBook)) }},
                                                {{ $transaction->duration }} Hari</h4>
                                            <h4>{{ $transaction->user->firstName . ' ' . $transaction->user->lastName }}</h4>
                                            <h4>{{ '+62' . $transaction->user->phone }}</h4>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 style="text-align: end; padding:0;">Rp. {{number_format($transaction->totalCost)}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="total">
                                <div class="card-body px-5">
                                    <h4>Total Pembayaran</h4>
                                    <h3
                                        style="font-family:'Plus Jakarta Sans'; color: var(--primary-color); font-size: 22px; font-weight: bold;">
                                        Rp. {{number_format($transaction->totalCost)}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="button-download pt-5">
                            <button onclick="window.print()" class="btn-download">Cetak</button>
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
