
<a  href="{{ route('prefacturacliente.show',$id)}}"  class="btn btn-default" title="prefactura" ><i class="fa fa-plus" aria-hidden="true"> Prefactura</i></a>
<br><br>
<a href="{{ route('ordenesdeservicio.edit',$id) }}" class="btn btn-success" title="Programar" onclick="return confirm('Va a ingresar a programar.');"><i class="fa fa-pencil" aria-hidden="true"> Programar</i></a>