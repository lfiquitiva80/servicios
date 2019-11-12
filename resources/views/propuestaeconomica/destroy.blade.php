
{!! Form::open(['route' => ['propuestaeconomica.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left:-40%" class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la  propuesta economica')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
