<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Proyecto prueba CRUD</title>
  </head>
  <body>
    <div class="container">
        <h1>Usuarios</h1>
    </div>
    @if (session()->has('msjc'))
        <div class="container">
        <div class="alert alert-success" role="alert">
            Usuario creado correctamente
        </div>
    </div>
    @endif
    @if (session()->has('msje'))
    <div class="container">
        <div class="alert alert-primary" role="alert">
            Usuario editado correctamente
        </div>
    </div>
    @endif
    @if (session()->has('msjd'))
    <div class="container">
    <div class="alert alert-danger" role="alert">
        Usuario eliminado correctamente
    </div>
    </div>
    @endif
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Documento</th>
                <th scope="col">Email</th>
                <th scope="col">Dirección</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acción</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)   
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>
                            <a href="{{ url('/users/'.$user->id) }}">
                                {{ $user->first_name }}
                            </a>
                        </td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->document }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ substr($user->addres,0,10) }}...</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            <div class="row justify-content-around">
                                <div class="col-4">
                                <a href="{{ asset(url('/users/'.$user->id.'/edit')) }}">
                                    <button type="button" class="btn btn-success">Editar</button>
                                </a>
                                </div>
                                <div class="col-4">
                                <form method="post" action="{{ asset(url('/users/'.$user->id)) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este usuario?')">Eliminar</button>
                                </form>
                                </div>
                            </div>
                            {{-- <a title="Edit" href="{{ asset(url('/users/'.$user->id.'/edit')) }}"><i class="material-icons">mode_edit &nbsp;</i></a> --}}
                            {{-- <a title="Delete" id="delete" class="modal-trigger" href="#modalds" onclick="borrar({{$user}})"><i class="material-icons">delete_forever</i></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <div class="mx-auto" style="width: 200px;">
            {{ $users->links() }}
          </div>
          <div class="row justify-content-between">
            <div class="col-4"></div>
              <div class="col-4">
                  <a href="{{route('users.create')}}">
                        <button type="button" class="btn btn-lg btn-primary">Crear un usuario</button>
                    </a>
              </div>
          </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        window.setTimeout(function(){
          $('.alert').fadeTo(500,0).slideUp(300, function() {
            $(this).remove();
          });
        },3000);
      </script>
  </body>
</html>