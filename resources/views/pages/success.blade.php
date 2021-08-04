@extends('layouts.success')
@section('title', 'success')

@section("content")
<div class="container">
    <div class="success-content text-center mt-5 d-flex flex-column justify-content-center align-items-center">
        <img src="{{url('frontend/images/Mail@2x.jpg')}}" alt="">
        <h2>Yay! Success</h2>
        <p>We've sent your email for trip <br>
            instruction please read it as well</p>
        <a href="{{route('home')}}" class="btn btn-back-to-home mt-3 px-5">
            Back to Home
        </a>
    </div>
</div>
@endsection
