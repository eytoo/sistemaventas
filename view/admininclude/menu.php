<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.html">SISTEMA DE VENTAS 1.0</a>
	</div>
	<!-- /.navbar-header -->

	<ul class="nav navbar-top-links navbar-right">

		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <?php echo $_SESSION["usuario"] ?>  <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
				</li>
				<li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
				</li>
				<li class="divider"></li>
				<li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<div class="input-group custom-search-form">
						<input type="text" class="form-control" placeholder="Buscar producto...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
							</button>
						</span>
					</div>
					<!-- /input-group -->
				</li>
				<li>
					<a href="<?php url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
				</li>

				<li>
					<a href="<?php url('producto')?>"><i class="fa fa-table fa-fw"></i> Productos</a>
				</li>
				<li>
					<a href="<?php url('venta')?>"><i class="fa fa-edit fa-fw"></i> Ventas</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-wrench fa-fw"></i> Administracion<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="panels-wells.html">Usuarios</a>
						</li>
						<li>
							<a href="buttons.html">Privilegios</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>