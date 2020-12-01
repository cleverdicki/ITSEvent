@extends('layout.main')

@section('title', 'Add Event')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="h1_event mt-2">Submit Event</h1>
        </div>
        <div class="col-md-12">
            <div class="row" style="position: relative;">
                <div class="col-md-6" style="z-index: 1;">
                    <div class="file_upload_left">
                        <form>
                            <img src="{{ asset('images/whiteLogo.png') }}" alt="ITSEvent" class="img_add">
                            <div class="col-md-11">
                                <div class="form-group form_add_left">
                                    <label for="exampleFormControlFile1">Example file input</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
                <div class="col-md-6" style="z-index: 0;">
                    <div class="file_upload_right">
                        <form>
                            <div class="form_add_right">
                                <div class="col-md-11">
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control" id="title_event" name="title_event" placeholder="*masukkan nama event">
                                    </div>
                                    <div class="form-group form_add_right_static">
                                        <input type="text" readonly class="form-control-plaintext" value="Deskripsi Event">
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <textarea class="form-control" id="description_event" name="description_event" rows="4" placeholder="*masukkan deskripsi event"></textarea>
                                    </div>
                                    <div class="form-group form_add_right_static">
                                        <input type="text" readonly class="form-control-plaintext" value="Tanggal Event">
                                    </div>
                                    <input type="text" id="date_event" name="date_event" data-format="DD-MM-YYYY" data-template="D MMM YYYY" name="date" value="01-01-2000" style="display: none;">
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
                                    <div class="form-group form_add_right_static">
                                        <input type="text" readonly class="form-control-plaintext" value="Harga Tiket Masuk">
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control" id="price_event" name="price_event" placeholder="*masukkan harga event">
                                    </div>
                                    <div class="form-group form_add_right_static">
                                        <input type="text" readonly class="form-control-plaintext" value="Diselenggarakan oleh">
                                    </div>
                                    <div class="form-group form_add_right_input">
                                        <input type="text" class="form-control" id="organizer_event" name="organizer_event" placeholder="*masukkan penyelenggara event">
                                    </div>
                                    <div class="form-group form_add_right_link">
                                        <input type="text" class="form-control" id="link_event" name="link_event" placeholder="*link untuk membeli tiket">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="btn_add btn btn-danger">Kirim</button>
                </div>
                <a href="#" class="a_add">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection