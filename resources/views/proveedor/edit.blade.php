<div class="modal fade" id="editar_proveedor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ACTUALIZAR</h4>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('proveedores.update', 'id' )}}"  id="form_proveedor1" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="id">Nit</label>
                        {!! Form::text('nit', null,['class' => 'form-control', 'placeholder' => 'Nit','name'=>'nit','id'=>'nit']) !!}
                    </div>
                
                    <div class="form-group">
                        <label for="id">Nombre</label>
                        {!! Form::text('nombre', null,['class' => 'form-control', 'placeholder' => 'Nombre','name'=>'nombre','id'=>'nombre']) !!}
                    </div>
                    <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>             
                </div>
            </div>
        </div>
    </div>
  


      
                
    


  



