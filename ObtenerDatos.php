<?php
// Declaramos el fichero de conexión
include_once("config.php");

	$year = date('Y');
	$total=array();
	for ($month = 1; $month <= 12; $month ++){
		
	$query = $db->prepare("select sum(monto) as total from tbl_ventas where month(venta_fecha)='$month' and year(venta_fecha)='$year'");
    $query->execute();
    $row = $query->fetch();
	$total[]=$row['total'];
	
	}

	$enero = $total[0];
	$febrero = $total[1];
	$marzo = $total[2];
	$abril = $total[3];
	$mayo = $total[4];
	$junio = $total[5];
	$julio = $total[6];
	$agosto = $total[7];
	$septiembre = $total[8];
	$octubre = $total[9];
	$noviembre = $total[10];
	$diciembre = $total[11];

	$pyear = $year - 1;
	$pnum=array();

	for ($pmonth = 1; $pmonth <= 12; $pmonth ++){		
		$pquery = $db->prepare("select sum(monto) as ptotal from tbl_ventas where month(venta_fecha)='$pmonth' and year(venta_fecha)='$pyear'");
		$pquery->execute();
		$prow = $pquery->fetch();
		$ptotal[]=$prow['ptotal'];
	}
	
	$pjan = $ptotal[0];
	$pfeb = $ptotal[1];
	$pmar = $ptotal[2];
	$papr = $ptotal[3];
	$pmay = $ptotal[4];
	$pjun = $ptotal[5];
	$pjul = $ptotal[6];
	$paug = $ptotal[7];
	$psep = $ptotal[8];
	$poct = $ptotal[9];
	$pnov = $ptotal[10];
	$pdec = $ptotal[11];
?>