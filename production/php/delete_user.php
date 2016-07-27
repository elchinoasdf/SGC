<?PHP
	//PHP ROTUINE FOR DELETING USERS FROM tbl_client
	include("connection.php");
	$usr = $_GET['id'];
	echo $usr;
	$conn->query("DELETE FROM tbl_client WHERE username='" . $usr . "'");
	header("location: ../homeadmin.php");
?>