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
      @if ($evt->event_status == 'yes')
      <div class="card mb-3" style="max-width: 540px; margin-left:250px; border:none;">
        <div class="row">
          <div class="col-md-7">
            <img src="{{ asset('img/'.$evt->event_image)}}" height="400px" width="285px" alt="">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <p class="card-text">{{ $evt->event_desc}}</p>
            </div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
</div>
@endsection