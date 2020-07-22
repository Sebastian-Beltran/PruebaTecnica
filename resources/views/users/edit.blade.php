<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Editar usuario</title>
  </head>
  <body>
    <div class="container">
        <h1>Editar un nuevo usuario</h1>
    </div>
    <div class="container">
        <form method="post" action="{{ asset(url('/users/'.$user->id)) }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" id="last_name"  name="last_name" value="{{$user->last_name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Documento</label>
                <input type="number" class="form-control" id="document" name="document" value="{{$user->document}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" id="addres" name="addres" value="{{$user->addres}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
            </div>
            <button type="submit" name="action" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>