<?PHP
	// $conn : variable de conexión con el servidor
	include ("connection.php");
	$table_data = $conn->query("SELECT * FROM tbl_contratos");
	$rows = $table_data->num_rows;
	while($row = $table_data->fetch_object()) {
 		echo ' <tr>
				<td class="text-center">' . $row->id_cont . '</td>
				<td class=" ">' . $row->nombre_contrato . '</td>
				<td class=" ">' . $row->comments . '</td>
				<td class="last text-center">
					<a href="contractorupdate.php?id='.$row->id_cont.'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Modificar </a>
					<a onclick="conf_contract_delete('.$row->id_cont.')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
					</td>
			  </tr>'; 
	}
// <a href="php/delete_cont.php?id='.$row->id_cont.'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Eliminar </a>
?>