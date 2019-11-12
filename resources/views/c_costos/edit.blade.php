<div class="modal fade" id="editar_c_costos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('centro_de_costos.update', 'id' )}}"  id="ctoseditar" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="">
                     <div class="form-group">
                        <label for="id">Nit cliente</label>

                        {!! Form::select('id_cliente',$cliente,null,['class'=> 'form-control id_clientes','id' => 'id_cliente','name'=>'id_cliente'] )!!}                    
                    </div>
                
                     <div class="form-group">
                        <label for="id">Nombre del cliente</label>
                        <input type="text" class="form-control names" disabled id="nombre">

                    </div>
                     <div class="form-group">
                        <label for="id">CENTRO DE COSTOS EQUIVALENTE</label>
                        {!! Form::text('centro_de_costos',null,['class'=> 'form-control','placeholder' => 'CENTRO DE COSTOS EQUIVALENTE', 'name'=>'centro_de_costos','id'=>'centro_de_costos'] )!!}

                      </div>
                    <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>             
                </div>
            </div>
        </div>
    </div>