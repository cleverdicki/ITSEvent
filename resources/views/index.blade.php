<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>ITSEvent</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index')}}">
                <img src="{{ asset('images/logo.png') }}" width="80px" height="10%" alt="ITSEvent" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link mr-3" href="{{ route('index')}}">Home</a>
                    <a class="nav-link mr-3" href="{{ route('login')}}">Login</a>
                    <a class="nav-link mr-3" href="{{ route('registration')}}">Register</a>
                </div>
            </div>
        </div>
    </nav>
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
            <div class="card mb-3 mt-3" style="max-width: 700px; margin-left:250px; border:none;">
              <p style="font-weight: bold;">{{ $evt->event_date}}</p>
              <div class="row">
                <div class="col-md-4">
                  <img src="{{ asset('img/'.$evt->event_image)}}" height="300px" width="200px" alt="">
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
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Narahubung: LINE: itsevent</h6>
                                <h6 class="h6_footer_left">Instagram: itsevent</h6>
                                <h6 class="h6_footer_left">Email: itsevent@gmail.com</h6>
                            </div>
                            <div class="col-md-6">
                                <h6>Disponsori oleh: BEM ITS</h6>
                                <h6 class="h6_footer_right">Ditmawa ITS</h6>
                                <h6 class="h6_footer_right">Kelompok A08 MPPL</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>