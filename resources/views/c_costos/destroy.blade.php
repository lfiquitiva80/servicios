{!! Form::open(['route' => ['centro_de_costos.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left: -80%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar el centro de costos')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}