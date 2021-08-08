<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form Request</title>

       
    </head>
    <body class="antialiased">
        <div class="links">
            <form action="{{ route('posts.store')}}" method="POST">
            @csrf
            <input type="text" name="title">
            <button type="submit" value="enviar">Enviar formulario</button>
            </form>
        </div>
    </body>
</html>
