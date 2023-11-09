@extends('rentcarr.index_master')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h2>History</h2>
                    <ol>
                        <li> <a href="{{ route('home') }}">Home</a></li>
                        <li><a style="color: #E1B12C;" href="{{ route('listkendaraan') }}">History</a>
                        </li>
                    </ol>
                </div>
                <!-- <div class="col-lg-4 entry-button flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                                <button class="btn-entry">Kembali</button>
                            </div> -->
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">
        <section id="history" class="history">
            <div class="container history-konten">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th></th>
                            <th>Car</th>
                            <th>Start date rent</th>
                            <th>End date rent</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaction as $key => $trans)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td><a href="/invoice/{{$trans->id}}">View Invoice</a></td>
                                <td>{{$trans->car->carName.' '.$trans->car->carBrand}}</td>
                                <td>{{$trans->startBook}}</td>
                                <td>{{$trans->until()}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </section>
    </main>
@endsection
