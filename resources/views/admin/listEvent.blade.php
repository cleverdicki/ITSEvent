@extends('layouts.main')

@section('title', 'List Event ~ ITSEvent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                @foreach ( $event as $evt )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $evt->event_name }}
                    <a href="{{ url('/detailEvent/'.$evt->id)}}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection