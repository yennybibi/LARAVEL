@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{ url('Clientes/'. $cliente->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
{{ method_field('PATCH') }}
@include('clientes.form',['modo'=>'Editar']);

</form>
</div>
@endsection    