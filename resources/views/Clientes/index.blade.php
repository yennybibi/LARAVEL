
<style>


    .table-responsive {
        overflow: auto;
        background-color: rgb(125, 131, 165);
        width: 1200px;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
        color: #212529;
    }

    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6;
    }

    .thead-dark {
        background-color: #343a40;
        color: #fff;
    }

    th,
    td {
        padding: 0.75rem;
        vertical-align: top;
    }

    .custom-delete-button {
    background-color: #4615b9;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
}

.enlace-estilizado {
    text-decoration: none;
    color: blue;
    /* Agrega más estilos aquí */
  }

  .custom-button {
  background-color: #337ab7;
  color: #fff;
  padding: 5px 10px;
  border-radius: 4px;
  border: none;
}

.custom-link {
  text-decoration: none;
  color: blue;
}


</style>


@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
    <div class="alert alert-success">
        {{ Session::get('mensaje') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif


<a href="{{ url('Clientes/') }}" class="btn btn-success">Registrar cliente</a>
    

<br><br>


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Correo electronico</th>
                <th>habeas Data</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Clientes as $cliente)
            <tr>
                <th>{{ $cliente->id }}</th>
                <th>{{ $cliente->nombre }}</th>
                <th>{{ $cliente->apellido }}</th>
                <th>{{ $cliente->cedula }}</th>
                <th>{{ $cliente->departamento }}</th>
                <th>{{ $cliente->ciudad }}</th>
                <th>{{ $cliente->correo_electronico }}</th>
                <td>{{ $cliente->habeas_data }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>

                    
                    <a href="{{ url('Clientes/' . $cliente->id . '/edit') }}" style="text-decoration: none; background-color: #337ab7; color: #fff; padding: 5px 10px; border-radius: 4px;">Editar</a>

                  


                    
            <td>

                <form action="{{ url('Clientes/'. $cliente->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
    
                    <button type="submit" onclick="return confirm('¿Estás seguro de borrar?')" class="btn btn-danger custom-delete-button">
                        Borrar
                    </button>
                </form>
            </tr>
        </td>
        @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection