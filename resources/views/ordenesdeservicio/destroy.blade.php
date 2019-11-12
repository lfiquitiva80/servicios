{!! Form::open(['route' => ['ordenesdeservicio.destroy', $row->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el registro')"><i class="fa fa-trash" aria-hidden="true"> Eliminar</i> </button>
{!! Form::close() !!}
