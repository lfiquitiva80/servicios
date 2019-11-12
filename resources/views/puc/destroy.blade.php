{!! Form::open(['route' => ['centro_de_costos.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left: 58%; margin-top: -19.5%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la cuenta')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
