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
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="col-md-8 col-12 detail-left">
                    <h1>{{$item->title}}</h1>
                    <p>{{$item->location}}</p>

                    @if($item->galleries->count())
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{Storage::url($item->galleries->first()->image)}}" class="xzoom"
                                    id="xzoom-default"
                                    xoriginal="{{Storage::url($item->galleries->first()->image)}}" width="700px"
                                    alt="">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{Storage::url($item->galleries->first()->image)}}">
                                    <img src="{{Storage::url($item->galleries->first()->image)}}"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{Storage::url($item->galleries->first()->image)}}">
                                </a>
                                @endforeach

                            </div>
                        </div>
                    @endif

                    <h2>Tentang Wisata</h2>
                    <p>{!! $item->about !!}</p>


                    <div class="features row">
                        <div class="col-md-4">
                            <img src="{{url('frontend/images/logo tiket@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Featured Event</h3>
                                <p>{{$item->featured_event}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/logo language@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Language</h3>
                                <p>{{$item->language}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 border-left">
                            <img src="{{url('frontend/images/Logo FOod@2x.jpg')}}" alt="">
                            <div class="description">
                                <h3>Foods</h3>
                                <p>{{$item->food}}</p>
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
                                    {{\Carbon\Carbon::create($item->date_of_departure)->format('F n, Y')}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">
                                    {{$item->duration}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">
                                    {{$item->type}}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">
                                    ${{$item->price}},00 / person
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        @auth
                            <form action="{{route('checkout_process', $item->id)}}" method="POST">
                                @csrf
                                <button class="btn btn-block btn-join-now mt-3 py-3">
                                    Join Now
                                </button>
                            </form>
                        @endauth
                        @guest
                        <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            Login or Register to Join
                        </a>
                        @endguest

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
