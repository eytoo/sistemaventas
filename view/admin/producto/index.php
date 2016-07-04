<!DOCTYPE html>
<html lang="en">
<head>
	<?php include VISTA_RUTA . "admininclude/head.php"?>
</head>
<body>
	<div id="wrapper">
		<?php include VISTA_RUTA . "admininclude/menu.php"?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Listado de productos | <a href="<?php url('producto/nuevo')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Nuevo producto</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Precio</th>
						<th>Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($productos as $producto) {?>
					<tr>
						<td><?php echo $producto->id ?></td>
						<td><?php echo $producto->nombre ?></td>
						<td><?php echo 'S/. ' . number_format($producto->precio, 2) ?></td>
						<td>
							<a class="btn btn-primary btn-sm" href="<?php url('producto/editar/' . $producto->id)?>">Editar</a>
							<button class="btn btn-danger btn-sm" onclick="confirmar('<?php url('producto/eliminar/' . $producto->id)?>')">Eliminar</button>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>

			<!--TERMINO CONTENIDO -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include VISTA_RUTA . "admininclude/scripts.php"?>
</body>

</html>