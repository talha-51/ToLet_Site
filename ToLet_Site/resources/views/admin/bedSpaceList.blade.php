@extends('admin.adminTemplate')

@section('title')
    Bed Space List
@endsection

@section('mainContent')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-12">
            <h1 class="h3 mb-0 text-gray-800">Bed Space List</h1>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <a href="{{ route('product.addBedSpace') }}" class="btn btn-primary btn-icon-split btn-lg">
                <span class="text">ADD BED SPACE</span>
            </a>
        </div>
        <br>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Available Bed Spaces</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Rent</th>
                                <th>Location</th>
                                <th>Dimention</th>
                                <th>Pillows</th>
                                <th>Bed Sheet</th>
                                <th>Phone Number</th>
                                <th>Email Address</th>
                                <th>Image-1</th>
                                <th>Image-2</th>
                                <th>Image-3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($bedSpaces as $bedSpace)
                            <tbody>
                                <tr>
                                    <td>{{ $bedSpace->id }}</td>
                                    <td>{{ $bedSpace->title }}</td>
                                    <td>{{ $bedSpace->rent }}</td>
                                    <td>{{ $bedSpace->location }}</td>
                                    <td>{{ $bedSpace->dimention }}</td>
                                    <td>{{ $bedSpace->pillows }}</td>
                                    <td>{{ $bedSpace->bed_sheet }}</td>
                                    <td>{{ $bedSpace->phone }}</td>
                                    <td>{{ $bedSpace->email }}</td>
                                    <td>{{ $bedSpace->image_1 }}</td>
                                    <td>{{ $bedSpace->image_2 }}</td>
                                    <td>{{ $bedSpace->image_3 }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm"
                                            href="{{ route('product.editBedSpace', $bedSpace->id) }}">EDIT
                                        </a>
                                        <a class="btn btn-danger btn-sm"
                                            href="{{ route('product.deleteBedSpace', $bedSpace->id) }}">DELETE
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
