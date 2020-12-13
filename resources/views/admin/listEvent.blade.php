@extends('layouts.main')

@section('title', 'List Event ~ ITSEvent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mt-3">List Event</h1>
            <ul class="list-group mt-3">
                @foreach ( $event as $evt )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $evt->event_name }}
                  <div class="badge">
                      <a href="{{ url('detailEvent',$evt->id)}}" class="badge badge-info">Detail</a>
                      <a href="{{ url('displayEvent',$evt->id)}}" class="badge badge-success">Display</a>
                      <a href="{{ url('noDisplayEvent',$evt->id)}}" class="badge badge-warning">Don't</a>
                      <a href="{{ url('deleteEvent',$evt->id)}}" class="badge badge-danger">Delete</a>
                  </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection