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
    <h1>EDITAR</h1>
    </div>

<section class="border pt-5 d-flex justify-content-center mb-4">

<form action="{{url('/reniecs/'.$reniec->id)}}" method="post" style="width: 36rem;">

    {{ csrf_field() }}
    {{ method_field('PATCH') }} 

    <div class="form-group">
    <div class="form-outline mb-4">
    
    <input type="text" name="Nombres" id="nombres" class="form-control" value="{{ isset($reniec->nombres)?$reniec->nombres:old('nombres') }}"/>
    <label class="form-label" for="Nombre">{{'Nombres'}}</label>

    </div>
    {{-- <label for="Nombre"  class="control-label" >{{'Nombres'}}</label> --}}
    
    {{-- <input type="text" placeholder="Nombres"  name="nombres" id="nombres"  value="{{ isset($reniec->nombres)?$reniec->nombres:old('nombres') }}"> --}}
    
    {!! $errors->first('nombres','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="Paterno"  class="control-label" >{{'Paterno'}}</label>
    <input type="text" placeholder="paterno"  name="appaterno" id="appaterno"   value="{{ isset($reniec->appaterno)?$reniec->appaterno:old('appaterno') }}">
    
    {!! $errors->first('appaterno','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="Materno"  class="control-label" >{{'Materno'}}</label>
    <input type="text" placeholder="escribe tu apellido materno"  name="apmaterno" id="apmaterno"   value="{{ isset($reniec->apmaterno)?$reniec->apmaterno:old('apmaterno') }}">
    
    {!! $errors->first('apmaterno','<div class="invalid-feedback">:message</div>')  !!}
    <br>



    <label for="DNI"  class="control-label" >{{'DNI'}}</label>
    <input type="text" placeholder="Tu dni"  name="DNI" id="DNI"   value="{{ isset($reniec->DNI)?$reniec->DNI:old('DNI') }}">
    
    {!! $errors->first('DNI','<div class="invalid-feedback">:message</div>')  !!}
    <br>





    <label for="sexo"  class="control-label" >{{'sexo'}}</label>
    <input type="text" placeholder="Sexo"  name="sexo" id="sexo"   value="{{ isset($reniec->sexo)?$reniec->sexo:old('sexo') }}">
    
    {!! $errors->first('sexo','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="fecha_nac"  class="control-label" >{{'fecha_nac'}}</label>
    <input type="text" placeholder="Tu dni"  name="fecha_nac" id="fecha_nac"   value="{{ isset($reniec->fecha_nac)?$reniec->fecha_nac:old('fecha_nac') }}">
    
    {!! $errors->first('fecha_nac','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="departamento"  class="control-label" >{{'departamento'}}</label>
    <input type="text" placeholder="Tu departamento"  name="departamento" id="departamento"   value="{{ isset($reniec->departamento)?$reniec->departamento:old('departamento') }}">
    
    {!! $errors->first('departamento','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="provincia"  class="control-label" >{{'provincia'}}</label>
    <input type="text" placeholder="Tu provincia"  name="provincia" id="provincia"   value="{{ isset($reniec->provincia)?$reniec->provincia:old('provincia') }}">
    
    {!! $errors->first('provincia','<div class="invalid-feedback">:message</div>')  !!}
    <br>

    <label for="distrito"  class="control-label" >{{'distrito'}}</label>
    <input type="text" placeholder="Tu distrito"  name="distrito" id="distrito"   value="{{ isset($reniec->distrito)?$reniec->distrito:old('distrito') }}">
    
    {!! $errors->first('distrito','<div class="invalid-feedback">:message</div>')  !!}
    <br>
    <input type="submit"  class="btn btn-success" value="Actualizar" onclick="return confirm('Confirmar guardado?');">
    </div>
</form>

</section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>