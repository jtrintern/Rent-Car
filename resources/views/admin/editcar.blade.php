@extends('admin.components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Add New Car')
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

        <form method="POST" action="/admin/updatecar/{{ $car->id }}">
            @method('PUT')
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
                        <label for="name">Car Model</label>
                        <input class="form-control" value="{{ $car->carName }}" type="text" name="carName"
                            id="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Car Brand</label>
                        <input class="form-control" value="{{ $car->carBrand }}" type="text" name="carBrand"
                            id="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control" name="categoryId" id="">
                            @foreach ($category as $cate)
                                <option value="{{ $cate->id }}"
                                    {{ $cate->id == old('categoryId', $car->categoryId) ? 'selected' : '' }}>
                                    {{ $cate->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row row-sm mg-b-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Total Sit</label>
                        <input class="form-control" type="number" name="totalSit" id="name"
                            value="{{ $car->totalSit }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Total Luggage</label>
                        <input class="form-control" type="text" name="totalLuggage" id=""
                            value="{{ $car->totalLuggage }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">License Plate Number</label>
                        <input class="form-control" type="text" style="text-transform:uppercase"
                            oninput="this.value = this.value.toUpperCase()" name="noPol" id=""
                            value="{{ $car->noPol }}">
                    </div>
                </div>
            </div>
            <div class="row row-sm mg-b-20">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="name">Cost/Day</label>
                        <input class="form-control" type="number" name="costPerDay" id="name"
                            value="{{ $car->costPerDay }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="">Transmission</label>
                    <div class="row d-flex" style="margin-top:10px;">
                        <div class="col-md-4">
                            <label class="rdiobox">
                                <input name="transmisi" type="radio" value="0">
                                <span>Manual</span>
                            </label>
                        </div>
                        <div class="col-md-3">
                            <label class="rdiobox">
                                <input name="transmisi" type="radio" value="1">
                                <span>Matic</span>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
            <a href="{{ route('indexCar') }}" class="btn btn-outline-indigo">Back</a>
            <button type="submit" class="btn btn-indigo">Update Car</button>
            @method('PUT')
        </form>
    </div><!-- az-content-body -->


@endsection
