{!! Form::open(['route' => ['horaadicionales.destroy', $id],'method'=>'DELETE']) !!}
    
<button class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la hora adicional')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
