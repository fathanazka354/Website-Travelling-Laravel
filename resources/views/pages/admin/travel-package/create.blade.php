@extends('layouts.admin')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Packet Travel</h1>

    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" placeholder="title" value="{{ old('title') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="location" value="{{ old('location') }}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">Featured Events</label>
                    <input type="text" class="form-control" name="featured_event" placeholder="featured_event"
                        value="{{old('featured_event')}}">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input type="text" class="form-control" name="language" placeholder="language"
                        value="{{old('language')}}">
                </div>
                <div class="form-group">
                    <label for="food">Foods</label>
                    <input type="text" class="form-control" name="food" placeholder="food" value="{{old('food')}}">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure date</label>
                    <input type="date" class="form-control" name="departure_date" placeholder="departure_date"
                        value="{{old('departure_date')}}">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration" placeholder="duration"
                        value="{{old('duration')}}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" class="form-control" name="type" placeholder="type" value="{{old('type')}}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="price" value="{{old('price')}}">
                </div>
                <button class="btn btn-primary" type="submit">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>

























@endsection