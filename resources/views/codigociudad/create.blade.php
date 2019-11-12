<div class="modal fade" id="create_codigociudad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crear Código de ciudad</h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'codigociudad.store', 'method'=>'POST','id'=>'codigociudaCreate']) !!}
                    <div class="form-group">
                        <label for="id"> Código</label>
                        {!! Form::text('codigo',null,['class' => 'form-control','placeholder' => 'Código','id'=>'codigo']) !!}         
                     </div>
                     
                     <div class="form-group">
                        <label for="id"> Ciudad</label>
                        {!! Form::text('ciudad',null,['class' => 'form-control','placeholder' => 'Ciudad','id'=>'ciudad']) !!}         
                     </div>
                     
                     <div class="form-group">
                        <label for="id"> Departamento </label>
                        {!! Form::text('departamento',null,['class' => 'form-control','placeholder' => 'Departamento','id'=>'departamento']) !!}         
                     </div>

                     <center><button type="submit" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>
  