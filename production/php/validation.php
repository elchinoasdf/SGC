<?PHP
// validation script
	session_start();
	// Voids browser visualization of this code
	if (!isset($_POST['txtUsername'])) {
		header("location: ../index.php");
	};
	// CODE
	include_once("connection.php");
	if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) {
		$username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
		$_SESSION['user'] = $username;
		$query = "SELECT username, password, tipo_Perfil FROM tbl_client ". 
        " WHERE username = '$username' AND password = '$password'";
		
		$result = mysqli_query($conn, $query);
		
		if($result->num_rows == 1) { //agregado por mí
			// echo "success <br/>";
			echo '<div class="alert alert-success" role="alert"><strong>Bien!</strong> Autenticación ha sido exitosa.</div>';
			$var = $result->fetch_object();
			$profile = $var->tipo_Perfil;
			$_SESSION['valid'] = True;
			switch($profile) {
				case "A":
					header("location: ../homeadmin.php");
					break;
				case "B":
					header("location: ../homeadmin.php");
					break;
				case "C":
					header("location: ../homeadmin.php");
					break;
				case "D":
					header("location: ../homeadmin.php");
					break;
				case "E":
					header("location: ../homecarrier.php");
					break;
			}
		}
		else {
			// echo "failed <br/>";
			$_SESSION['sqlerror'] = mysql_error($conn, $query);
			echo '<div class="alert alert-danger" role="alert"><strong>Opps!</strong> Hubo un error en la autenticación.'.$_SESSION['sqlerror'].'</div>';
			$_SESSION['valid'] = False;
			
			header("location: ../index.php");
			// header("location: index.php");
		}
	}
?>