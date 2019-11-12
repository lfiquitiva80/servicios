{!! Form::open(['route' => ['tarifas.destroy', $id],'method'=>'DELETE']) !!}
    
<button class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la tarifa estandar')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
