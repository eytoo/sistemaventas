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
					<h1 class="page-header"><?php echo isset($producto) ? 'Actualizar' : 'Nuevo' ?> producto | <a href="<?php url('producto')?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Ver listado</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php url('producto/agregar')?>" method="POST" role="form">
								<legend>Datos del producto</legend>

								<?php if (isset($producto)) {?>
									<input type="hidden" value="<?php echo $producto->id ?>" name="producto_id">
								<?php }?>

								<div class="form-group">
									<label for="usuario">Nombre</label>
									<input value="<?php echo isset($producto) ? $producto->nombre : '' ?>" required autofocus type="text" name="nombre" class="form-control" id="usuario" placeholder="Arroz">
								</div>

								<div class="form-group">
									<label for="precio">Precio</label>
									<input value="<?php echo isset($producto) ? $producto->precio : '' ?>" required type="text" name="precio" class="form-control" id="precio" placeholder="0.00">
								</div>

								<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!--TERMINO CONTENIDO -->
		</div>
		<!-- /#page-wrapper -->
	</div>
	<!-- /#wrapper -->
	<?php include VISTA_RUTA . "admininclude/scripts.php"?>
</body>

</html>