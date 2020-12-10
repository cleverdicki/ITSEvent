@extends('layouts.main')

@section('title', 'Add Event ~ ITSEvent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1_event mt-2">Submit Event</h1>
        </div>
        <form action="{{ route('storeEvent')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="row" style="position: relative;">
                    <div class="col-md-6" style="z-index: 1;">
                        <div class="file_upload_left">
                            <img src="{{ asset('images/whiteLogo.png') }}" alt="ITSEvent" class="img_add">
                            <div class="col-md-11">
                                <div class="form-group form_add_left">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" class="form-control-file @error('event_image') is-invalid @enderror" id="event_photo" name="event_image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style="z-index: 0;">
                        <div class="file_upload_right">
                            <div class="form_add_right">
                                <div class="col-md-11">
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="title_event" name="event_name" placeholder="*masukkan nama event" value="{{ old('event_name') }}">
                                        @error('event_name') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    </div>
                                    <div class="p_createEvent mt-3">
                                        <p class="card-text titleCreateEvent">Deskripsi Event</p>
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <textarea class="form-control" id="description_event @error('event_desc') is-invalid @enderror" name="event_desc" rows="4" placeholder="*masukkan deskripsi event" value="{{ old('event_desc') }}"></textarea>
                                        @error('event_desc') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    </div>
                                    <div class="p_createEvent mt-3">
                                        <p class="card-text titleCreateEvent">Tanggal Event</p>
                                    </div>
                                    <input type="text" id="event_date" name="event_date" data-format="DD-MM-YYYY" data-template="MMM YYYY" value="01-01-2000" style="display: none;">
                                    <span class="combodate" style="display: inline">
                                        <select class="day " style="width: auto;">
                                            <option value=""></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select class="month" style="width: auto;">
                                            <option value=""></option>
                                            <option value="0">Januari</option>
                                            <option value="1">Februari</option>
                                            <option value="2">Maret</option>
                                            <option value="3">April</option>
                                            <option value="4">Mei</option>
                                            <option value="5">Juni</option>
                                            <option value="6">Juli</option>
                                            <option value="7">Agustus</option>
                                            <option value="8">September</option>
                                            <option value="9">Oktober</option>
                                            <option value="10">November</option>
                                            <option value="11">Desember</option>
                                        </select>
                                        <select class="year" style="width: auto;">
                                            <option value=""></option>
                                            <option value="2015">2021</option>
                                            <option value="2014">2022</option>
                                            <option value="2013">2023</option>
                                            <option value="2012">2024</option>
                                            <option value="2011">2025</option>
                                            <option value="2010">2026</option>
                                            <option value="2009">2027</option>
                                            <option value="2008">2028</option>
                                            <option value="2007">2029</option>
                                            <option value="2006">2030</option>
                                        </select>
                                    </span>
                                    <script>
                                        $(function(){
                                            $('#date').combodate();    
                                        });
                                    </script>
                                    <div class="p_createEvent mt-3">
                                        <p class="card-text titleCreateEvent">Harga Tiket Masuk</p>
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control @error('event_price') is-invalid @enderror" id="event_price" name="event_price" placeholder="*masukkan harga event" value="{{ old('event_price') }}">
                                        @error('event_price') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    </div>
                                    <div class="p_createEvent mt-3">
                                        <p class="card-text titleCreateEvent">Penyelenggara</p>
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control @error('event_organizer') is-invalid @enderror" id="organizer_event" name="event_organizer" placeholder="*masukkan penyelenggara event" value="{{ old('event_organizer') }}">
                                        @error('event_organizer') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                    </div>
                                    <div class="form-group form_add_right_link">
                                        <input type="text" class="form-control @error('event_link') is-invalid @enderror" id="event_link" name="event_link" placeholder="*link untuk membeli tiket">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <button type="submit" class="btn_add btn btn-danger">Kirim</button>
            <a href="{{ route('dashboard')}}" class="a_add">Kembali</a>
        </form>
    </div>
</div>
@endsection