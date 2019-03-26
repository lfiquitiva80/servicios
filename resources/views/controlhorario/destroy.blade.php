{!! Form::open(['route' => ['controlhorario.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el cliente')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
