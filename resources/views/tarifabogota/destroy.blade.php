{!! Form::open(['route' => ['tarifasbogota.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left:-80%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la tarifa de bogotá')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}