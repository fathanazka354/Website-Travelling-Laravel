@extends('layouts.app')
@section('title','Detail Package')

@section('content')
<main>
    <!-- Header -->
    <section class="details-header">
        <ul class="list-unstyled">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>/</li>
            <li><strong>Detail Packet</strong></li>
        </ul>
    </section>

    <!-- content -->
    <div class="container">
        <section class="details-package-content">
            <div class="row">
                <div class="col-md-8 col-12 detail-left">
                    <h1>UBUD , BALI</h1>
                    <p>Republic of Indonesia</p>

                    <div class="gallery">
                        <div class="xzoom-container">
                            <img src="{{url('frontend/images/detail package/Mask Group 10@2x.jpg')}}" class="xzoom"
                                id="xzoom-default"
                                xoriginal="{{url('frontend/images/detail package/Mask Group 10@2x.jpg')}}" width="700px"
                                alt="">
                        </div>
                        <div class="xzoom-thumbs">
                            <a href="{{url('frontend/images/detail package/Mask Group 10@2x.jpg')}}">
                                <img src="{{url('frontend/images/detail package/Mask Group 10@2x.jpg')}}"
                                    class="xzoom-gallery" width="128"
                                    xpreview="{{url('frontend/images/detail package/Mask Group 10@2x.jpg')}}">
                            </a>
                            <a href="{{url('frontend/images/detail package/Mask Group 11@2x.jpg')}}">
                                <img src="{{url('frontend/images/detail package/Mask Group 11@2x.jpg')}}"
                                    class="xzoom-gallery" width="128"
                                    xpreview="{{url('frontend/images/detail package/Mask Group 11@2x.jpg')}}">
                            </a>
                            <a href="{{url('frontend/images/detail package/Mask Group 12@2x.jpg')}}">
                                <img src="{{url('frontend/images/detail package/Mask Group 12@2x.jpg')}}"
                                    class="xzoom-gallery" width="128"
                                    xpreview="{{url('frontend/images/detail package/Mask Group 12@2x.jpg')}}">
                            </a>
                            <a href="{{url('frontend/images/detail package/Mask Group 13@2x.jpg')}}">
                                <img src="{{url('frontend/images/detail package/Mask Group 13@2x.jpg')}}"
                                    class="xzoom-gallery" width="128"
                                    xpreview="{{url('frontend/images/detail package/Mask Group 13@2x.jpg')}}">
                            </a>
                            <a href="{{url('frontend/images/detail package/Mask Group 14@2x.jpg')}}">
                                <img src="{{url('frontend/images/detail package/Mask Group 14@2x.jpg')}}"
                                    class="xzoom-gallery" width="128"
                                    xpreview="{{url('frontend/images/detail package/Mask Group 14@2x.jpg')}}">
                            </a>


                        </div>
                    </div>
                    <h2>Tentang Wisata</h2>
                    <p>Ubud is one of those places where a holiday of a few days can easily turn into a stay of
                        weeks, months or even years. The size of the town's expat community attests to this, and so
                        do the many novels and films that have been set here, creative responses to the seductive
                        nature of this most cultured of all Balinese towns. </p>
                    <p>This is a place where traditional Balinese culture imbues every waking moment, where
                        colourful offerings adorn the streets and where the hypnotic strains of gamelan are an
                        ever-present soundtrack to everyday life. It's also somewhere that is relentlessly on trend
                        – a showcase of sustainable design, mindfulness, culinary inventiveness and the very best
                        that global tourism has to offer. Come here for relaxation, for rejuvenation and to have
                        what may well be the most magical holiday of your life.

                        Select points of interest to plot on map by type</p>


                    <div class="features row">
                        <div class="col-md-4">
                            <img src="{{url('frontend/images/logo tiket@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Featured Event</h3>
                                <p>Tari Kecak</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/logo language@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Language</h3>
                                <p>Bahasa Indonesia</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/Logo FOod@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Foods</h3>
                                <p>Local Foods</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card card-detail card-right">
                        <h2>Members are going</h2>
                        <div class="members">
                            <img src="{{url('frontend/images/member/Mask Group 15@2x.jpg')}}" width="45px" alt=""
                                class="mr-1 img-member">
                            <img src="{{url('frontend/images/member/Mask Group 16@2x.jpg')}}" width="45px" alt=""
                                class="mr-1 img-member">
                            <img src="{{url('frontend/images/member/Mask Group 17@2x.jpg')}}" width="45px" alt=""
                                class="mr-1 img-member">
                            <img src="{{url('frontend/images/member/Mask Group 19@2x.jpg')}}" width="45px" alt=""
                                class="mr-1 img-member">
                            <img src="{{url('frontend/images/member/Group 9@2x.jpg')}}" width="45px" alt=""
                                class="mr-1 img-member">
                        </div>
                        <hr>
                        <h2>Trip to Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">
                                    30 July 2021
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    2D 1N
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    Open Trip
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    $69,00 / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Join Now
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </div>

</main>
@endsection









@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/xZoom-master/dist/xzoom.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xZoom-master/dist/xzoom.min.js')}}"></script>
<script>
$(document).ready(function() {
    // alert("OK")
    $('.xzoom, .xzoom-gallery').xzoom({
        zoomWidth: 500,
        title: false,
        tint: '#333',
        Xoffset: 15
    })
})
</script>
@endpush