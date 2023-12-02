@extends('homeTemplate')
@section('title')
    Room
@endsection
@section('body')
    sub_page
@endsection

@section('mainContent')
    </div>
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h1>Room</h1>
            </div>
            @foreach ($rooms as $room)
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="2000">
                                        <img src="{{ asset($room->image_1) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($room->image_2) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($room->image_3) }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="detail-box">
                                <h2>Location: {{ $room->location }}</h2>
                                <h4><b>{{ $room->rent }} BDT /Month</b></h4>
                                <p>
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <h5>Product Details</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Dimention:</b> {{ $room->dimention }}m&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td><b>Washroom:</b> {{ $room->washroom }}&nbsp;&nbsp;</td>
                                        <td><b>Bed:</b> {{ $room->bed }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>AC:</b> {{ $room->ac }}</td>
                                        <td><b>Electricity:</b> {{ $room->electricity }}</td>
                                    </tr>
                                </table>
                                </p>
                                <p>
                                <table>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-info">Call:
                                                {{ $room->phone }}</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info">Email: {{ $room->email }}</button>
                                        </td>
                                    </tr>
                                </table>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </section>
@endsection
