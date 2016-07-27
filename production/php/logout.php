<?PHP
	//PHP FILE FOR LOGOUT
	session_start();
	session_destroy();
	header("location: ../index.php");
?>