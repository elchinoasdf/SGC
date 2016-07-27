<?PHP
	//PHP ROTUINE FOR DELETING USERS FROM tbl_client
	include("connection.php");
	$shpmnt = $_GET['id'];
	echo $usr;
	$conn->query("DELETE FROM tbl_shipments WHERE id='" . $shpmnt . "'");
	header("location: ../homeadmin.php");
?>