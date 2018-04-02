<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Registros</title>
</head>
<body>
<?php
require_once('Conectar.php');

$base = Conexion::conectar();

if (!isset($_POST['actu'])) {
	
	$id=$_GET['id'];
	$ven=$_GET['ven'];
	$fec=$_GET['fec'];
	$sre=$_GET['qui'];
	$dir=$_GET['dir'];
	$can=$_GET['can'];
	$des=$_GET['des'];
	$pre=$_GET['pre'];
	$imp=$_GET['imp'];
	$obs=$_GET['obs'];
	$tot=$_GET['tot'];
} else {
	$id=$_POST['id'];
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

	$sql= "UPDATE tbl_factura SET vendedor=:ven, fecha=:fec, quien=:qui, direccion=:dir, cantidad=:can, descuento=:des, pre_unit=:pre, importe=:imp, observaciones=:obs, total=:tot
			WHERE id_factura=: id";
	$pdostatement=$base->prepare($sql);
	$pdostatement->execute(array(":id"=>$id, ":ven"=>$ven, "fec:"=>$fec, "qui:"=>$sre, "dir:"=>$dir, "can:"=>$can, "des:"=>$des, "pre:"=>$pre, "imp:"=>$imp, ":obs"=>						         $obs, ":tot"=>$tot));

	header("Location:../index.php");		
}
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<div class="spacing-1"></div>
	<fieldset>
			<legend class="center">FACTURA DE PAGO</legend>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

				<input name="id" type="hidden" value="<?php echo $id ?>">

				<label class="sr-only" for="user">Vendedor</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" class="form-control" name="txtven" title="Ingrese Nombre"  value="<?php echo $ven ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Fecha</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="txtfec" value="<?php echo $fec ?>"> />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    
                </div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Sr(es):</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" class="form-control" name="txtsre" title="A quien va dirigido"  value="<?php echo $sre ?>">
				</div>
				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Dirección</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtdir" title="Dirección"  value="<?php echo $dir ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Cantidad</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtcan" title="Cantidad"  value="<?php echo $can ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>


				<label class="sr-only" for="user">Descuento</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtdes" title="Descuento"  value="<?php echo $des ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>


				<label class="sr-only" for="user">Precio Unitario</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtpre" title="precio por unidad"  value="<?php echo $pre ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Importe</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtimp" title="importe"  value="<?php echo $imp ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Total</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txttot" title="total a pagar" value="<?php echo $tot ?>">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				
				<label class="sr-only" for="user">Observaciones</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<textarea rows="4" cols="50" autocomplete="off" class="form-control" name="txtobs" title="Dirección" value="<?php echo $obs ?>" ></textarea> 
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<div class="row">
					<div class="col-xs-12" align="center">
					<div class="spacing-3" align="center"></div>
					<button type="submit" name="actu" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
					</div>
				</div>
				</form>
			</fieldset>
		</div>
	</div>
</div>	
</body>
</html>