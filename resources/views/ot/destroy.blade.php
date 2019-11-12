{!! Form::open(['route' => ['ot.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left: 30%; margin-top: -9%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar OT')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}