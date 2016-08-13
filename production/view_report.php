<!DOCTYPE HTML>
<html lang="en">
<?PHP session_start(); 
// TRY TO CATCH POST VARIABLES
	if (isset($_POST['startDate'])) {
		$startDate = $_POST['startDate'];
		}
	if (isset($_POST['endDate'])) {
		$endDate = $_POST['endDate'];
		}
	if (isset($_POST['carrier_select'])) {
		$carrier = $_POST['carrier_select'];
		}
?>
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
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="http://cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> 
	  
	<!-- Bootstrap SelectPicker -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.css" />
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.js"></script>
</head>
<body onload="js_load_vars()">
<!-- HTML BODY -->
	<div class="container body">
		<div class="main_container">
			<div class="right_col">
			<!-- page content-->
			<!-- Upper Menu -->
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
				</div>
			<!-- Real Body -->
				<!-- Menu Div -->
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2><a class="collapse-link">Información <i class="fa fa-chevron-up" style="font-size: 10px"></i></a><small>del reporte</small></h2>
								<div class="clearfix"></div>
								<div clasS="x_content collapse in">
									<form action="" method="post">
										<div class="form-group">
											<label class="control-label col-md-12 col-sm-12 col-xs-12" align="left">Fechas del reporte<span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 col-xs-12" name="report_dateRange" id="report_dateRange">
												<div class="input-group">
												<input type="text" name="report_dateRange" id="report_dateRange" class="form-control avoidreadonlystyle" readonly />
												<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
												<input type="hidden" id="startDate" name="startDate" />
												<input type="hidden" id="endDate" name="endDate" />
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-12 col-sm-12 col-xs-12" align="left">Transportista</label>
											<div class="col-md-6 col-sm-6 col-xs-12">
											<div class="form-group">
											  <select class="selectpicker form-control" id="carrier_select" name="carrier_select">
												  <option value='Todos'>Todos</option>
												  <?PHP include_once ("php/load_carrier_list2.php");?>
											  </select>
											 </div> 
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12 col-sm-12 col-xs-12">
												
												<button type="button" onclick="window.location.href='homeadmin.php'" class="btn btn-md btn-primary">Volver</button>
												<button type="submit" class="btn btn-md btn-success">Actualizar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Table Div -->
				<div class="row">
					<div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_title">
									<p><h1/><h2>Tabla de Reporte</h2></p>
									<div class="clearfix"></div>
									<div class="x_content">
										<div class="table-responsive" style="width:100&">
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
													</tr>
												</thead>
												<tbody>
													<?PHP 
													// if (isset($_POST['startDate']) && isset($_POST['endDate']) && isset($_POST['carrier_select'])) {
													if(isset($_POST['submit']) or (isset($startDate) && isset($endDate) && isset($carrier))){
														include "php/tbody_report.php";
														}
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?PHP
if (isset($carrier) && $carrier != null) {
	echo 
		"<script type=text/javascript>
			$('[name=carrier_select]').val('$carrier');
		</script>";
}
?>	
<!-- JAVASCRIPTS -->
	<script type="text/javascript">
		function js_load_vars() {
			<?PHP
			if (isset($startDate) && isset($endDate) && $startDate != null && $endDate != null) {
			echo "
			$('input[name=startDate]').val('$startDate');
			$('input[name=endDate]').val('$endDate');
			";};
			?>
		}
	</script>
	<!-- DATERANGEPICKER --> 
	<script type="text/javascript">
			$('input[name="report_dateRange"]').daterangepicker({
				ignoreReadonly: true,
				locale: {
					format: 'DD/MM/YYYY'},
				<?PHP
				if (isset($startDate) && $startDate != null) {
					echo "startDate: '$startDate',";
					
					}
				if (isset($endDate) && $endDate != null) {
					echo "endDate: '$endDate',";
					}
				?>
			}, function(start, end, label) {
				console.log("New date range selected: ' + start.format('DD/MM/YYYY') + ' to ' + end.format('DD/MM/YYYY') + ' (predefined range: ' + label + ')");
				$('[name=startDate]').val(start.format('DD/MM/YYYY'));
				$('[name=endDate]').val(end.format('DD/MM/YYYY'));
			});
	</script>
	<!-- SELECTPICKER -->
	<script type="text/javascript">
		$(document).ready(function() {
	
			/* $('select').selectpicker();
			$('selectpicker').selectpicker(); */
		});
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