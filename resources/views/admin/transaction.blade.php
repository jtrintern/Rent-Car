@extends('admin.components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Car')
@section('content')
    <div class="az-content-body">
        <div class="az-dashboard-one-title">
            <div>
                <h2 class="az-dashboard-title">Hi
                    {{ Auth::user()->firstName . ' ' . Auth::user()->lastName }},
                    welcome back!
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
                <div class="az-content-label mg-b-10">Transaction Category</div>
                <div class="row row-sm mg-b-20">
                    <div class="col-md-10 ht-lg-100p">
                        <p class="mg-b-20">In this table, we have a list of transaction available for rent, including their make,
                            model, cost per day, and availability status. You can customize this
                            table with your specific rental inventory data or add more columns as needed for additional
                            information,
                            such as rental duration, location, or other relevant details.
                        </p>
                    </div>
                </div>

                <div class="table-responsive">

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <table class="table table-hover mg-b-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>License plate</th>
                                <th>Car Model</th>
                                <th>Renter Name</th>
                                <th>Start date rent</th>
                                <th>End date rent</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($transaction as $key => $tran)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $tran->car->noPol }}</td>
                                    <td>{{ $tran->car->carBrand . ' ' . $tran->car->carName }}</td>
                                    <td>{{ $tran->user->firstName . ' ' . $tran->user->lastName }}</td>
                                    <td>{{ date('d F Y', strtotime($tran->startBook)) }}</td>
                                    <td>{{ date('d F Y', strtotime($tran->until())) }}</td>
                                    <td>
                                        <div class="row">
                                            <button type="button" data-toggle="modal"
                                                data-target="#deleteModal{{ $key }}"
                                                class="btn btn-outline-danger btn-icon mg-r-10"><i
                                                    class="typcn typcn-trash"></i></button>
                                            <div class="modal fade" id="deleteModal{{ $key }}" tabindex="-1"
                                                role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteModalLabel">Delete Car
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Are you sure?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <a href="deleteTransaction/{{$tran->id}}" class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="detailTransaction/{{ $tran->id }}" class="btn btn-outline-warning btn-icon"><i
                                                class="typcn typcn-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div><!-- col -->


        </div><!-- row -->
    </div><!-- az-content-body -->


@endsection
