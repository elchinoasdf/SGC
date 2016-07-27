<?PHP 
// PHP SCRIPT SAVES UPDATED INFORMATION ABOUT CONTRACT IDENTIFIED BY 'ID' PASSED VIA SESSION
// $_SESSION['cont_id'] is the variable used to identify contractor
	session_start();
	include "connection.php";
	//CATCH INFORMATION TO UPDATE
	$c_name = $POST['contract_name'];
	$c_comm = $POST['comments'];
	$query = "UPDATE tbl_contratos SET nombre_contrato='".$c_name."', comments='".$c_comm."' WHERE cont_id=".$_SESSION['cont_id']."'";
	if ($conn->query($sqlquery) === TRUE) {
		$conn->query($sqlquery);
		echo "<script type='text/javascript'>alert('Registro actualizado de forma exitosa.')</script>";
	} else {
		echo "<script type='text/javascript'>alert('Error al actualizar el registro.')</script>";
	};
	header("location: ../homeadmin.php");
?>