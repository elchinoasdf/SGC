<?PHP 
// PHP FILE LOADS INFORMATION AVAILABLE FOR SHIPMENT IDENTIFIED BY VARIABLE '$SHIPMENT_ID'
	include ("connection.php");
	$query = $conn->query("SELECT * FROM tbl_shipments WHERE id='".$shipment_ID."'");
	$data = $query->fetch_object();
	if ($data->origen != Null) {echo "<script type='text/javascript'>document.getElementById('origen').value='".$data->origen."';</script>";};
	if ($data->destino != Null){echo "<script type='text/javascript'>document.getElementById('destino').value='".$data->destino."';</script>";};
	if ($data->fecha_carga_req != '0000-00-00 00:00:00'){
		$pdate = date_create($data->fecha_carga_req);
		// echo "<script type=text/javascript>alert('".$data->fecha_carga_req."')</script>;";
		$pu_date = $pdate->format('d/m/Y H:i');
		echo "<script type='text/javascript'>document.getElementById('pickup_date_val').value='".$pu_date."';</script>";};
	if ($data->fecha_entrega_req != '0000-00-00 00:00:00'){
		$ddate = date_create($data->fecha_entrega_req);
		$dp_date = $ddate->format('d/m/Y H:i');
		echo "<script type='text/javascript'>document.getElementById('drop_date_val').value='".$dp_date."';</script>";};
	if ($data->ton_carga_req != Null){echo "<script type='text/javascript'>document.getElementById('shipment_size').value='".$data->ton_carga_req."';</script>";};
?>