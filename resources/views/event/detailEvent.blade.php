@extends('layouts.main')

@section('title', 'Detail Event ~ ITSEvent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mb-3">
            <h1 class="h1_event">Detail Event</h1>
        </div>
        <div class="row" style="position: relative;">
            <div class="col-md-6" style="z-index: 1;">
                <div class="file_detail_left">
                    <img src="{{ asset('images/whiteLogo.png') }}" alt="ITSEvent" class="img_detail">
                    <div class="col-md-11">    
                        <img src="{{ asset('img/'.$event->event_image)}}" class="img_detail_db" height="425px" width="285px" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="z-index: 0;">
                <div class="file_detail_right">
                    <div class="form_detail_right">
                        <div class="col-md-11">
                            <h2>{{ $event->event_name }}</h2>
                            <div class="p_createEvent mt-3">
                                <p class="card-text titleCreateEvent">Deskripsi Event</p>
                            </div>
                            <p class="card-text fillEvent">{{ $event->event_desc}}</p>
                            
                            <div class="p_createEvent mt-3">
                                <p class="card-text titleCreateEvent">Tanggal Event</p>
                            </div>
                            <p class="card-text fillEvent">{{ $event->event_date}}</p>

                            <div class="p_createEvent mt-3">
                                <p class="card-text titleCreateEvent">Harga Tiket Masuk</p>
                            </div>
                            <p class="card-text fillEvent">{{ $event->event_price}}</p>
                            
                            <div class="p_createEvent mt-3">
                                <p class="card-text titleCreateEvent">Penyelenggara</p>
                            </div>
                            <p class="card-text fillEvent">{{ $event->event_organizer}}</p>
                            <div class="form-group form_detail_right_link">
                                <a href="#" class="card-text titleCreateEvent"><button class="btn">{{ $event->event_link}}</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('dashboard')}}" class="a_add">Kembali</a>
    </div>
</div>
@endsection