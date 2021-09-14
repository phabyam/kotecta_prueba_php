<?php echo $header ?>

<h1>EDITAR EMPLEADO</h1>

<form method="post" action="<?php echo site_url('/actualizar_empleado') ?>" enctype="multipart/form-data">
	<input TYPE="hidden" name="id" VALUE="<?php echo $empleado['id'] ?>">
	<div class="form-group">
		<label for="exampleInputEmail1">Nombre</label>
		<input type="text" class="form-control" name="nombre" placeholder="Nombre del empleado" value="<?php echo $empleado['nombre'] ?>">
		<small id="emailHelp" class="form-text text-muted">Escriba aqui el nombre del empleado</small>
	</div>

	

	<div class="form-group">
		<label for="exampleInputEmail1">Fecha de ingreso:</label>
		<input type="date" class="form-control" name="fecha_ingreso" placeholder=">Fecha de ingreso" value="<?php echo $empleado['fecha_ingreso'] ?>"> 
		<small class="form-text text-muted">Escriba aqui la Fecha de ingreso</small>
	</div>

	
	<div class="form-group">
		<label for="exampleInputEmail1">Salario</label>
		<input type="number" class="form-control" name="salario" placeholder="Salario del empleado" value="<?php echo $empleado['salario'] ?>">
		<small class="form-text text-muted">Escriba aqui el Salario del empleado</small>
	</div>

	<button type="submit" class="btn btn-primary">GUARDAR</button>
</form>

<?php echo $footer ?>