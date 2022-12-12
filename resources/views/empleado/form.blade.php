<br>
<h1> {{$modo}} empleado</h1>



<div class="form-group">
<label for="Nombre"> Nombre </label> 
<input type="text" class="form-control" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno"> Apellido Materno </label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno">
</div>

<div class="form-group">
<label for="Email"> Email </label>
<input type="text" class="form-control" name="Email" value="{{ isset($empleado->Email)?$empleado->Email:'' }}" id="Email">
</div>

<br>
<input class="btn btn-success" type="submit" value="{{$modo}} Datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}"> Regresar </a>
<br>