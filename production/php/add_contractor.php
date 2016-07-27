<?PHP
// ADD CONTRACTOR PHP FILE
	$contname = $_POST["contname"];
	$comments = $_POST["comments"];
	// echo "carrier agregado </br>";
	// echo $username  . "</br>";
	// echo $password . "</br>";
	// echo $firstname . "</br>";
	// echo $lastname . "</br>";
	// echo $licplate . "</br>";
	// echo $contractor . "</br>";
	// echo $profile . "</br>";
	// include_once("connection.php");
	$query = "INSERT INTO tbl_contratos VALUES (NULL, '".$contname."', '".$comments."')";
	echo $query;
	// $conn->query($query)
	
?>