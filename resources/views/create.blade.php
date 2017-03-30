@extends('layouts.app')

@section('content')

  
<div class="row">
    <div class="col-md-12">
       <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Sistema de Venta</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>        
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
            </div>
                <!-- /.box-header -->
     <div class="box-body">
          <div class="row">
               <div class="col-md-12">
                                  <!--Contenido-->
        <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Organización</h3>
           </div>
         </div>
    
    <form method="POST" action="/organizacion/store" accept-charset="UTF-8">
{{ csrf_field() }}
    
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="name" required value="" class="form-control" placeholder="Nombre...">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" name="address" required value="" class="form-control" placeholder="Direccion...">
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="codigo">Desde</label>
                <input type="text" name="date_from" id="checkin" required value="" class="form-control" placeholder="Fecha desde"> 
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <label for="stock">Hasta</label>
                <input type="text" name="date_to" id="checkout" required value="" class="form-control" placeholder="Fecha hasta.">
            </div>
        </div>
        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-danger" href="/organizacion" >Cancelar</a>
            </div>
        </div>
    </div>
            
    </form>

                  <!--Fin Contenido-->
        </div>
      </div>                        
     </div>
   </div><!-- /.row -->
 </div><!-- /.box-body -->
</div><!-- /.box -->



@stop