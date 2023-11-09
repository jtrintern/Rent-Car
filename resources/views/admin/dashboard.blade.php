@extends('admin.components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Dashboard')
@section('content')
    <div class="az-content-body">
        <div class="az-dashboard-one-title">
            <div>
                <h2 class="az-dashboard-title">Hi {{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}, welcome back!
                </h2>
                <p class="az-dashboard-text">Your web dashboard.</p>
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

        <div class="row row-sm mg-b-20">
            <div class="col-lg-12 ht-lg-100p">
                <div class="az-content-label mg-b-5">Rented Car</div>
                <p class="mg-b-20">In this table, we have displayed car information, including their license plate number,
                    renter name, start date of rental, and end date of rental date. This structured format makes it easy to
                    analyze the data.
                </p>

                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>License plate</th>
                                <th>Car Model</th>
                                <th>Renter Name</th>
                                <th>Start date rent</th>
                                <th>End date rent</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaction as $key => $tran)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$tran->car->noPol}}</td>
                                    <td>{{$tran->car->carBrand.' '.$tran->car->carName}}</td>
                                    <td>{{$tran->user->firstName.' '.$tran->user->lastName}}</td>
                                    <td>{{date('d F Y', strtotime($tran->startBook))}}</td>
                                    <td>{{date('d F Y', strtotime($tran->until()))}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div><!-- col -->

            <div class="col-sm-2 col-md-2 mg-t-10 mg-sm-t-10"><button
                    class="btn btn-outline-indigo btn-rounded btn-block">Show More</button></div>

        </div><!-- row -->
    </div><!-- az-content-body -->
@endsection
