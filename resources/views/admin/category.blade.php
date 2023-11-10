@extends('admin.components.main', [
'namePage' => 'Dashboard',
])
@section('title', 'Category')
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
        <div class="col-lg-8 ht-lg-100p">
            <div class="az-content-label mg-b-10">Car Category</div>
            <p class="mg-b-20">In this table, we've listed car categories.
            </p>

            <div class="table-responsive">

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert" id="success-alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table table-hover mg-b-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($category as $cate)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $cate->name }}</td>
                                <td>
                                    <div class="row">
                                        <button type="button" data-toggle="modal" data-target="#deleteModal"
                                            class="btn btn-outline-danger btn-icon mg-r-10"><i
                                                class="typcn typcn-trash"></i></button>
                                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                            aria-labelledby="deleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel">Delete Category
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
                                                        <a href="deleteCategory/{{ $cate->id }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-toggle="modal" data-target="#editModal"
                                            class="btn btn-outline-warning btn-icon"><i
                                                class="typcn typcn-edit"></i></button>
                                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                            aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="editCategory/{{ $cate->id }}" method="post">
                                                        <div class="modal-body">
                                                            @csrf
                                                            <div class="form-group">
                                                                <input class="form-control" name="name"
                                                                    value="{{ $cate->name }}" type="text">
                                                            </div>


                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-outline-indigo">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div><!-- col -->
        <div class="col-lg-4 ht-lg-100p">
            <div class="az-content-label mg-b-10"> Add New Car Category</div>
            <form action="{{ route('storeCategory') }}" method="post">
                @csrf
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <input class="form-control" name="name" placeholder="Category Name" type="text">
                </div>
                <button type="submit" class="btn btn-indigo btn-block">Add</button>

            </form>

        </div><!-- col -->


    </div><!-- row -->
</div><!-- az-content-body -->


@endsection
