@extends('homeTemplate')
@section('title')
    Bed Space
@endsection
@section('body')
    sub_page
@endsection

@section('mainContent')
    </div>
    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h1>Bed Space</h1>
            </div>
            @foreach ($bedSpaces as $bedSpace)
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="img-box">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="2000">
                                        <img src="{{ asset($bedSpace->image_1) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($bedSpace->image_2) }}" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item" data-interval="2000">
                                        <img src="{{ asset($bedSpace->image_3) }}" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                {{-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="box ">
                            <div class="detail-box">
                                <h2>{{ $bedSpace->title }}</h2>
                                <h4><b>{{ $bedSpace->rent }} BDT /Month</b></h4>
                                <h4>Location: {{ $bedSpace->location }}</h4>
                                <p>
                                <table>
                                    <tr>
                                        <td colspan="2">
                                            <h5>Product Details</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Dimention:</b> {{ $bedSpace->dimention }}m&nbsp;&nbsp;&nbsp;</td>
                                        <td><b>Pillows:</b> {{ $bedSpace->pillows }}&nbsp;&nbsp;&nbsp;</td>
                                        <td><b>Bed Sheet:</b> {{ $bedSpace->bed_sheet }}</td>
                                    </tr>
                                </table>
                                </p>
                                <p>
                                <table>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-info">Call:
                                                {{ $bedSpace->phone }}</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info">Email:
                                                {{ $bedSpace->email }}</button>
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
