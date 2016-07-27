<?PHP 
//PHP FILE TAKES INFORMATION OF NEW SHIPMENT AND SAVES IT INTO DATABASE

//information from previous form
$v_origin = $_POST['origen'];
$v_destin = $_POST['destino'];
$v_pickdt = date_adapt($_POST['pickup_date']);		// dates are adapted to be saved on database via function.
$v_dropdt = date_adapt($_POST['drop_date']);		// dates are adapted to be saved on database via function.
$v_shipsz = $_POST['shipment_size'];

include("connection.php"); // connection stablished with database

//query is stablished
$query = "INSERT INTO `tbl_shipments` 
			(`id`, `origen`, `destino`, `fecha_carga_req`, `fecha_entrega_req`, `ton_carga_req`, `usuario`, `fecha_carga_real`, `fecha_entrega_real`, `ton_carga_real`, `estado`)  
			VALUES (NULL, '".$v_origin."', '".$v_destin."', '".$v_pickdt."', '".$v_dropdt."', '".$v_shipsz."', NULL,  NULL,  NULL,  NULL, 'Disponible');";
//query run
if ($conn->query($query) === TRUE) {

	 echo "<script type='text/javascript'>alert('Registro agregado de forma exitosa.')</script>";
 } else {
	 echo "<script type='text/javascript'>alert('Error al agregar el registro.')</script>";
 };
 header("location: ../homeadmin.php"); // back to homepage

// FUNCTION STABLISHMENT
function date_adapt($input) {
	// input (vardate) is a string and coverted to datetime type
	if ($input != "") {
	 $vardate = date_create_from_format('d/m/Y H:i', $input);
	 $vardate_format = $vardate->format('Y-m-d H:i:s');
	 return $vardate_format;
	} else{
		return "0000-00-00 00:00:00";
	};
 };
 ?>