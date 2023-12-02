@extends('admin.adminTemplate')

@section('title')
    Room List
@endsection

@section('mainContent')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-12">
            <h1 class="h3 mb-0 text-gray-800">Room List</h1>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <a href="{{ route('product.addRoom') }}" class="btn btn-primary btn-icon-split btn-lg">
                <span class="text">ADD Room</span>
            </a>
        </div>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Available Rooms</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Rent</th>
                                <th>Dimention</th>
                                <th>Washroom</th>
                                <th>Bed</th>
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
                        @foreach ($rooms as $room)
                            <tbody>
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->location }}</td>
                                    <td>{{ $room->rent }}</td>
                                    <td>{{ $room->dimention }}</td>
                                    <td>{{ $room->washroom }}</td>
                                    <td>{{ $room->bed }}</td>
                                    <td>{{ $room->ac }}</td>
                                    <td>{{ $room->electricity }}</td>
                                    <td>{{ $room->phone }}</td>
                                    <td>{{ $room->email }}</td>
                                    <td>{{ $room->image_1 }}</td>
                                    <td>{{ $room->image_2 }}</td>
                                    <td>{{ $room->image_3 }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ route('product.editRoom', $room->id) }}">EDIT
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('product.deleteRoom', $room->id) }}">DELETE
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
