<?php
require_once('Conectar.php');

$base = Conexion::conectar();

$regxpag=3;
if (isset($_GET['pagina'])) {
	if ($_GET['pagina']==1) {
		header("Location:index.php");
	}else {
		$pag=$_GET['pagina'];
	}
}else {
	$pag=1;
}
$empezar_desde = ($pag-1)*$regxpag;
#-----------------------------------------------------------------------------------------------------------------------------------------
$sql = "SELECT * FROM tbl_factura";
$pdo_statement = $base->prepare($sql);
$pdo_statement->execute(array());

$num_filas = $pdo_statement->rowCount();
$total_pag=ceil($num_filas/$regxpag);

?>