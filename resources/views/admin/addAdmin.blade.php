@extends('admin.components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Add New Car')
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

        <form method="post" action="{{ route('storeCar') }}" enctype="multipart/form-data">
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
            <div class="row row-sm mg-b-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input class="form-control" value="{{ old('carName') }}" type="text" name="carName"
                            id="firstname">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input class="form-control" value="{{ old('carBrand') }}" type="text" name="carBrand"
                            id="lastname">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input class="form-control" value="{{ old('carBrand') }}" type="email" name="carBrand"
                            id="email">
                    </div>
                </div>
            </div>
            <div class="row row-sm mg-b-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input class="form-control" type="text" name="totalSit" id="phone"
                            value="{{ old('totalSit') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input class="form-control" type="text" name="totalLuggage" id="address"
                            value="{{ old('totalLuggage') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="birthdate">Birthdate</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                </div>
                            </div>
                            <input type="date" id="datetimepicker" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-sm mg-b-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Cost/Day</label>
                        <input class="form-control" type="number" name="costPerDay" id="name"
                            value="{{ old('costPerDay') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="formFile">Default file input example</label>
                        <input value="{{ old('carImage') }}" name="carImage" class="form-control" type="file"
                            id="formFile">
                    </div>
                </div>
            </div>
            <a href="{{ route('indexCar') }}" class="btn btn-indigo">Back</a>
            <button type="submit" class="btn btn-outline-indigo">Add New Car</button>
        </form>
    </div><!-- az-content-body -->

@endsection
