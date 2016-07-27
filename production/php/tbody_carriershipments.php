<?PHP
	// $conn : variable de conexión con el servidor
	include("connection.php");
	$table_data = $conn->query("SELECT * FROM tbl_shipments WHERE usuario='".$_SESSION['user']."'");
	$rows = $table_data->num_rows;
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
			$command= "";
			$command=' <tr>
					<td class="text-center">' . $row->id . '</td>
					<td class=" ">' . $row->origen . '</td>
					<td class=" ">' . $row->destino . '</td>
					<td class="text-center">' . $pr_date .'</td>
					<td class="text-center">' . $dr_date .'</td>
					<td class="text-center">' . $row->ton_carga_req .'</td>
					<td class="text-center">' . $pa_date . '</td>
					<td class="text-center">' . $da_date . '</td>
					<td class="text-center">' . $row->ton_carga_real . '</td>
					<td class="text-center"><a class="btn btn-'. fpc($row->estado) .' disabled btn-xs"> '. $row->estado .' </a></td>
					<td class="last text-center">
						<a href="shipmentinfo.php?id='.$row->id.'" class="btn btn-info btn-xs"/><i class="fa fa-info"></i> Información </a>
						<a href="shipmentupdate.php?id='.$row->id.'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Actualizar </a>';
						
			if ($row->estado == "Programado"){
				$command = $command.
						'<a href="drop_shipment.php?id='.$row->id.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
						</td>
					</tr>';
			} else{
				$command = $command.
						'</td>
					</tr>';
			}
			echo $command;
	}
	// function carrier_name($usrname){
			// //Función para recupear el nombre del transportista y su placa patente
			// include ("connection.php");
			// $data = $conn->query("SELECT * FROM tbl_client WHERE username='" . $usrname . "'"); //Consulta a DB tbl_client por datos para valor de 'usuario'
			// $data_rows = $data->num_rows;
			// if ( $data_rows == 1){
				// $data_obj = $data->fetch_object();
				// $full_name = $data_obj->nombre . " " . $data_obj->apellido; //concatenando campos 'nombre' y 'apellido'
				// $plate_num = $data_obj->patente; //Hcampo 'patente'
				// $carrier_name =  " <small>".$full_name."</small><br>". $plate_num;
			// } elseif($data_rows > 1){
				// echo "ERROR: Hubo mas de 1 coincidencia para el usuario";
				// $carrier_name = "ERROR";
			// } else {
				// $carrier_name = "Sin usuario";
			// };	
		// return $carrier_name;
	// }
	// function fpc($status) {
		// if ($status != ""){
			// switch ($status){
				// case "Disponible":
					// $type= "info";
					// break;
				// case "Programado":
					// $type= "primary";
					// break;
				// case "En Transito":
					// $type= "warning";
					// break;
				// case "Entregado":
					// $type= "success";
					// break;
			// }
		// } else{
			// $type = "Disponible";
		// }
		// // $type = "success";
		// return $type;
	// }
?>