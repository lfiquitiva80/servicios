{!! Form::open(['route' => ['servicios_adicionales.destroy', $row->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
{!! Form::close() !!}
