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
					<h1 class="page-header"><?php echo isset($usuario) ? 'Actualizar' : 'Nuevo' ?> usuario | <a href="<?php url('usuario')?>" class="btn btn-default"><i class="fa fa-users"></i> Ver listado</a>
					</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- INICIO CONTENIDO -->

			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="<?php url('usuario/agregar')?>" method="POST" role="form">
								<legend>Datos del usuario</legend>

								<?php if (isset($usuario)) {?>
									<input type="hidden" value="<?php echo $usuario->id ?>" name="usuario_id">
								<?php }?>

								<div class="form-group">
									<label for="usuario">Nombre</label>
									<input value="<?php echo isset($usuario) ? $usuario->usuario : '' ?>" required autofocus type="text" name="usuario" class="form-control" id="usuario" placeholder="Cesar M.">
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input value="<?php echo isset($usuario) ? $usuario->email : '' ?>" required type="email" name="email" class="form-control" id="email" placeholder="cm@prueba.com">
								</div>

								<div class="form-group">
									<label for="pwd">Password</label>
									<input type="password" name="password" class="form-control" id="pwd">
								</div>

								<div class="form-group">
									<label for="inputPrivi">Privilegio</label>
									<select name="privilegio" id="inputPrivi" class="form-control" required="required">
										<option <?php echo isset($usuario) && $usuario->privilegio == 'admin' ? 'selected' : '' ?> value="admin">Administrador</option>
										<option <?php echo isset($usuario) && $usuario->privilegio == 'venta' ? 'selected' : '' ?> value="venta">Vendedor</option>
									</select>
								</div>

								<button type="submit" class="btn btn-primary">Registrar</button>
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