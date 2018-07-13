<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>';
		}
		if($_SESSION["perfil"] == "Administrador"){

			echo'
			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Operador"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Conductores</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>
				<ul class="treeview-menu">
					<li>

						<a href="conductores">

							<i class="fa fa-car"></i>
							<span>Administrar</span>

						</a>

					</li>


					<li>

						<a href="busqueda">
							
							<i class="fa fa-search"></i>
							<span>Busqueda</span>

						</a>

						</li>
						</ul>';

		}

		/*if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="productos">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>';

		}*/

		if($_SESSION["perfil"] == "Administrador"){

			/*echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-file-excel-o"></i>
					
					<span>Excel</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">';
					
					echo '<li>

						<a href="importar-excel">
							
							<i class="fa fa-upload"></i>
							<span>Importar</span>

						</a>

					</li>';

					echo '<li>

						<a href="http://127.0.0.1/admcbf/list.php" target="_blank">
							
							<i class="fa fa-download"></i>
							<span>Descargar</span>

						</a>

					</li>';*/

		if($_SESSION["perfil"] == "Administrador"){

			echo '<!--<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="busqueda">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar de conductores</span>

						</a>

					</li>

					<!--<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>-->';
}

					if($_SESSION["perfil"] == "Administrador"){

					/*echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>';*/

					}

				

				echo '</ul>

			</li>';


		}


		?>

		</ul>

	 </section>

</aside>