@extends('admin.components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Admin List')
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
                <div class="az-content-label mg-b-10">Admin List</div>
                <div class="row row-sm mg-b-20">
                    <div class="col-md-10 ht-lg-100p">
                        <p class="mg-b-20">n this table, there's admin data with full names, email, phone number, and addresses.
                        </p>
                    </div>
                    <div class="col-md-2 ht-lg-100p">
                        <a href="{{route('addAdmin')}}" class="btn btn-outline-indigo btn-block">Add New Admin</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $user->firstName.' '.$user->lastName }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>+62{{ $user->phone }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        <div class="row">
                                            <button type="button" {{Auth::user()->id == $user->id ? 'disabled':''}} data-toggle="modal" data-target="#deleteModal"
                                                class="btn btn-outline-danger btn-icon mg-r-10"><i
                                                    class="typcn typcn-trash"></i></button>
                                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                                            <a href="deleteAdmin/{{ $user->id }}"
                                                                class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a {{Auth::user()->id == $user->id ? 'disabled':''}} class="btn btn-outline-warning btn-icon"><i class="typcn typcn-edit"></i></a>
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
