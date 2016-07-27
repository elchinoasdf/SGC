<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SGC | AM Ingeniera </title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	<?PHP
		session_start();
		if (isset($_SESSION['valid']) && $_SESSION['valid'] == False) {
			echo '<div class="alert alert-danger" role="alert"><strong>Opps!</strong> Hubo un error en la autenticación. ASDF</div>';
			unset($_SESSION['valid']);
		};
	?>
    <div class="container">

      <!-- <form action="<?PHP $_SERVER['PHP_SELF'] ?>" method="post" class="form-signin"> -->
	<div class="x_panel col-md-12 col-sm-12 col-xs-12">  
	  <div class="col-md-4 col-sm-2 col-xs-1"></div>
	  <form action="php/validation.php" method="post" class="form-signin col-md-4 col-sm-8 col-xs-12">
        <h2 class="form-signin-heading">Ingrese sus datos</h2>
        <input type="text" name="txtUsername" class="form-control" placeholder="Nombre de Usuario" required autofocus />
		<br/>
		<input type="password" name="txtPassword" class="form-control" placeholder="Contraseña" required />
		<br/>
		<input type="submit" class="btn btn-lg btn-primary btn-block" value="Ingresar"/>
      </form>
	  <div class="col-md-4 col-sm-2 col-xs-1"></div>
    </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
