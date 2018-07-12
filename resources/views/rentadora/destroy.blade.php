{!! Form::open(['route' => ['Rentadora.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar la rentadora')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
