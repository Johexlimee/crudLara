@extends('dashboard.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="titulo" id="titulo">

        <label for="">Año</label>
        <input type="text" name="año" id="año">

        <label for="">Descripcion</label>
        <textarea name="descripcion" id="desc" cols="30" rows="4"></textarea>

        <label for="">Autor</label>
        <input type="text" name="autor" id="autor">

        <label for="">Prestado</label>
        <select name="prestado" id="prestado">
            <option value="si" selected>Si</option>
            <option value="no">No</option>
        </select>


        <button type="submit">Enviar</button>
        
        <select name="libros" id="libros">
            @foreach ($ejemplo as $titulo => $id)
                <option value="{{ $id }}">{{$titulo}}</option>
            @endforeach
        </select>
    </form>

</body>
</html>
@endsection