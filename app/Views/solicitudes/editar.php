<?php echo $header ?>

<h1>EDITAR SOLICITUD</h1>

<form method="post" action="<?php echo site_url('/actualizar_solicitud') ?>" enctype="multipart/form-data">
	<input TYPE="hidden" name="id" VALUE="<?php echo $solicitud['id'] ?>">
	<div class="form-group">
		<label for="exampleInputEmail1">EMPLEADO</label>

		<select class="form-control" aria-label="Default select example" name='id_empleado'>
			<?php foreach ($empleados as $empleado) { ?>
				<option <?php if ($empleado['id_empleado'] == $solicitud['id_empleado']) echo 'selected' ?> value="<?php echo $empleado['id'] ?>"><?php echo $empleado['nombre'] ?> (ID:<?php echo $empleado['id_empleado'] ?>)</option>
			<?php } ?>
		</select>

		<small class="form-text text-muted">Selecciones aqui el empleado</small>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Codigo</label>
		<input type="text" class="form-control" name="codigo" placeholder="Codigo de la solicitud" value="<?php echo $solicitud['codigo'] ?>">
		<small id="emailHelp" class="form-text text-muted">Escriba aqui el Codigo de la solicitud</small>
	</div>



	<div class="form-group">
		<label for="exampleInputEmail1">Descripcion</label>
		<textarea class="form-control" name="descripcion" placeholder="Descripcion del solicitud"><?php echo $solicitud['descripcion'] ?></textarea>
		<small class="form-text text-muted">Escriba aqui el Descripcion del solicitud</small>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Resumen</label>
		<textarea class="form-control" name="resumen" placeholder="Descripcion del solicitud"><?php echo $solicitud['resumen'] ?></textarea>
		<small class="form-text text-muted">Escriba aqui el Descripcion del solicitud</small>
	</div>

	<button type="submit" class="btn btn-primary">GUARDAR</button>
</form>

<?php echo $footer ?>