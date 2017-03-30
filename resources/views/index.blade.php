@extends('layouts.app')


@section('content')

<div class="row">
  <div class="col-md-12">
     <div class="box">
       <div class="box-header with-border">
          <h3 class="box-title">Sistema de Ventas</h3>
          <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button> 
          <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
<div class="box-body">
   <div class="row">
     <div class="col-md-12">
        <div class="row">
           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h3>Listado de Organizaci&oacute;n 
                    <a href="organizacion/create">
                        <button class="btn btn-success">Nuevo</button>
                    </a> 
                    <a href="reporteorganizacion" target="_blank">
                        <button class="btn btn-info">Reporte</button>
                    </a>
                </h3>
        
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            @if ($organizacions->count())
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Direcci&oacute;n</th>
                    <th>Desde</th>
                    <th>Hasta</th>
                </thead>
                @foreach ($organizacions as $organizacion)
                <tr>
                    <td>{{ $organizacion->name }}</td>
                    <td>{{ $organizacion->address }}</td>
                    <td>{{ $organizacion->date_from }}</td>
                    <td>{{ $organizacion->date_to }}</td>
                    <td><a href="organizacion/{{ $organizacion->organization_id }}/edit"><button class="btn btn-info">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
    @else
        There are no organizacion
    @endif        
                 </div>
              </div>
            </div>      
          </div> 
       </div> 
    </div>
    </div>
  </div>
</div>
                            
                

@stop

