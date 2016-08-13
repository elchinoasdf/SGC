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
                    <li><a href="php/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                </ul>
            </nav>
          </div>
		  <div class="title_left">
              <h3>GENERAL <small>Panel de Control General</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

			
			<div class="row"> <!-- TABLA DE CARGAS DISPONIBLES-->
				<div class="clearfix"></div>
				<div  class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="Tabla1" class="x_title">
                    <!--
					<h2>Cargas Disponibles <small>Todas las cargas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
					-->
					<h2><a class="collapse-link">Cargas Disponibles <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>Todas las cargas</small></h2>
                    <div class="clearfix"></div>
                  
				  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
							<th class="column-title text-center" style="width: 5%">ID </th>
							<th class="column-title">Origen </th>
							<th class="column-title">Destino </th>
							<th class="column-title text-center">Fecha Carga (Requerida) </th>
							<th class="column-title text-center">Fecha Entrega (Requerida) </th>
							<th class="column-title text-center">Carga (Requerida) </th>
							<th class="column-title last text-center" style="width: 20%"> Acción </th>
                          </tr> 
                        </thead>
							<tbody>
								<?php
									include ("php/tbody_availableshipments.php");
								?>
							</tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="row"> <!-- TABLA DE CARGAS ASIGNADAS-->
				<div class="clearfix"></div>
				<div  class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="Tabla1" class="x_title">
                    <!--
					<h2>Mis Cargas <small>Todas las cargas</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
					-->
					<h2><a class="collapse-link">Mis Cargas <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>Todas las cargas</small></h2>
                    <div class="clearfix"></div>
                  
				  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
							<th class="column-title text-center" style="width: 5%">ID </th>
							<th class="column-title">Origen </th>
							<th class="column-title">Destino </th>
							<th class="column-title text-center">Fecha Carga (Requerida) </th>
							<th class="column-title text-center">Fecha Entrega (Requerida) </th>
							<th class="column-title text-center">Carga (Requerida) </th>
							<th class="column-title text-center">Fecha&nbspCarga (Real) </th>
							<th class="column-title text-center">Fecha&nbspEntrega (Real) </th>
							<th class="column-title text-center">Carga (Real) </th>
							<th class="column-title text-center"> Estado </th>
							<!--th class="column-title last text-center" style="width: 20%"> Acción </th-->
							<th class="column-title last text-center"> Acción </th>
                          </tr> 
                        </thead>
							<tbody>
								<?php
									include ("php/tbody_carriershipments.php");
								?>
							</tbody>
                      </table>
                    </div>
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