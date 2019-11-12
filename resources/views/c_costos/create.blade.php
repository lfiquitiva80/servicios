<div class="modal fade" id="centro_costos">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Centro de costos</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'centro_de_costos.store', 'method'=>'POST', 'id'=>'costos']) !!}
                
                     <div class="form-group">
                        <label for="id">Nit cliente</label>
                        {!! Form::select('id_cliente',$cliente,null,['class'=> 'form-control id_cliente','placeholder' => 'Seleccione el nit del cliente','name'=>'id_cliente','id'=>'id_cliente'] )!!}

                      </div>
                
                     <div class="form-group">
                        <label for="id">Nombre del cliente</label>
                        <input type="text" class="form-control nombre" disabled id="nombre">
                     </div>
                     <div class="form-group">
                        <label for="id">CENTRO DE COSTOS EQUIVALENTE</label>
                        {!! Form::text('centro_de_costos',null,['class'=> 'form-control','placeholder' => 'CENTRO DE COSTOS EQUIVALENTE', 'name'=>'centro_de_costos','id'=>'centro_de_costos'] )!!}

                      </div>
                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>