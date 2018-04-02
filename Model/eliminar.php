<?php
require_once('Conectar.php');

$base = Conexion::conectar();

$id=$_GET['id'];

$base->query("DELETE FROM tbl_factura WHERE id_factura='$id'");
header("Location:../index.php");
?>