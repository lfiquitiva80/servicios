 
      @include('horaprefactura.create')
      @include('horaprefactura.edit')

 <div class="panel panel-default">
    <div class="panel-heading">
       <h3 class="panel-title"></h3></div>
        <div class="panel-body">
          <table id="tabla" class="table table-striped table-hover table-responsive "  >
             <thead>
                <tr>
                  <td>  ID  </td>
                  <td>  DETALLE  </td>
                  <td>  VALOR TOTAL </td>
                  <td>  HORARIO </td>
                  <td>  Acción </td>  
                  <th></th>
                 </tr>
              </thead>
          </table>
      </div>
  </div>

<script>

$(document).ready(function() {
  var idprefactura = "{{$data->id}}";
  var escolta= '{{$escolta}}';
  var tipodeservicio;
  var vip = $('.vip').val();

   $('#tabla').DataTable({
    "serverSide": true,
      ajax: {
      url: '{!!URL::to('horasprefacturacliente')!!}',
      method: "get",
      data:{id:idprefactura},
       xhrFields: {
           withCredentials: true
         }
      },
      "columns":[
         {data: 'id'},
         {data: 'detalle'},
         {data: 'valor_total'},
         {data:'horario' },
         {data: 'editar'},
         {data: 'destroy'}            
      ],
      "language": {
          "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
       },
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "emptyTable": "No hay datos",
      "zeroRecords": "No hay coincidencias",
      "info":false,  
      "order": [[ 0, "desc" ]],
      columnDefs: [
         { orderable: true, className: 'nit', targets: [ 0, 1,2,3 ] },
         { orderable: false, targets: '_all' }
      ]
   });
  
   $('.id_tarifa_estandar').change(function(event) {
      var id_tarifa_estandar = $(this).val();
      $('.hora_adicional').val('');
      $('.cantidades').val('')


      if (id_tarifa_estandar == '') {
         $('.detalle').val('');
         $('.valor_unitario').val('');
      }else{
      $.ajax({
           url: '{!!URL::to('id_tarifaestandar')!!}',
           type: 'get',
           data: {id:id_tarifa_estandar},
           success:function(data){  
               for (let i = 0; i < data.length; i++) {
                 $('.detalle').val(data[i].descripcion+' '+ data[i].tipodetarifa+' VIP: '+vip+ ' EMP '+escolta+' '+tipodeservicio);                
                 $('.valor_unitario').val(data[i].valor_ciudad);
                 $('.valor_unitarios').val(data[i].valor_ciudad);
               }              
           }
       })
   }})

   $('.hora_adicional').change(function(event) {
      $('.cantidades').val('')
      var horaadiconal = $(this).val();
      $('.id_tarifa_estandar').val('');

      if (horaadiconal == '') {
         $('.detalle').val('');
         $('.valor_unitario').val('');
      }else{
      $.ajax({
           url: '{!!URL::to('id_hora_adicional')!!}',
           type: 'get',
           data: {id:horaadiconal},
           success:function(data){                
               for (let i = 0; i < data.length; i++) {
                 $('.detalle').val(data[i].descripcion+' '+ data[i].tipodetarifa+' VIP: '+vip+ ' EMP '+escolta+' '+tipodeservicio);                
                 $('.valor_unitario').val(data[i].valor);
                 $('.valor_unitarios').val(data[i].valor);

               }              
           }
       })
   }})
  

   $('.cantidad').change(function(event) {
      var cantidad =$(this).val();
      var valor_unitario = $('.valor_unitario').val();
      $('.valor_total').val(cantidad*valor_unitario);
   });

   $('.cantidades').change(function(event) {
      var cantidad =$(this).val();
      alert
      var valor_unitario = $('.valor_unitarios').val();
      $('.valor_totals').val(cantidad*valor_unitario);
   });

   

});
 


  </script>
