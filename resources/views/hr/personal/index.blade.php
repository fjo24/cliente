@extends('hr.template.main')

@section('title', 'Listado de empleados')

@section('content')
<a class="btn btn-danger" href="{{ route('hr.personal.create') }}">
    Nuevo
</a>
<a class="btn btn-info" href="{{ route('hr.personal.create') }}">
    Registro
</a>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <th>
            NOMBRE COMPLETO
        </th>
        <th>
            FECHA CESE
        </th>
        <th>
            SALARIO
        </th>
        <th>
            TOTAL VENTAS
        </th>
        <th>
            OPCIONES
        </th>
    </thead>
</table>
@endsection
