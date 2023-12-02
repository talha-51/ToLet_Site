@extends('admin.adminTemplate')

@section('title')
    Flat / Villa List
@endsection

@section('mainContent')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-12">
            <h1 class="h3 mb-0 text-gray-800">Flat / Villa List</h1>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <a href="{{ route('product.addFlat') }}" class="btn btn-primary btn-icon-split btn-lg">
                <span class="text">ADD Flat / Villa</span>
            </a>
        </div>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Available Flat / Villa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Rent</th>
                                <th>Washroom</th>
                                <th>Bed</th>
                                <th>Dimention</th>
                                <th>Room</th>
                                <th>AC</th>
                                <th>Electricity</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Image-1</th>
                                <th>Image-2</th>
                                <th>Image-3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($flats as $flat)
                            <tbody>
                                <tr>
                                    <td>{{ $flat->id }}</td>
                                    <td>{{ $flat->location }}</td>
                                    <td>{{ $flat->rent }}</td>
                                    <td>{{ $flat->washroom }}</td>
                                    <td>{{ $flat->bed }}</td>
                                    <td>{{ $flat->dimention }}</td>
                                    <td>{{ $flat->room }}</td>
                                    <td>{{ $flat->ac }}</td>
                                    <td>{{ $flat->electricity }}</td>
                                    <td>{{ $flat->phone }}</td>
                                    <td>{{ $flat->email }}</td>
                                    <td>{{ $flat->image_1 }}</td>
                                    <td>{{ $flat->image_2 }}</td>
                                    <td>{{ $flat->image_3 }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ route('product.editFlat', $flat->id) }}">EDIT
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('product.deleteFlat', $flat->id) }}">DELETE
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
