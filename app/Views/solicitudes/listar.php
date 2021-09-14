<?php echo $header ?>

<h1>ADMINISTRAR SOLICITUDES</h1>
<a class="btn btn-primary mb-2 float-right" href="<?php echo base_url('crear_solicitud'); ?>" role="button">AGREGAR SOLICITUD</a>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Codigo</th>
			<th scope="col">Descripción</th>
			<th scope="col">Resumen</th>
			<th scope="col">Empleado</th>
			<th scope="col">Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($solicitudes->getResult('array') as $solicitud) { ?>

			<tr>

				<th scope="row"><?php echo $solicitud['id'] ?></th>
				<td><?php echo $solicitud['codigo'] ?></td>
				<td><?php echo $solicitud['descripcion'] ?></td>
				<td><?php echo $solicitud['resumen'] ?></td>
				<td><?php echo $solicitud['nombre_empleado'] ?> (ID:<?php echo $solicitud['id_empleado'] ?>)</td>				
				<td><a class="btn btn-warning btn-sm mr-2" href="<?php echo base_url('editar_solicitud/'.$solicitud['id']); ?>" role="button">Editar</a><a class="btn btn-danger btn-sm " href="<?php echo base_url('borrar_solicitud/'.$solicitud['id']); ?>" role="button">Eliminar</a></td>

			</tr>
		<?php } ?>

	</tbody>
</table>

<?php echo $footer ?>