{!! Form::open(['route' => ['ordenesdeservicio.destroy', $row->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger pull-right' onclick="return confirm('Esta seguro de Eliminar el registro')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
