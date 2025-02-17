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
            <p class="p_jumbotron">Web yang menyediakan jadwal event - event yang ada di ITS.</p>
            <a href="{{ route('submitEvent')}}">Submit Event</a>
          </div>
        </div>
      </div>
      @foreach ( $event as $evt)
      @if ($evt->event_status == 'yes')
      <div class="card mb-3 mt-3 shadow card_event">
        <p class="p_event">{{ $evt->event_date}}</p>
        <div class="row">
          <div class="col-md-4">
            <img src="{{ asset('img/'.$evt->event_image)}}" class="img_event_dashboard" height="300px" width="200px" alt="">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text">{{ $evt->event_desc}}</p>
              <a href="{{ url('detailEvent',$evt->id)}}"><button class="btn btn-primary btn_detail">Detail Event</button></a>
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