@extends('homeTemplate')
@section('title')
    Flat / Villas
@endsection
@section('body')
    sub_page
@endsection

@section('mainContent')
    </div>
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h1>Flat / Villas</h1>
            </div>
            @foreach ($flats as $flat)
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="2000">
                                        <img src="{{ asset($flat->image_1) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($flat->image_2) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($flat->image_3) }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="detail-box">
                                <h2>Location: {{ $flat->location }}</h2>
                                <h4><b>{{ $flat->rent }} BDT /Month</b></h4>
                                <p>
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <h5>Product Details</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Washroom:</b> {{ $flat->washroom }}&nbsp;&nbsp;</td>
                                        <td><b>Bed:</b> {{ $flat->bed }}&nbsp;&nbsp;</td>
                                        <td><b>Dimention:</b> {{ $flat->dimention }}m<sup>2</td>
                                    </tr>
                                    <tr>
                                        <td><b>Rooms:</b> {{ $flat->room }}</td>
                                        <td><b>AC:</b> {{ $flat->ac }}</td>
                                        <td><b>Electricity:</b> {{ $flat->electricity }}</td>
                                    </tr>
                                </table>
                                </p>
                                <p>
                                <table>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-info">Call:
                                                {{ $flat->phone }}</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info">Email: {{ $flat->email }}</button>
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
