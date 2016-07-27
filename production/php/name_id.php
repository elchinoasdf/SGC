<?php
	include_once("connection.php");
	$usrname = $_SESSION['user'];
	$info = $conn->query("SELECT * FROM tbl_client WHERE username= '" . $usrname . "'");
	$row = $info->fetch_assoc();
	// echo '<h2>' . $row["nombre"] . " " . $row["apellido"] . '</h2>';
	echo $row["nombre"] . " " . $row["apellido"];
?>