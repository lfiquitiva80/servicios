@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection
  
@section('main-content')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

@include('calendariootrocliente.create')

 <div class="panel panel-default">
    <a class="btn btn-success"  href="{{ url('Exportcalendario') }}"><span class="glyphicon glyphicon-download" aria-hidden="true"></span> Excel</a>

      <div id="calendario"></div>
 </div>
   

@section('scripts')
    @include('adminlte::layouts.partials.scripts')

    <script>
         var BASEURL = "{{ url('/') }}";
  $('#calendario').fullCalendar({
      locale: 'es',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month',
      },
      eventClick: function(eventObj) {
        if (eventObj.url) {
          alert(
            'Clicked ' + eventObj.title + '.\n' +
            'Will open ' + eventObj.url + ' in a new tab'
          );
          window.open(eventObj.url);
          return false;
          }else{
            swal({
            title: "Descripción!",
            text: eventObj.title,
           });
        }
      },
      eventSources: [
        {
        url: BASEURL+'/calendarioprefacturaall'
        }
      ],


      dayClick: function(date) {
        var now = moment().format('YYYY-MM-DD');
       
        //  if (date.format() < now) {
        //   // swal({
        //   //  title: 'Error',
        //   //  icon: "error",
        //   //  text: "la fecha seleccionada ha caducado"
        //   //  })
        //  }else{
           $('#crear_calendario').on('show.bs.modal', function (event) {
             var fecha  = date.format();
             var modal = $(this)
            modal.find('.modal-body #fecha').val(fecha);
            });
           $('#crear_calendario').modal('show')
           
         //}
        
        }
       
       

});

 
</script>
@show

@endsection