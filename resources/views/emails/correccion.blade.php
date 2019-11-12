@component('mail::message')

# {{$titulo}} <br>

 

<div>
   
    
     {{$descripcion}} <br>
</div>

<br><br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent