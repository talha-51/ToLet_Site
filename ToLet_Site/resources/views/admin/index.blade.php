@extends('admin.adminTemplate')

@section('title')
    Admin Home
@endsection

@section('mainContent')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body text-center">
                        <a href="{{ route('product.bedSpaceList') }}">Bed Space List</a></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-light text-black shadow">

                    <div class="card-body text-center">
                        <a href="{{ route('product.roomList') }}">Room List</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body text-center">
                        <a href="{{ route('product.flatList') }}">Flat / Villa List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
