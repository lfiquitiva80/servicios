@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')


 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        @include('sweet::alert')


<a href="{{ route('home-principal') }}" class="btn btn-primary"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Regresar</a>
<br>


  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Reportes en Excel Generales</h3>
    </div>
    <div class="panel-body">






<a    href="{{url('clientesGenerales')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Clientes</a><br>
<a    href="{{url('escoltasGenerales')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Escoltas</a><br>
<a    href="{{url('vehiculosGenerales')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Vehículos</a><br>
<a   href="{{url('rentadorasGenerales')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Rentadoras</a><br>
<a   href="{{url('excelcontrolhorario')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Control de Horario</a><br>

<a   href="{{url('Exportproveedor')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Proveedores</a><br>
<a   href="{{url('Exportpuc')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Puc</a><br>
<a   href="{{url('Exportcentrodecostos')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Centro de costos</a><br>
<a   href="{{url('Exportot')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel OT</a><br>
<a   href="{{url('Exportlineadenegocio')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Linea de negocio</a><br>
<a   href="{{url('Exportanticipo')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Anticipo</a><br>
<a   href="{{url('exportprovision')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Provision</a><br>

<a   href="{{url('Exportbarranca')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Tarifa Barranca</a><br>
<a   href="{{url('Exportbogota')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Tarifa Bogotá</a><br>
<a   href="{{url('Exportprefacturaoxy')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Prefactura OXY</a><br>

<a   href="{{url('Exporttarifa')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Tarifa Estandar</a><br>
<a   href="{{url('Exporthoraadicional')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel  Horas Adicionales</a><br>
<a   href="{{url('Exporttipoddetarifa')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel  Tipo De Tarifa</a><br>
<a   href="{{url('Exporttipoddetarifa')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel  Propuesta Económica</a><br>

<a   href="{{url('Exportfs')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Fs</a><br>
<a   href="{{url('Exportcodigociudad')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Código Ciudad</a><br>
<a   href="{{url('Exportprefacturacliente')}}"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Reporte en Excel Prefactura Otros Clientes</a><br>

</div>
</div>





<div class="btn-toolbar">
          <div class="btn-group"></div>
          <div class="btn-group"></div>
          <div class="btn-group"></div>
        </div>

<?php  $cliente = App\cliente::orderBy('Nombre','asc')->pluck('Nombre','id'); ?> 
<?php  $estadoservicio = App\estadoservicio::pluck('estadoservicio','id'); ?>

 <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Reportes Detallados</h3>
                  </div>


    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Reporte por Cliente y Estado</h3>
      </div>
      <div class="panel-body">
        {!! Form::open(['route' => 'consultacliente', 'method'=>'GET', 'Class'=>'navbar-form navbar-left']) !!}


       {!! Form::select('cliente',$cliente, null, ['class' => 'form-control','name'=>'cliente','placeholder' => 'Seleccione el Cliente','required']) !!}


        {!! Form::select('estadoservicio',$estadoservicio, null, ['class' => 'form-control','placeholder' => 'Seleccione el Estado']) !!}

        <button type="submit" class="btn btn-success"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar</button>



        {!! Form::close() !!}

      </div>
    </div>

                  <div class="panel-body">
                    {!! Form::open(['route' => 'rango', 'method'=>'get','id'=>'reg_form10' ]) !!}

                    <div class="container">
                   <div class="row">
                   <div class='col-xs-4'>
                   <div class="form-group">
                     <label for="id">fecha inicio  </label>
                     
                         <input type='text'  value="<?php echo date("Y-m-d");?>" class="form-control datepicker-me2"  name="fecha1"  id="fecha1" />

                   
                   </div>
                   </div>

                   <div class='col-xs-4'>
                   <div class="form-group">
                     <label for="id">fecha finalizacion  </label>
                     <div class='input-group'  >
                         <input type='text'  value="<?php echo date("Y-m-d");?>"  class="form-control" name="fecha2"     id="fecha2"/>

                     </div>
                   </div>
                   </div>
                    &nbsp; <br>
                   <div class="col-xs-4">
                     <div class="form-group">
                       <button type="submit" class="btn btn-primary" ><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar</button>
                     </div>
                   </div>

  <a href="{{ route('export.file',['type'=>'xlsx']) }}" title="Bajar excel en versión superior al 2016 " class="btn btn-danger"> <i class="fa fa-file-excel-o" aria-hidden="true"></i> Todas las Ordenes de Servicio</a>

                    </div>
                  </div>

                    <!-- <div class="col-xs-4">
                      <div class="form-group">
                        <label for="id">fecha inicio  </label>
                        <input type="date"  class="form-control" name="fecha1" id="fecha" >
                      </div>
                    </div> -->
                    <!-- <div class="col-xs-4">
                      <div class="form-group">
                        <label for="id"> fecha finalizacion  </label>
                        <input type="date"  class="form-control " name="fecha2" >
                      </div>
                    </div> -->
                    <br>


                 </div>
               </div>




               {!! Form::close() !!}


               <div class="panel panel-primary">
                 <div class="panel-heading">
                   <h3 class="panel-title">Reporte Rango de Fechas Control de Horario</h3>
                 </div>
                 <div class="panel-body">
                      {!! Form::open(['route' => 'controlhorario', 'method'=>'GET']) !!}
<div class="container">
               <div class="row">
               <div class='col-xs-4'>
               <div class="form-group">
                 <label for="id">Fecha de Inicio  </label>
                 
                     <input type='text'  value="<?php echo date("Y-m-d");?>" class="form-control"  name="fecha3"  id ="fecha3"/>

               
               </div>
               </div>

               <div class='col-xs-4'>
               <div class="form-group">
                 <label for="id">Fecha de Finalización  </label>
                 <div class='input-group'  >
                     <input type='text'  value="<?php echo date("Y-m-d");?>"  class="form-control" name="fecha4" id="fecha4"/>

                 </div>
               </div>
               </div>
                &nbsp; <br>
               <div class="col-xs-4">
                 <div class="form-group">
                   <button type="submit" class="btn btn-primary" ><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar</button>
                 </div>
               </div>


                </div>
              </div>

                <br>


           
{!! Form::close() !!}
                 </div>
               </div>

<!--                <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Reporte Prefactura Otros Clientes</h3>
                </div>

               
               <div class="panel-body">
                

                <div class="container">
               <div class="row">
               <div class='col-xs-4'>
               <div class="form-group">
                 <label for="id">Fecha de Inicio  </label>
                 
                     <input type='text'  value="<?php echo date("Y-m-d");?>" class="form-control"  name="fecha3"  id ="fecha3"/>

               
               </div>
               </div>

               <div class='col-xs-4'>
               <div class="form-group">
                 <label for="id">Fecha de Finalización  </label>
                 <div class='input-group'  >
                     <input type='text'  value="<?php echo date("Y-m-d");?>"  class="form-control" name="fecha4" id="fecha4"/>

                 </div>
               </div>
               </div>
                &nbsp; <br>
               <div class="col-xs-4">
                 <div class="form-group">
                   <button type="submit" class="btn btn-primary" ><i class="fa fa-file-excel-o" aria-hidden="true"></i> Descargar</button>
                 </div>
               </div>


                </div>
              </div>

                <br>


             </div>
           </div> -->
           {!! Form::close() !!}
                 </div>



                </div>


                
             
                



@endsection
