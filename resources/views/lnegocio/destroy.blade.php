{!! Form::open(['route' => ['linea_de_negocio.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left: -100%;"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la linea de negocio')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
