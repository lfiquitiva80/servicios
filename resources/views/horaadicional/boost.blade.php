<div class="modal fade" id="aumentar_horasadicional">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"> Aumentar horas adicionales </h4>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'aumentarhorasadicional', 'method'=>'GET','id'=>'']) !!}
                    {{method_field('patch')}}
                    {{csrf_field()}}

                    {!! Form::hidden('id', null,['class' => 'form-control id_horaadicional','name'=>'id']) !!}
                    
                    <label for="id">Digite el numero </label>

                     <div class="input-group">
                        {!! Form::text('porcentaje', null,['class' => 'form-control xs', 'placeholder' => 'porcentaje','name'=>'porcentaje','id'=>'porcentaje']) !!}
                        <span class="input-group-addon">%</span>
                    </div>
                    
                     <br>
                     <center><button type="submit" class="btn btn-primary" >Aumentar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>