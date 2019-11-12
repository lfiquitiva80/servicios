{!! Form::open(['route' => ['tipodetarifa.destroy', $id],'method'=>'DELETE']) !!}
    
<button  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar el tipo de tarifa')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}