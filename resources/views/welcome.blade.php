<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .floating-btn {
      width: 70px;
      height: 70px;
      background: #32CD32;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      border-radius: 50%;
      color: #ffffff;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.25);
      position: fixed;
      right: 40px;
      bottom: 60px;


    }
    #btn-floa {
      font-size: 40px;
    }
</style>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Prueba tecnica</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
            <div class="container">
                <h1>Usuarios</h1>
            </div>
            <div id="example">

            </div>
                
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>
