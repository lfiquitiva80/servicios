{!! Form::open(['route' => ['tarifasbarranca.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left:-80%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar la tarifa de barranca')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
