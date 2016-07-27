<?PHP
// PHP FILE LOADS INFORMATION FROM CONTRACTOR IDENTIFIED BY 'CONTRACTOR_ID'

	include ("connection.php");
	
	$query = $conn->query("SELECT * FROM tbl_contratos WHERE id_cont='".$_SESSION['cont_id']."'");
	$data = $query->fetch_object();
	if ($data->nombre_contrato != Null){
		echo "<script type='text/javascript'>document.getElementById('contract_name').value='".$data->nombre_contrato."';</script>";
	};
	if ($data->comments != Null) {
		echo "<script type='text/javascript'>document.getElementById('comments').value='".$data->comments."';</script>";
	};
?>