{!! Form::open(['route' => ['proveedores.destroy', $id],'method'=>'DELETE']) !!}
    
<button style="margin-left:-100%"  class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar el proveedor')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}
