<?PHP
//PHP FILE VALIDATES SHIPMENT UPDATE AND SAVES DATA INTO DATABASE
 // ECHO "EL ARCHIVO EXISTE";
 // echo "<br/>". $_POST['pickup_date'];
 $vdate = date_create_from_format('d/m/Y H:i', $_POST['pickup_date']);
 //echo "<br/>". $vdate;
 $pdate = $vdate->format('Y-m-d H:i'); 
 // echo "<br/>". $pdate;
 $vdate = date_create_from_format('d/m/Y H:i', $_POST['drop_date_req']);
 $ddate = $vdate->format('Y-m-d H:i');
 session_start();
 include("connection.php");
 $prev_status = $conn->query("SELECT estado FROM tbl_shipments WHERE id='".$_SESSION['$ship_id']."'");
 // $sqlquery = "UPDATE tbl_shipments SET origen='".$_POST['destino']."', destino='".$_POST['origen']."', fecha_carga_req='".$pdate."', fecha_entrega_req='".$ddate."', ton_carga_req='".$_POST['shipment_size']."' WHERE id='".$_SESSION['$ship_id']."'";
 // echo $_POST['username'];
 // echo $_POST['pickup_date_actual'];
 // echo $_POST['drop_date_actual'];
 $new_status = set_status($_POST['username'], $_POST['pickup_date_actual'], $_POST['drop_date_actual']);
 // echo $new_status. "</br>";
 $sqlquery = "";
 switch ($new_status) {
	 case "Disponible": {
		 $sqlquery = "UPDATE tbl_shipments SET origen='".$_POST['destino']."', destino='".$_POST['origen']."', fecha_carga_req='".$pdate."', fecha_entrega_req='".$ddate."', ton_carga_req='".$_POST['shipment_size']."'";
		 $sqlquery = $sqlquery . ",usuario=NULL, fecha_carga_real= NULL, fecha_entrega_real= NULL, ton_carga_real= NULL";
		break;
	 };
	 case "Programado": {
		 $sqlquery = "UPDATE tbl_shipments SET origen='".$_POST['destino']."', destino='".$_POST['origen']."', fecha_carga_req='".$pdate."', fecha_entrega_req='".$ddate."', ton_carga_req='".$_POST['shipment_size']."'";
		 $sqlquery = $sqlquery . ", usuario='".$_POST['username']."'";
		 $sqlquery = $sqlquery . ", fecha_carga_real= NULL, fecha_entrega_real= NULL, ton_carga_real= NULL";
		break;
	 };
	 case "En Transito": {
		 $actual_pudate = datestringToDatetime($_POST['pickup_date_actual']);
		 $sqlquery = "UPDATE tbl_shipments SET origen='".$_POST['destino']."', destino='".$_POST['origen']."', fecha_carga_req='".$pdate."', fecha_entrega_req='".$ddate."', ton_carga_req='".$_POST['shipment_size']."'";
		 $sqlquery = $sqlquery . ", usuario='".$_POST['username']."', fecha_carga_real='".$actual_pudate."'";
		 $sqlquery = $sqlquery . ", fecha_entrega_real= NULL, ton_carga_real= NULL";
		break;
	 };
	 case "Entregado": {
		 $actual_pudate = datestringToDatetime($_POST['pickup_date_actual']);
		 $actual_dpdate = datestringToDatetime($_POST['drop_date_actual']);
		 $sqlquery = "UPDATE tbl_shipments SET origen='".$_POST['destino']."', destino='".$_POST['origen']."', fecha_carga_req='".$pdate."', fecha_entrega_req='".$ddate."', ton_carga_req='".$_POST['shipment_size']."'";
		 $sqlquery = $sqlquery . ", usuario='".$_POST['username']."', fecha_carga_real='".$actual_pudate."', fecha_entrega_real='".$actual_dpdate."', ton_carga_real='".$_POST['shipment_size_actual']."'";
		break;
	};
 };
 $sqlquery = $sqlquery . ", estado='".$new_status."' WHERE id='".$_SESSION['$ship_id']."'";

if ($conn->query($sqlquery) === TRUE) {
	 $conn->query($sqlquery);
	 echo "<script type='text/javascript'>alert('Registro actualizado de forma exitosa.')</script>";
 } else {
	 echo "<script type='text/javascript'>alert('Error al actualizar el registro.')</script>";
 };
  header("location: ../homeadmin.php");

 // function stablishes shipment status 
 
 function set_status($user, $ac_pudate, $ac_dpdate){
	 if ($user != ""){
		 if ($ac_pudate != "00/00/0000 00:00" and $ac_pudate != Null){
			 if ($ac_dpdate != "00/00/0000 00:00" and $ac_dpdate != Null){
				 return "Entregado";
				 break;
			 };
			 return "En Transito";
			 break;
		 };
		 return "Programado";
		 break;
	 };
	 return "Disponible";
	 break;
 };

 // FUNCTION CHANGES DATE FORMAT FROM STRING TO DATETIME
 function datestringToDatetime ($date_string) {
	if ($date_string != "") {
	 $vardate = date_create_from_format('d/m/Y H:i', $date_string);
	 $vardate_format = $vardate->format('Y-m-d H:i:s');
	 return $vardate_format;
	} else{
		return "0000-00-00 00:00:00";
	};
 };
 ?>