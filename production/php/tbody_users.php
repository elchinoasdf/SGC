<?PHP
	// $conn : variable de conexión con el servidor
	include ("connection.php");
	$table_data = $conn->query("SELECT * FROM tbl_client");
	$rows = $table_data->num_rows;
	while($row = $table_data->fetch_object()) {
 		echo ' <tr>
				<td class="text-center">' . $row->usr_id . '</td>
				<td class=" ">' . $row->username . '</td>
				<td class=" ">' . $row->nombre . '</td>
				<td class=" ">' . $row->apellido .'</td>
				<td class=" ">' . $row->patente.'</td>
				<td class=" ">' . $row->contrato .'</td>
				<td class="text-center">' . $row->tipo_Perfil .'</td>
				<td class="last text-center">
					<a href="carrierupdate.php?id='.$row->usr_id.'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Modificar </a>
					<a onclick="conf_user_delete('.$row->usr_id.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
					</td>
			  </tr>'; 
	}
?>