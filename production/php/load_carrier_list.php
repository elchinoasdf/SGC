<?PHP
	//PHP FILE LOAD LIST OF CARRIERS
	include("connection.php");
	$vquery = "SELECT * FROM tbl_client";
	$data = $conn->query($vquery);
	while($row = $data->fetch_object()) {
		if ($row->tipo_Perfil == "E") {
			// echo "<option>".$row->nombre." ".$row->apellido." (".$row->patente.")</option>";	
			echo "<option value='".$row->username."'>".$row->nombre." ".$row->apellido." (".$row->patente.")</option>";
		};
	};
?>