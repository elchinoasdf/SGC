<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGC | AM Ingenieria </title>

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
	<link href="../build/css/custom.mine.css" rel="stylesheet">
	
	<!-- Include Required Prerequisites -->
	
	<!--Bootstrap DateRangePicker -->
      <link rel="stylesheet" type="text/css" media="all" href="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> 
	  
	<!-- Bootstrap SelectPicker -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.css" />
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.js"></script>	
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
            </div>
			<!--NUEVO DIV DE PRUEBA -->
			<div class="clearfix"></div>
			<div class="row">
			<div class="x_panel">
				<ul>
					<li class="btn btn-default"><a class="collapse-link">BOTON_1</a></li>
					<li class="btn btn-default" data-toggle="collapse" data-target="#panel_prueba">BOTON_2</li>
					<li class="btn btn-default" data-toggle="collapse" data-target="#panel_prueba">BOTON_3</li>
				</ul>
				</br>
				<div id="panel_prueba" class="x_content collapse">
					<div class="x_title"></div>
					<h2>Generar Reporte de Cargas Realizadas</h2>
					<form id="form_report" data-parsley-validate="" class="form-horizontal form-label-left" action="php/report.php" method="POST">



									<div class="form-group">
										<label class="control-label col-md-4 col-sm-3 col-xs-12" align="left">Fechas del reporte <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12" name="report_dateRange" id="report_dateRange">
											<div class="input-group">
											<input type="text" name="report_dateRange" id="report_dateRange" class="form-control avoidreadonlystyle" readonly />
											<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
											</div>
										</div>
									</div>
	
									<div class="form-group"> <!-- AUTOMATIZAR EL LLENADO DE ESTE LISTADO -->
										<label class="control-label col-md-4 col-sm-3 col-xs-12" align="left">Contrato </label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
										  <select class="form-control selectpicker" id="carrier_select" name="carrier_select">
											  <option value='Todos'>Todos</option>
											  <option value='usuario2'>Transportista 1</option>
											  <option value='usuario3'>Transportista 2</option>
											  <option value='usuario4'>Transportista 3</option>
										  </select>
										 </div> 
										</div>
									  </div>
					
					<div class="clearfix"></div>
					<div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <button type="submit" class="btn btn-success">Generar Reporte</button>
                        </div>
                      </div>
					</form>
				</div>
			</div>
			</div>
			<!-- FIN DIV DE PRUEBA-->
            <div class="clearfix"></div>

			<div class="row"> <!-- TABLA DE CARGAS -->
				<div class="clearfix"></div>
				<div  class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div id="Tabla1" class="x_title">
                    <!--
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
					-->
                  <h2><a class="collapse-link">Tabla de Cargas <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>Todas las cargas</small></h2>
				  <div class="clearfix"></div>
				  <div class="x_content collapse in">

                    <div class="table-responsive" stlye="width: 120%">
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
							<!--
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
							-->
							<h2><a class="collapse-link">Contratos <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>Todos los contratistas</small></h2>
							<div class="clearfix"></div>
							<div class="x_content collapse in">
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
                    <!--
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
				  -->
				  <h2><a class="collapse-link">Tabla de Usuarios <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>Todos los usuarios</small></h2>
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
	<!-- DATERANGEPICKER --> 
	
	<script type="text/javascript">
			$('input[name="report_dateRange"]').daterangepicker({
				ignoreReadonly: true,
				locale: {
					format: 'DD/MM/YYYY'},
			});
	</script>
	
	<!-- SELECTPICKER -->

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