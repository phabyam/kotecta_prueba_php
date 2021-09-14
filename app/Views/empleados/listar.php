<?php echo $header ?>

<h1>EMPLEADOS</h1>
<a class="btn btn-primary mb-2 float-right" href="<?php echo base_url('crear_empleado'); ?>" role="button">AGREGAR EMPLEADO</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nombre</th>
			<th scope="col">Fecha ingreso</th>
			<th scope="col">Salario</th>
			<th scope="col">Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($empleados as $empleado) { ?>
			<tr>

				<th scope="row"><?php echo $empleado['id'] ?></th>
				<td><?php echo $empleado['nombre'] ?></td>
				<td><?php echo $empleado['fecha_ingreso'] ?></td>
				<td><?php echo $empleado['salario'] ?></td>
				<td><a class="btn btn-warning btn-sm mr-2" href="<?php echo base_url('editar_empleado/'.$empleado['id']); ?>" role="button">Editar</a><a class="btn btn-danger btn-sm " href="<?php echo base_url('borrar_empleado/'.$empleado['id']); ?>" role="button">Eliminar</a></td>

			</tr>
		<?php } ?>

	</tbody>
</table>

<?php echo $footer ?>