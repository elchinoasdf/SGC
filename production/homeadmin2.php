<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGC | AM Ingeniera </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.asdf.css" rel="stylesheet">

  </head>
  <body>
    <div class="container body">
      <div class="main_container">
        <!-- page content -->
          <div class="right_col">
            <div class="page-title">
           <div class="nav_menu nav navbar-right">
            <nav>
              <ul class="nav navbar-nav navbar-right panel_toolbox">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/login_user.png" alt="">
						<?php include "php/name_id.php"; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="php/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                </ul>
            </nav>
          </div>
		  <div class="x_panel col-md-12 col-sm-12 col-xs-12">
              <!--
			  <h3>GENERAL <small>Panel de Control General</small></h3>
              -->

			<ul class="x_content nav navbar-left navbar-nav panel_toolbox btn-lg col-xs-3">
			  <li><a href="#" class="btn btn-default">GENERAL</a></li>
			  <li><a href="#" class="btn btn-default">INFORME</a></li>
			  <li><a href="#" class="btn btn-default">OTRO PA</a></li>
			</ul>

		  </div>
            </div>

            <div class="clearfix"></div>

			<div class="row"> <!-- TABLA DE CARGAS -->
				<div class="clearfix"></div>
				<div  class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="Tabla1" class="x_title">
                    <h2>Tabla de Cargas <small>Todas las cargas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  
				  <div class="x_content">

                    <div class="table-responsive"  stlye="width: 120%">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
							<th class="column-title text-center" style="width: 5%">ID </th>
							<th class="column-title">Origen </th>
							<th class="column-title">Destino </th>
							<th class="column-title text-center">Fecha Carga (Requerida) </th>
							<th class="column-title text-center">Fecha Entrega (Requerida) </th>
							<th class="column-title text-center">Carga (Requerida) </th>
							<th class="column-title" style="width: 10%">Transportista </th>
							<th class="column-title text-center">Fecha&nbspCarga (Real) </th>
							<th class="column-title text-center">Fecha&nbspEntrega (Real) </th>
							<th class="column-title text-center">Carga (Real) </th>
							<th class="column-title text-center">Estado </th>
							<th class="column-title last text-center" style="width: 23%"> Acción </th>
                          </tr> 
                        </thead>
							<tbody>
								<?php
									include ("php/tbody_shipments.php");
								?>
							</tbody>
                      </table>
                    </div>
					<ul class="nav navbar-right panel_toolbox">
						<a href="add_shipment.php" class="btn btn-dark btn-sm"><i class="fa fa-tasks" ></i>&nbsp Agendar Nueva </a></p>
					</ul>
                  </div>
                </div>
              </div>
            </div>
			</div>
			<div class="row"> <!-- TABLA DE CONTRATISTAS-->
				<div class="clearfix"></div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div id="Tabla1" class="x_title">
							<h2>Contratos<small>Todos los contratisas</small></h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="#">Settings 1</a></li>
										<li><a href="#">Settings 2</a></li>
									</ul>
								</li>
								<li><a class="close-link"><i class="fa fa-close"></i></a></li>
							</ul>
							<div class="clearfix"></div>
							<div class="x_content">
								<div class="table-responsive">
									<table class="table table-striped jambo_table bulk_action">
										<thead>
										  <tr class="headings">
											<th class="column-title text-center" style="width: 5%">ID </th>
											<th class="column-title">Contrato </th>
											<th class="column-title">Comentarios </th>
											<th class="column-title last text-center" style="width: 23%"> Acción </th>
										  </tr> 
										</thead>
										<tbody>
											<?php
												include ("php/tbody_contractor.php");
											?>
										</tbody>
									</table>
								</div>
								<ul class="nav navbar-right panel_toolbox">
									<a href="add_contractor.php" class="btn btn-dark btn-sm"><i class="fa fa-users" ></i>&nbsp Agregar Nuevo </a></p>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="row"> <!-- TABLA DE USUARIOS -->
              <div class="clearfix"></div>
              <div  class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="Tabla1" class="x_title">
                    <h2>Tabla de Usuarios <small>Todos los contratos</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  
				  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
							<th class="column-title text-center" style="width: 5%">ID </th>
							<th class="column-title">Usuario </th>
							<th class="column-title">Nombre </th>
							<th class="column-title">Apellido </th>
							<th class="column-title">Patente </th>
							<th class="column-title">Contrato </th>
							<th class="column-title text-center">Perfil </th>
							<th class="column-title last text-center" style="width: 23%"> Acción </th>
                          </tr> 
                        </thead>
							<tbody>
								<?php
									include ("php/tbody_users.php");
								?>
							</tbody>
                      </table>
                    </div>
					<ul class="nav navbar-right panel_toolbox">
						<a href="add_carrier.php" class="btn btn-dark btn-sm"><i class="fa fa-user" ></i>&nbsp Agregar Nuevo </a></p>
					</ul>
                  </div>
                </div>
              </div>
            </div>
			</div>
			<div class="clearfix"></div>
        </div>
      </div>
	  </div>
	<!-- CONFIRMATION SCRIPT PRIOR CONTRACTOR DELETION-->
	<script type="text/javascript">
		function conf_contract_delete(id){
			var ans = confirm("Seguro que desea eliminar todos los datos de este contrato? Se eliminarán los usuarios asociados.");
			if (ans) {
				window.location = "php/delete_cont.php?id=" + id;
			} else {
				alert ('Se conservarán los datos');
			}
		}
	</script>
	<!-- CONFIRMATION SCRIPT PRIOR USER DELETION-->
	<script type="text/javascript">
		function conf_user_delete(id){
			var ans = confirm("Seguro que desea eliminar este usuario? Todos los datos serán eliminados de forma permanente.");
			if (ans) {
				window.location = "php/delete_user.php?id=" + id;
			} else {
				alert ('Se conservarán los datos');
			}
		}
	</script>
	<!-- CONFIRMATION SCRIPT PRIOR SHIPMENT DELETION-->
	<script type="text/javascript">
		function conf_shipment_delete(id){
			var ans = confirm("Seguro que desea eliminar esta carga? Todos los datos serán eliminados de forma permanente.");
			if (ans) {
				window.location = "php/delete_shipment.php?id=" + id;
			} else {
				alert ('Los datos serán conservados');
			}
		}
	</script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>