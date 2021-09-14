<?php echo $header ?>

<h1>CREAR EMPLEADO</h1>

<form method="post" action="<?php echo site_url('/guardar_empleado') ?>" enctype="multipart/form-data">

	<div class="form-group">
		<label for="exampleInputEmail1">Nombre</label>
		<input type="text" class="form-control" name="nombre" placeholder="Nombre del empleado">
		<small class="form-text text-muted">Escriba aqui el nombre del empleado</small>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Fecha de ingreso:</label>
		<input type="date" class="form-control" name="fecha_ingreso" placeholder=">Fecha de ingreso">
		<small class="form-text text-muted">Escriba aqui la Fecha de ingreso</small>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Salario</label>
		<input type="number" class="form-control" name="salario" placeholder="Salario del empleado">
		<small class="form-text text-muted">Escriba aqui el Salario del empleado</small>
	</div>

	<button type="submit" class="btn btn-primary">AGREGAR</button>
</form>

<?php echo $footer ?>