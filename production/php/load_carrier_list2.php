<?PHP
	//PHP FILE LOAD LIST OF CARRIERS
	include("connection.php");
	$vquery = "SELECT * FROM tbl_client";
	$contracts = $conn->query("SELECT nombre_contrato FROM tbl_contratos");
	$data = $conn->query($vquery);
	while ($group = $contracts->fetch_object()){
		echo "<optgroup label='".$group->nombre_contrato."'>";
		echo "<option value='".$group->nombre_contrato."'>Todos en ".$group->nombre_contrato."</option>";
		while($row = $data->fetch_object()) {
			if ($row->tipo_Perfil == "E") {
				// echo "<option>".$row->nombre." ".$row->apellido." (".$row->patente.")</option>";	
				echo "<option value='".$row->username."'>".$row->nombre." ".$row->apellido." (".$row->patente.")</option>";
			};
		};
		echo "</optgroup>";
	};
?>