{!! Form::open(['route' => ['ordenesdeservicio.destroy', $row->id],'method'=>'DELETE']) !!}
 

<button class='btn btn-danger'><i class="fa fa-trash" aria-hidden="true"></i> </button>
{!! Form::close() !!}
