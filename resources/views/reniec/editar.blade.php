{{-- estoy en el archivo reniec crear :D --}}
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>




    <div class="text-center mt-5 mb-3 d-flex justify-content-center">
    <h1>EDITAR USUARIO</h1>
    </div>

<section class="border pt-5 d-flex justify-content-center mb-4">

<form action="{{url('/reniecs/'.$reniec->id)}}" method="post" style="width: 36rem;">

    {{ csrf_field() }}
    {{ method_field('PATCH') }} 

    <div class="form-group">

{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="Nombres" id="nombres" class="form-control" value="{{ isset($reniec->nombres)?$reniec->nombres:old('nombres') }}"/>
    <label class="form-label" for="Nombre">{{'Nombres'}}</label>

    </div>

    {!! $errors->first('nombres','<div class="invalid-feedback">:message</div>')  !!}

{{-- end  --}}


{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="appaterno" id="appaterno" class="form-control" value="{{ isset($reniec->appaterno)?$reniec->appaterno:old('appaterno') }}">
    <label class="form-label" for="Paterno">AP {{'Paterno'}}</label>
    
    </div>
     {!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>')  !!}
   

{{-- end  --}}
    

{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="apmaterno" id="apmaterno" class="form-control" value="{{ isset($reniec->apmaterno)?$reniec->apmaterno:old('apmaterno') }}">
    <label class="form-label" for="Materno">AP {{'Materno'}}</label>
    
    </div>
     {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}
   
{{-- end  --}}


{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="DNI" id="DNI" class="form-control" value="{{ isset($reniec->DNI)?$reniec->DNI:old('DNI') }}">
    <label class="form-label" for="DNI">Nro de {{'DNI'}}</label>
    
    </div>
     {!! $errors->first('DNI','<div class="invalid-feedback">:message</div>')  !!}

{{-- end  --}}


{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="sexo" id="sexo" class="form-control" value="{{ isset($reniec->sexo)?$reniec->sexo:old('sexo') }}">
    <label class="form-label" for="sexo">Nro de {{'sexo'}}</label>
    
    </div>
     {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>')  !!}
   

{{-- end  --}}



{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" value="{{ isset($reniec->fecha_nac)?$reniec->fecha_nac:old('fecha_nac') }}">
    <label class="form-label" for="fecha_nac">Nro de {{'fecha_nac'}}</label>
    
    </div>
     {!! $errors->first('fecha_nac','<div class="invalid-feedback">:message</div>')  !!}
   

{{-- end  --}}



{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="departamento" id="departamento" class="form-control" value="{{ isset($reniec->departamento)?$reniec->departamento:old('departamento') }}">
    <label class="form-label" for="departamento">Nro de {{'departamento'}}</label>
    
    </div>
     {!! $errors->first('departamento','<div class="invalid-feedback">:message</div>')  !!}
   
{{-- end  --}}



{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="provincia" id="provincia" class="form-control" value="{{ isset($reniec->provincia)?$reniec->provincia:old('provincia') }}">
    <label class="form-label" for="provincia">Nro de {{'provincia'}}</label>
    
    </div>
     {!! $errors->first('provincia','<div class="invalid-feedback">:message</div>')  !!}
   
{{-- end  --}}



{{-- init  --}}
    <div class="form-outline mb-4">
    
    <input type="text" name="distrito" id="distrito" class="form-control" value="{{ isset($reniec->distrito)?$reniec->distrito:old('distrito') }}">
    <label class="form-label" for="distrito">Nro de {{'distrito'}}</label>
    
    </div>
     {!! $errors->first('distrito','<div class="invalid-feedback">:message</div>')  !!}

{{-- end  --}}

    <div class="text-center">
    <input type="submit"  class="btn btn-success btn-lg" value="Actualizar" onclick="return confirm('Confirmar guardado?');">
    

    </div>
</form>

</section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>