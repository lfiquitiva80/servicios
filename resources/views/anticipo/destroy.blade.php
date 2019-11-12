{!! Form::open(['route' => ['anticipo.destroy', $id],'method'=>'DELETE']) !!}



         <button style="margin-left:-115%" class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar el Anticipo')"><i class="fa fa-trash" aria-hidden="true"></i> </button>


     
 {!! Form::close() !!} 
