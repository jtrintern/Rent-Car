@extends('admin.components.main', [
'namePage' => 'Dashboard',
])
@section('title', 'Detail Transaction')
@section('content')
<div class="az-content-body">
    <div class="az-dashboard-one-title">
        <div>
            <h2 class="az-dashboard-title">Hi
                {{ Auth::user()->firstName . ' ' . Auth::user()->lastName }},
                welcome back!
            </h2>
            <p class="az-dashboard-text">Detail Transaction.</p>
        </div>
        <div class="az-content-header-right">
            <div class="media">
                <div class="media-body">
                    <label>Today is</label>
                    <h6>{{ date('l, Y/m/d') }}</h6>
                </div><!-- media-body -->
            </div><!-- media -->
        </div>
    </div><!-- az-dashboard-one-title -->

    <div class="az-dashboard-nav">
    </div>

    <section>
        <div class="detail-penyewa">
            <div class="title">
                <h3 style="color:05366D; margin: 30px 0 20px 0">Data Penyewa</h3>
            </div>
            <form method="GET" action="">
                <div class="row row-sm mg-b-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nomor Induk Kependudukan (NIK)</label>
                            <input class="form-control" value="{{ $transaction->NIK }}" type="text" name="NIK" id="" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Renter Name</label>
                            <input class="form-control" value="{{ $transaction->user->firstName . ' ' . $transaction->user->lastName }}" type="text" name="name" id="name" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">No. Telepon/Whatsapp</label>
                            <input class="form-control" value="+62 {{ $transaction->user->phone }}" type="text" name="carBrand" id="" readonly>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <div class="az-dashboard-nav">
    </div>
    <section>
        <div class="data-pesanan">
        <div class="title">
        <h3 style="color:05366D; margin: 30px 0 20px 0">Data Pesanan</h3>
    </div>
    <form method="GET" action="">
        <div class="row row-sm mg-b-20">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Car Model</label>
                    <input class="form-control" value="{{ $transaction->car->carName }}" type="text" name="carName" id="name" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Car Brand</label>
                    <input class="form-control" value="{{ $transaction->car->carBrand }}" type="text" name="carBrand" id="" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">License Plate Number</label>
                    <input class="form-control" type="text" style="text-transform:uppercase"
                        oninput="this.value = this.value.toUpperCase()" name="noPol" id="" value="{{ $transaction->car->noPol }}" readonly>
                </div>
            </div>
        </div>
        <div class="row row-sm mg-b-20">
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Cost</label>
                    <input class="form-control" type="text" name="totalCost" id="name" value="Rp {{ number_format($transaction->totalCost, 0, ',', ',') }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Start Date Rental</label>
                    <input class="form-control" type="text" name="totalSit" id="name" value="{{ date('d F Y', strtotime($transaction->startBook)) }}" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">End Date Rental</label>
                    <input class="form-control" type="text" name="totalLuggage" id="" value="{{ date('d F Y', strtotime($transaction->until())) }}" readonly>
                </div>
            </div>
        </div>
    </form>
        </div>
    </section>
</div>


@endsection
