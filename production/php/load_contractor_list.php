<?PHP
	//PHP FILE LOAD LIST OF CONTRACTORS
	include("connection.php");
	$vquery = "SELECT * FROM tbl_contratos";
	$data = $conn->query($vquery);
	while($row = $data->fetch_object()) {
		echo "<option value=''>".$row->nombre_contrato."</option>";
	};
?>