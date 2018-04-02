<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require_once('Conectar.php');

$base = Conexion::conectar();
	
	if (isset($_POST['create'])) {
		
		$ven=$_POST['txtven'];
		$fec=$_POST['txtfec'];
		$sre=$_POST['txtsre'];
		$dir=$_POST['txtdir'];
		$can=$_POST['txtcan'];
		$des=$_POST['txtdes'];
		$pre=$_POST['txtpre'];
		$imp=$_POST['txtimp'];
		$obs=$_POST['txtobs'];
		$tot=$_POST['txttot'];

		$sql="INSERT INTO  tbl_factura (vendedor, fecha, quien, direccion, cantidad, descuento, pre_unit, importe, observaciones, total) 
			  VALUES (:ven, :fec, :qui, :dir, :can, :des, :pre, :imp, :obs, :tot)";

		  $pdoStatement=$base->prepare($sql);
		  $pdoStatement->execute(array(':ven'=>$ven, ':fec'=>$fec, ':qui'=>$sre, ':dir'=>$dir, ':can'=>$can, ':des'=>$des, ':pre'=>$pre, ':imp'=>$imp, ':obs'=>$obs, ':tot'=>$tot));
		  header("Location:index.php");
	}
?>
</body>
</html>