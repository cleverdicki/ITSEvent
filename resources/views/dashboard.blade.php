@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron mt-3">
                <div class="row">
                    <div class="col-md 6 img_jumbotron">
                        <img src="{{ asset('images/logo.png') }}" class="img_jumbotron" alt="ITSEvent">
                    </div>
                    <div class="col-md-6 desc_jumbotron">
                        <p class="lead">Web yang menyediakan jadwal event - event yang ada di ITS.</p>
                        <a href="{{ route('submitEvent')}}">Submit Event</a>
                    </div>
                </div>
            </div>
            @foreach ( $event as $evt)
            @endforeach
        </div>
    </div>
</div>
@endsection