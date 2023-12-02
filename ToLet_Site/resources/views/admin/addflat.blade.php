@extends('admin.adminTemplate')

@section('title')
    Add Flat / Villa
@endsection

@section('mainContent')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-12">
            <h1 class="h3 mb-0 text-gray-800">Add Flat / Villa</h1>
        </div>

        <br>
        <div class="d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h1 class="text-center text-gray-900">Add A New Flat / Villa</h1>
                        <br>
                        <form class="user" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" value="{{ old('location') }}">
                                <small class="form-text  text-danger">{{ $errors->first('location') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Rent (Monthly in BDT)</label>
                                <input type="number" class="form-control" name="rent" value="{{ old('rent') }}">
                                <small class="form-text  text-danger">{{ $errors->first('rent') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Washroom</label>
                                <input type="number" class="form-control" name="washroom" value="{{ old('washroom') }}">
                                <small class="form-text  text-danger">{{ $errors->first('washroom') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Bed</label>
                                <input type="number" class="form-control" name="bed" value="{{ old('bed') }}">
                                <small class="form-text  text-danger">{{ $errors->first('bed') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Dimention (In 'm' [Ex: 5*3] )</label>
                                <input type="text" class="form-control" name="dimention" value="{{ old('dimention') }}">
                                <small class="form-text  text-danger">{{ $errors->first('dimention') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Room</label>
                                <input type="number" class="form-control" name="room" value="{{ old('room') }}">
                                <small class="form-text  text-danger">{{ $errors->first('room') }}</small>
                            </div>
                            <div class="form-group">
                                <label>AC</label>
                                <input type="number" class="form-control" name="ac" value="{{ old('ac') }}">
                                <small class="form-text  text-danger">{{ $errors->first('ac') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Electricity</label>
                                <select class="form-control" name="electricity" value="{{ old('electricity') }}">
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                                <small class="form-text  text-danger">{{ $errors->first('electricity') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" name="phone" value="{{ old('phone') }}">
                                <small class="form-text  text-danger">{{ $errors->first('phone') }}</small>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                <small class="form-text  text-danger">{{ $errors->first('email') }}</small>
                            </div>
                            <div class="form-group">
                                Upload 3 Images (Only png and jpg allowed and max file size 2 MB each)<br><br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <input type="file" class="form-control-file" name="image_1">
                                        <small class="form-text text-danger">{{ $errors->first('image_1') }}</small>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="file" class="form-control-file" name="image_2">
                                        <small class="form-text text-danger">{{ $errors->first('image_2') }}</small>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="file" class="form-control-file" name="image_3">
                                        <small class="form-text text-danger">{{ $errors->first('image_3') }}</small>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add">
                                <a href="{{ route('product.flatList') }}" class="btn btn-light">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
