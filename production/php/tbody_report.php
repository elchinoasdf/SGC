<?PHP
	// $conn : variable de conexión con el servidor
	
	// Variables passed via post
	// $_POST['carrier_select']		MUST BE USERNAME VALUE, NOT FULL NAME
	// $_POST['startDate']		
	// $_POST['end'Date]
	//
	// if $_POST['carrier'] == 'Todos' then query is trucated without carrier filter.
	//
	// Setup of date limit for report
	$d_start = stringToDateTime($_POST['startDate']);	// $_POST['startDate'];	//
	$d_end = stringToDateTime($_POST['endDate']);		// $_POST['endDate'];		//
	//
	// Setup of query string according to $_POST['carrier'] value
	$query = "SELECT * FROM tbl_shipments WHERE fecha_carga_req >='". $d_start ."' AND fecha_carga_req <='". $d_end."'";
	if ($_POST['carrier_select'] != 'Todos') {
		$carrier = $_POST['carrier_select'];
		$query = $query. " AND usuario='".$carrier."'";
	 };
	include("connection.php");
	// $table_data = $conn->query("SELECT * FROM tbl_shipments");
	$table_data = $conn->query($query);
	$rows = $table_data->num_rows;
	// $ton_req = 0;
	// $ton_real = 0;
	while($row = $table_data->fetch_object()) {
 		if ($row->fecha_carga_req != '0000-00-00 00:00:00') {
			$vdate = date_create($row->fecha_carga_req);
			$pr_date = $vdate->format('d/m/Y H:i');
			} else {
				$pr_date = '00/00/0000 00:00';
			};
		if ($row->fecha_entrega_req != '0000-00-00 00:00:00') {
			$vdate = date_create($row->fecha_entrega_req);
			$dr_date = $vdate->format('d/m/Y H:i');
			} else {
				$dr_date = '00/00/0000 00:00';
			};
		if ($row->fecha_carga_real != '0000-00-00 00:00:00' && $row->fecha_carga_real != NULL) {
			$vdate = date_create($row->fecha_carga_real);
			$pa_date = $vdate->format('d/m/Y H:i');
			} else {
				$pa_date = '00/00/0000 00:00';
			};
		if ($row->fecha_entrega_real != '0000-00-00 00:00:00' && $row->fecha_entrega_real != NULL) {
			$vdate = date_create($row->fecha_entrega_real);
				$da_date = $vdate->format('d/m/Y H:i');
			} else {
				$da_date = '00/00/0000 00:00';}
			;
		// $ton_req = $ton_req + $row->ton_carga_req;
		// $ton_real = $ton_real + $row->ton_carga_real;
		echo ' <tr>
				<td class="text-center">' . $row->id . '</td>
				<td class=" ">' . $row->origen . '</td>
				<td class=" ">' . $row->destino . '</td>
				<td class="text-center">' . $pr_date .'</td>
				<td class="text-center">' . $dr_date .'</td>
				<td class="text-center">' . $row->ton_carga_req .'</td>
				<td class=" ">' . carrier_name($row->usuario) . '</td>
				<td class="text-center">' . $pa_date . '</td>
				<td class="text-center">' . $da_date . '</td>
				<td class="text-center">' . $row->ton_carga_real . '</td>
				<td class="text-center"><a class="btn btn-'. fpc($row->estado) .' disabled btn-xs"> '. $row->estado .' </a></td>
			  </tr>'; 
	}
	// echo 
	//	"<script> 
	//	document.getElementById('carga_requerida').value =". $ton_req.";
	//	document.getElementById('carga_realizada').value =". $ton_real.";
	//	</script>";
	function carrier_name($usrname){
			//Función para recupear el nombre del transportista y su placa patente
			include ("connection.php");
			$data = $conn->query("SELECT * FROM tbl_client WHERE username='" . $usrname . "'"); //Consulta a DB tbl_client por datos para valor de 'usuario'
			$data_rows = $data->num_rows;
			if ( $data_rows == 1){
				$data_obj = $data->fetch_object();
				$full_name = $data_obj->nombre . " " . $data_obj->apellido; //concatenando campos 'nombre' y 'apellido'
				$plate_num = $data_obj->patente; // campo 'patente'
				$carrier_name =  " <small>".$full_name."</small><br>". $plate_num;
			} elseif($data_rows > 1){
				echo "ERROR: Hubo mas de 1 coincidencia para el usuario";
				$carrier_name = "ERROR";
			} else {
				$carrier_name = "Sin usuario";
			};	
		return $carrier_name;
	}
	function fpc($status) {
		if ($status != ""){
			switch ($status){
				case "Disponible":
					$type= "info";
					break;
				case "Programado":
					$type= "primary";
					break;
				case "En Transito":
					$type= "warning";
					break;
				case "Entregado":
					$type= "success";
					break;
			}
		} else{
			$type = "Disponible";
		}
		// $type = "success";
		return $type;
	}
	 // FUNCTION CHANGES DATE FORMAT FROM STRING TO DATETIME
	function stringToDateTime ($date_string) {
		if ($date_string != "") {
			$vardate = date_create_from_format('d/m/Y', $date_string);
			$vardate_format = $vardate->format('Y-m-d H:i:s');
			return $vardate_format;
		} else{
			return "0000-00-00 00:00:00";
		};
	}
?>