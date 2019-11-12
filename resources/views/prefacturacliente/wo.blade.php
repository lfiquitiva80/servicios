<div class="panel panel-default">
        <div class="panel-heading">
           <h3 class="panel-title"></h3></div>
            <div class="panel-body">
              <table id="wo" class="table table-striped table-hover table-responsive "  >
                 <thead>
                    <tr>
                            <td> Id  </td>
                            <td> Fecha solicitud </td>
                            <td> Estado del Servicio	</td>
                            <td> W.O y Ckecklist </td>  
                            <td> Fecha Inicio del Servicio </td>
                            <td> Cliente</td>
                            <td> Ciudad Destino</td>
                            <td> Detalle del servicio</td>
                            <td> Estado de facturacion</td>
                            <td> Acción</td>
                            <td></td>
                     </tr>
                  </thead>
              </table>
          </div>
      </div>
    
    <script>
    
    $(document).ready(function() {
      var woprefacturaclientes = "{{$ordendeservicios->No_de_orden_de_servicio}}";
  
       $('#wo').DataTable({
        "serverSide": true,
          ajax: {
          url: '{!!URL::to('woprefacturacliente')!!}',
          method: "get",
          data:{id:woprefacturaclientes},
           xhrFields: {
               withCredentials: true
             }
          },
          "columns":[
                {data: 'id', name: 'ordenesdeservicio.id' },
                {data: 'fecha_solicitud', name:'ordenesdeservicio.fecha_solicitud'},
                {data:'estadoservicio_id',name:'ordenesdeservicio.estadoservicio_id'},
                {data:'No_de_orden_de_servicio',name:'ordenesdeservicio.No_de_orden_de_servicio'},
                {data:'fecha_inicio_servicio',name:'ordenesdeservicio.fecha_inicio_servicio'},
                {data:'clientenombre',name:'cliente.nombre'},
                {data:'ciudad_destino',name:'ordenesdeservicio.ciudad_destino'},
                {data:'detalle_del_servicio',name:'ordenesdeservicio.detalle_del_servicio'},
                {data:'estado_facturacion',name:'ordenesdeservicio.detalle_del_servicio'},
                {data: 'botones'},
                
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
                { orderable: true, className: 'nit', targets: [ 0,1,2,3,4,5,6,7,8 ] },
                { orderable: false, targets: '_all' },
                 { targets : [2],
                  render : function (data, type, row) {
                           switch(data) {
                            case '2' : return '<span class="label label-primary"> SOLICITUD CLIENTE </span>'; break;
                           case '6' : return '<span class="label label-danger"> EJECUTADO COMPLETO <i class="fa fa-check" aria-hidden="true"></span>'; break;
                           case '8' : return '<span class="label label-primary"> NO SHOW </span>'; break;
                           case '9' : return '<span class="label label-warning"> EJECUTAD CON NOVEDAD </span>'; break;
                           default : return '<span class="label label-primary"> PENDIENTE POR ESTADO </span>'; break;// Inserte esta linea att Leonidas

                           }   
                      }
                  }, 
                  { targets : [3],
                  render : function (data, type, row) {
                    return '<a href="wo/'+data+'/edit"  class="btn btn-warning" title="Lista de Chequeo">'+data+'</a>';
                      }
                  }, 
                  { targets : [4],
                  render : function (data, type, row) {
                          moment.locale('es')
                           var now = moment().format('YYYY/MM/DD hh:mm A');
                              if (data < now) {
                                return data+ '<br><font color="blue">Servicio hace '+moment(data).fromNow(true)+' </font>';
                              }else {
                                return data+ '<br><font color="red">Servicio dentro de '+moment(data).fromNow(true)+' </font>';
                               }
                          }       
                  }, 
                 { targets : [8],
                   render : function (data, type, row) {
                            switch(data) {
                            case null: return '<span class="label label-default"> POR FACTURAR  </span>'; break;
                            case '1': return '<span class="label label-default">REVISIÓN</span>';
                            case '2' : return '<span class="label label-danger">DEVOLUCIÓN </span>'; break;
                            case '3' : return '<span class="label label-info">PREFACTURACIÓN </span>'; break;
                            case '4' : return '<span class="label label-danger">DEVOLUCIÓN PREFACTURACIÓN </span>'; break;
                            case '5' : return '<span class="label label-success">FACTURADO <i class="fa fa-check" aria-hidden="true"></span>'; break; 
                            case '6' : return '<span class="label label-warning">NO FACTURADO</span>'; break;  
                            }   
                       }
                  }
             ]
          
       });
    
    });
     
    
    
      </script>
    