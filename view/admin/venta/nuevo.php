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
					<h1 class="page-header"><?php echo isset($venta) ? 'Actualizar' : 'Nueva' ?> venta | <a href="<?php url('venta')?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Ver listado</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php url('venta/agregar')?>" method="POST" role="form">
								<legend>Datos de la venta</legend>

								<?php if (isset($venta)) {?>
									<input type="hidden" value="<?php echo $venta->id ?>" name="venta_id">
								<?php }?>

								<div class="form-group">
									<label for="usuario">Nombre del cliente</label>
									<input value="<?php echo isset($venta) ? $venta->cliente : '' ?>" required autofocus type="text" name="nombre" class="form-control" id="usuario" placeholder="Contoso Alfaro">
								</div>
								<?php if (isset($venta)) {?>
									<div class="form-group">
										<label for="precio">Precio</label>
										<input value="<?php echo isset($venta) ? $venta->precio : '' ?>" required type="text" name="precio" class="form-control" id="precio" placeholder="0.00">
									</div>
								<?php }?>

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