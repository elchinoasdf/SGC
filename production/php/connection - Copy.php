<?php
// MyQSLi Connection
$servername = "127.0.0.1"; //replace it with your database server name
$username = "ziontormin";  //replace it with your database username
$password = "asdfasdf";  //replace it with your database password
$dbname = "ziontormin";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>