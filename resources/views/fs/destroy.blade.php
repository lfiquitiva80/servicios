
{!! Form::open(['route' => ['fs.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left: 35%; margin-top: -7.2%" class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la línea de negocio')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}