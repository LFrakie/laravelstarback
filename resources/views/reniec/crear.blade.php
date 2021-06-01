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
    <h1>REGISTRAR</h1>
    </div>


<section class="border pt-5 d-flex justify-content-center mb-4">






	<form action="{{url('/reniecs')}}" method="post" style="width: 36rem;" >

    {{ csrf_field() }}
    
  <!-- ############## -->
  <div class="form-outline mb-4">
    <input type="text" name="nombres" id="nombres" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Nombres</label>
  </div>

    <!-- ############## -->

    <div class="row mb-4 ">
      
      <div class="col">
        <div class="form-outline ">
          <input type="text" name="appaterno" id="appaterno" class="form-control" value="" />
          <label class="form-label" for="form1Example1">Apellido Paterno</label>
        </div> 
      </div>

      <div class="col">
        <div class="form-outline ">
          <input type="text" name="apmaterno" id="apmaterno" class="form-control" value="" />
          <label class="form-label" for="form1Example1">Apellido Materno</label>
        </div> 
      </div>

    </div>
  

<div class="row mb-4 ">
      
      <div class="col">
        <div class="form-outline ">
          <input type="text" name="DNI" id="DNI" class="form-control" value="" />
          <label class="form-label" for="form1Example1">DNI</label>
        </div> 
      </div>

      <div class="col">
        <div class="form-outline ">
          <input type="text" name="SEXO" id="SEXO" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Sexo</label>
        </div> 
      </div>

            <div class="col">
        <div class="form-outline ">
    <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Fecha Nacimiento</label>
        </div> 
      </div>

    </div>



    <!-- ############## -->
  <div class="form-outline mb-4">
    <input type="text" name="departamento" id="departamento" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Departamento</label>
  </div>

    <!-- ############## -->
  <div class="form-outline mb-4">
    <input type="text" name="provincia" id="provincia" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Provincia</label>
  </div>

    <!-- ############## -->
  <div class="form-outline mb-4">
    <input type="text" name="distrito" id="distrito" class="form-control" value="" />
    <label class="form-label" for="form1Example1">Distrito</label>
  </div>


  <!-- Submit button -->
  <input type="submit" class="btn btn-lg btn-primary btn-block" value="Guardar" onclick="return confirm('¿Confirmar Guardar?');">
</form>
	
</section>




{{-- 
<form action="{{url('/reniecs')}}" method="post" >

<div class="form-outline mb-4">
  


{{ csrf_field() }}
Nombres: <input type="text" name="nombres" id="nombres" value="">
<br>
Ap. Paterno: <input type="text" name="appaterno" id="appaterno" value="">
<br>
Ap. Materno: <input type="text" name="apmaterno" id="apmaterno" value="">
<br> 
DNI:     <input type="text" name="DNI" id="DNI" value="">
<br>
sexo:      <input type="text" name="sexo" id="sexo" value="">
<br>

fecha_nac:     <input type="text" name="fecha_nac" id="fecha_nac" value="">
<br>  
departamento:      <input type="text" name="departamento" id="departamento" value="">
<br>
provincia:     <input type="text" name="provincia" id="provincia" value="">
<br>
distrito:      <input type="text" name="distrito" id="distrito" value="">
<br>
<input type="submit" value="Registrar" onclick="return confirm('Seguro que quiere guardar?');">
</div>
</form>
 --}}
{{--  --}}
{{--  --}}
{{--  --}}




<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>