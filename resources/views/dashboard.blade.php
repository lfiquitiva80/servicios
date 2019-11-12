@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection



@section('main-content')

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Latest compiled and minified JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$ordenesdeservicios->count()}}</h3>

              <p>Servicios Adicionales</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">Más Información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php $número_formato_inglés = number_format($porcentaje,2); echo $número_formato_inglés;?><sup style="font-size: 20px">%</sup></h3>
              <p>% Servicios adicionales Completados. </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$usuarios->count()}}</h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Más Información<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$escoltas->count()}}</h3>

              <p>Escoltas Disponibles</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">Más Información <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> Gráfico circular</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                {!! $chartjs->render() !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"> Porcentajes de los  estado de servicios</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
               <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">RECIBIDO</span>
              <span class="info-box-number">{{$Recibido}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$datos1}}%"></div>
              </div>
              <span class="progress-description">
                    {{$datos1}}%
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="ion ion-ios-apps"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Propuesta economica</span>
              <span class="info-box-number">{{$Propuesta}}</span>

              <div class="progress">
                <div class="progress-bar" style="width: {{$datos2}}%"></div>
              </div>
              <span class="progress-description">
                    {{$datos2}}%
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="ion ion-ios-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Planeado</span>
              <span class="info-box-number">{{$Planeado}}</span>

              <div class="progress">
                <div class="progress-bar" style=" width:{{$datos3}}%"></div>
              </div>
              <span class="progress-description">
                    {{$datos3}}%
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
       <!-- /.info-box-content -->
          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="ion ion-ios-build"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Informado al Cliente</span>
              <span class="info-box-number">{{$Informado}}</span>

              <div class="progress">
                <div class="progress-bar" style="width:{{$datos4}}%"></div>
              </div>
              <span class="progress-description">
                    {{$datos4}}%
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box-content -->
             <div class="info-box bg-orange">
               <span class="info-box-icon"><i class="ion ion-ios-checkmark-circle"></i></span>

               <div class="info-box-content">
                 <span class="info-box-text">En ejecucion</span>
                 <span class="info-box-number">{{$Ejecucion}}</span>

                 <div class="progress">
                   <div class="progress-bar" style=" width:{{$datos5}}%"></div>
                 </div>
                 <span class="progress-description">
                       {{$datos5}}%
                     </span>
               </div>
               </div>
               <!-- /.info-box-content -->

               <!-- /.info-box-content -->
                  <div class="info-box bg-teal">
                    <span class="info-box-icon"><i class="ion ion-ios-cloud"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Ejecutado completo</span>
                      <span class="info-box-number">{{$Ejecutado}}</span>

                      <div class="progress">
                        <div class="progress-bar" style=" width:{{$datos6}}%"></div>
                      </div>
                      <span class="progress-description">
                            {{$datos6}}%
                          </span>
                    </div>
                    <!-- /.info-box-content -->
             </div>

             <div class="info-box bg-olive">
               <span class="info-box-icon"><i class="ion ion-ios-cog-outline"></i></span>

               <div class="info-box-content">
                 <span class="info-box-text">Cancelado</span>
                 <span class="info-box-number">{{$Cancelado}}</span>

                 <div class="progress">
                   <div class="progress-bar" style=" width:{{$datos7}}%"></div>
                 </div>
                 <span class="progress-description">
                       {{$datos7}}%
                     </span>
               </div>
               <!-- /.info-box-content -->
               </div>
               <div class="info-box bg-purple ">
                 <span class="info-box-icon"><i class="ion ion-ios-close-circle"></i></span>

                 <div class="info-box-content">
                   <span class="info-box-text"> No Show</span>
                   <span class="info-box-number">{{$Show}}</span>

                   <div class="progress">
                     <div class="progress-bar" style=" width:{{$datos8}}%"></div>
                   </div>
                   <span class="progress-description">
                         {{$datos8}}%
                       </span>
                 </div>
                 <!-- /.info-box-content -->
               </div>
               <div class="info-box bg-gray ">
                 <span class="info-box-icon"><i class="ion ion-ios-information-circle"></i></span>

                 <div class="info-box-content">
                   <span class="info-box-text"> Ejecutado con novedad</span>
                   <span class="info-box-number">{{$Novedad}}</span>

                   <div class="progress">
                     <div class="progress-bar" style=" width:{{$datos9}}%"></div>
                   </div>
                   <span class="progress-description">
                         {{$datos9}}%
                       </span>
                 </div>
                 <!-- /.info-box-content -->
        </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Gráfica de Línea</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                {!! $chartjs3->render() !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Diagrama de barras</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                 {!! $chartjs2->render() !!}
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

  <div>
    <h1>CUADRO SERVICIOS PROGRAMADOS</h1>
    <iframe width="1300" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNTJjYzNjYWItZjg3Mi00MTczLWJmOWItZmY5ZjE1OTI4NjRiIiwidCI6IjIwNTk5MzcyLTgzM2ItNGIxYy1iY2QxLTZmN2Y1YjE1ZDhmYSIsImMiOjR9" frameborder="0" allowFullScreen="true"></iframe>

  </div>



@endsection
