<?PHP
// ADD CARRIER PHP FILE
	$username = $_POST["username"];
	$password = $_POST["password"];
	$firstname = $_POST["first_name"];
	$lastname = $_POST["last_name"];
	$licplate = $_POST["patente"];
	$contractor = $_POST["contractor"];
	$profile = $_POST["profile"];
	// echo "carrier agregado </br>";
	// echo $username  . "</br>";
	// echo $password . "</br>";
	// echo $firstname . "</br>";
	// echo $lastname . "</br>";
	// echo $licplate . "</br>";
	// echo $contractor . "</br>";
	// echo $profile . "</br>";
	// include_once("connection.php");
	$query = "INSERT INTO tbl_client VALUES (NULL, '".$username."', '".$password."', '".$firstname."', '".$lastname."', '".$licplate."', '0', ".$contractor."', '".$profile."')";
	echo $query;
	// $conn->query($query)
	
?>