<?php
require_once("Model/factura_Model.php");
$factura = new Factura_model();
$arrayFactura=$factura->get_Factura();

Require_once("View/factura_View.php");
?>