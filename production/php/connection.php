<?php
// MyQSLi Connection
	// FREEMYSQLHOSTING
		$servername = "sql3.freemysqlhosting.net"; //replace it with your database server name
		$username = "sql3128360";  //replace it with your database username
		$password = "ul576dusRA";  //replace it with your database password
		$dbname = "sql3128360";
	// LOCALHOST
		// $servername = "sgc-am.dynu.com:7070";
		// $username = "zionenami";
		// $password = "yTMzZY8X";
		// $dbname = "zionenami";
		
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>