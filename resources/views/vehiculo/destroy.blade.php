{!! Form::open(['route' => ['Vehiculos.destroy', $row->id],'method'=>'DELETE']) !!}


<button class='btn btn-danger' onclick="return confirm('Esta seguro de Eliminar el vehiculo')"><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
