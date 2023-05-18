@extends('layouts.app')

@section('content')
<div class="container">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <h2>Formulario de Registro</h2>
       <form action="{{ url('/Clientes') }}" method="POST">
            @csrf
            @include('clientes.form',['modo'=>'Crear']);
        
        </form>
    </div>
    
</div>
@endsection
</body>
</html>









