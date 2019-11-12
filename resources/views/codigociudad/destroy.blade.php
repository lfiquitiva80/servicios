
{!! Form::open(['route' => ['codigociudad.destroy', $id],'method'=>'DELETE']) !!}
    
<button class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar el código de la ciudad')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}