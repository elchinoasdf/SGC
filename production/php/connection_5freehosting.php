<?php
// MyQSLi Connection
$servername = "bh-47.webhostbox.net"; //replace it with your database server name
$username = "u8547786";  //replace it with your database username
$password = "3,catorce";
// $password = "L6yrSjrR";  //replace it with your database password
$dbname = "u8547786_zenami";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>