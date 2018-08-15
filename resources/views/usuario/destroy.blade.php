{!! Form::open(['route' => ['usuario.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el usuario')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
