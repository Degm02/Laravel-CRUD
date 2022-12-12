Mostrar las listas de empleados :D

@extends('layouts.app')
@section('content')
<div class="container">



@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
</div>  
@endif

  


<a href="{{ url('empleado/create') }}" class="btn btn-success"> Registrar nuevo empleado</a>
<br>
<table class="table table-lighter">
    <thead class="thead-lighter">
        <tr>
            <th><#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->ApellidoPaterno}}</td>
            <td>{{ $empleado->ApellidoMaterno}}</td>
            <td>{{ $empleado->Email}}</td>
            <td>
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning" > Editar </a>

                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">
                
                </form>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection