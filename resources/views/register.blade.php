<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img class="img_login" src="{{ asset('images/logo.png') }}" alt="ITSEvent">
        </div>
        <div class="col-md-6">
          <div class="form_register_right">
            <form class="form_login_register" action="{{ route('registrationStore')}}" method="post">
              @csrf
              <h1 class="h1_register">Daftar</h1>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Kata sandi</label>
                <input type="password" class="form-control password" id="password" name="password" placeholder="Kata sandi">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Masukkan ulang kata sandi</label>
                <input type="password" class="form-control repassword" id="repassword" name="" placeholder="Masukkan ulang kata sandi">
              </div>
                <button type="submit" class="btn btn-danger btn-lg btn-block mt-4">Daftar</button>
                <h6 class="h6_login mt-4">Sudah punya akun?<a href="{{ route('login')}}" style="color: red"> Login sekarang!</a></h6>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.querySelector('.btn').onclick = function() {
        var password = document.querySelector('.password').value,
         confirmPassword = document.querySelector('.repassword').value;

        if (password != confirmPassword) {
          alert("Password tidak sesuai");
          return false;
        }
        return true;
      }
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    @include('sweetalert::alert')

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>