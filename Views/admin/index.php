<div class="row">
	<div class="span12">
		<div class="widget widget-table action-table">
			<div class="widget-header">
				<i class="icon-th-list"></i>
				<h3>Usuarios </h3>
			</div>
			<div class widget="content">
				<table class="table table-striped table-bordered table-condenced">
					<thead>
						<tr>
							<th>id</th>
							<th>nombre</th>
							<th>email</th>
							<th>fecha_ingreso</th>
							<th>estatus</th>
							<th>perfil</th>
							<th>puesto</th>
							<th>acciones</th>
						</tr>
					</thead>
					<tbody>
						<?php while($row = mysqli_fetch_assoc($datos['valor'])) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nombre']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['fecha_ingreso']; ?></td>
								<td><?php echo $row['estatus']; ?></td>
								<td><?php echo $row['perfil']; ?></td>
								<td><?php echo $row['puesto']; ?></td>
								
								<td class="td-actions">
									<a class="btn btn-small btn-info" href="#"><i class="btn-icon-only icon-pencil"></i></a>
									<a class="btn btn-small btn-danger" href="#"><i class="btn-icon-only icon-remove"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- /content -->
		</div>
		<!-- /table -->
	</div>
	<!-- /span6 -->
</div>
<!-- /row -->
