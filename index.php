<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/bootstrap-datetimepicker.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/sweetalert.css">
<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="../js/moment-with-locales.js"></script>
<script src="../js/bootstrap-datetimepicker.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="../js/operaciones.js"></script>

<title></title>
</head>
<body>
<script type="text/javascript">
$(function () {
    $('#datetimepicker1').datetimepicker();
});
</script>
</body>
</html>

<?php
require_once('Controller/factura_Controller.php');
# yo pense que se colocaba en el View, pues no se coloca el controller porque desde alli incluye la vista y a su vez incluye el modelo logrando la interaccion con los dos
?>