<?PHP
	// $conn : variable de conexión con el servidor
	include ("connection.php");
	session_start();
	$usrid = $_SESSION['usrid'];
	echo $usrid;
	$table_data = $conn->query("SELECT * FROM tbl_client WHERE usr_id='".$usrid."'");
	$data = $table_data->fetch_object();
	echo "<script type='text/javascript'>
		document.getElementById('username').value='".$data->username."';
		document.getElementById('password').value='".$data->password."';
		document.getElementById('first_name').value='".$data->nombre."';
		document.getElementById('last_name').value='".$data->apellido."';
		document.getElementById('patente').value='".$data->patente."';
		document.getElementById('contractor').value='".$data->contrato."';
		document.getElementById('profile').value='".$data->tipo_Perfil."';
	</script>";
?>