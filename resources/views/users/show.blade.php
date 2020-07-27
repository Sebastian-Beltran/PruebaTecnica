<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Usuario</title>
  </head>
  <body>
    <div id="user">
      
    </div>
    {{-- <div class="container" style="height: 4rem;">
    </div>
      <div class="container">
        <h2>Usuario #{{ $user->id }}</h2>
      </div>
      <div class="container">
          
          <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h3 class="card-title">Informacion del usuario</h3>
                <h5><b>Nombre:</b> {{$user->first_name}}</h5>
                <h5><b>Apellido:</b> {{$user->last_name}}</h5>
                <h5><b>Número de documento:</b> {{$user->document}}</h5>
                <h5><b>Email:</b> {{$user->email}}</h5>
                <h5><b>Dirección:</b> {{$user->addres}}</h5>
                <h5><b>Telefono:</b> {{$user->phone}}</h5>
              </div>
            </div>
          </div> --}}
          {{-- <a href="{{ asset(url('/users/'.$user->id.'/edit')) }}">
              <button type="button" class="btn btn-primary">Editar</button>
          </a> --}}
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/app.js"></script>

  </body>
</html>