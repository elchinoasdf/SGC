<?PHP
	//PHP ROTUINE FOR DELETING USERS FROM tbl_contratos
	include("connection.php");
	$cont_id = $_GET['id'];
	// echo $cont_id;
	$cont_name = $conn->("SELECT nombre_contrato FROM tbl_contratos WHERE id_cont='".$cont_id."'");
	$conn->query("DELETE FROM tbl_client WHERE contrato='" . $cont_name . "'");
	$conn->query("DELETE FROM tbl_contratos WHERE username='" . $con_id . "'");
	header("location: ../homeadmin.php");
?>