<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

	<title>Personas View</title>
</head>
<body>
<?php
require('Model/insertar.php');
require("Model/paginacion.php");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4">
			<div class="spacing-1"></div>
	<fieldset>
			<legend class="center">FACTURA DE PAGO</legend>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

				<label class="sr-only" for="user">Vendedor</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" class="form-control" name="txtven" placeholder="Vendedor" title="Ingrese Nombre" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Fecha</label>
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" placeholder="yyyy-mm-dd" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    
                </div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Sr(es):</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" class="form-control" name="txtsre" placeholder="SR(es):" title="A quien va dirigido" >
				</div>
				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Dirección</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtdir" placeholder="Ingrese Dirección" title="Dirección" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Cantidad</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtcan" placeholder="Ingrese Cantidad" title="Cantidad" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>


				<label class="sr-only" for="user">Descuento</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtdes" placeholder="Ingrese Descuento" title="Descuento" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>


				<label class="sr-only" for="user">Precio Unitario</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtpre" placeholder="Ingrese Precio Unitario" title="precio por unidad" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Importe</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txtimp" placeholder="Ingrese Importe" title="importe" >
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<label class="sr-only" for="user">Total</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<input type="text" autocomplete="off" class="form-control" name="txttot" placeholder="Total Neto" title="total a pagar">
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				
				<label class="sr-only" for="user">Observaciones</label>
				<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-keyboard-o"></i></div>
					<textarea rows="4" cols="50" autocomplete="off" class="form-control" name="txtobs" placeholder="Observaciones" title="Dirección" ></textarea> 
				</div>

				<!--Div Espaciador-->
				<div class="spacing-2"></div>

				<div class="row">
					<div class="col-xs-12" align="center">
						<div class="spacing-3" align="center"></div>
						<button type="submit" name="create" class="btn btn-default btn-primary" title="Guardar"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true" value="inse"></span></button>
						<button type="reset" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-erase" title="Limpiar" aria-hidden="true" value="inse"></span></button>
					</div>
				</div>
		</fieldset>

		</div>
	</div>
</div>
		</form>
<!--Div Espaciador-->
				<div class="spacing-2"></div>
<div class='col-lg-8 col-lg-offset-2 th'>
					<table class='table table-hover' border=2>
							<tr class='info'>
								<th>N° de Fact</th>
								<th>Vendedor</th>
								<th>Fecha</th>
								<th>Dirijido a:</th>
								<th>Dirección</th>
								<th>Cantidad</th>
								<th>Descuento</th>
								<th>Precio Unit.</th>
								<th>Importe</th>
								<th>Observaciones</th>
								<th>Total</th>
								<th colspan='2'>Acción</th>
							</tr>
							<?php  foreach ($arrayFactura as $fila): ?>	
							<tr>						
								<td><?php echo $fila ['id_factura'] ?></td>
								<td><?php echo $fila ['vendedor'] ?></td>
								<td><?php echo $fila ['fecha'] ?></td>
								<td><?php echo $fila ['quien'] ?></td>
								<td><?php echo $fila ['direccion'] ?></td>
								<td><?php echo $fila ['cantidad'] ?></td>
								<td><?php echo $fila ['descuento'] ?></td>
								<td><?php echo $fila ['pre_unit'] ?></td>
								<td><?php echo $fila ['importe'] ?></td>
								<td><?php echo $fila ['observaciones'] ?></td>
								<td><?php echo $fila ['total'] ?></td>

								<td><a href="Model/actualizar.php?id=<?php echo $fila ['id_factura']?> & ven= <?php echo $fila ['vendedor']?> & fec= <?php echo $fila ['fecha']?> & qui= <?php echo $fila ['quien']?>  & dir=<?php echo $fila ['direccion']?>  & can= <?php echo $fila ['cantidad']?> & des= <?php echo $fila ['descuento']?> & pre= <?php echo $fila ['pre_unit']?> & imp= <?php echo $fila ['importe']?> & obs= <?php echo $fila ['observaciones']?> & tot= <?php echo $fila ['total']?>"><button type='button' class='btn btn-default btn-primary' title="Editar Factura"><span class='glyphicon glyphicon-pencil' aria-hidden='true' value='actu'></span></button></a></td>
								
								<td><a href="Model/eliminar.php?id=<?php echo $fila ['id_factura']?>"><button type='button' class='btn btn-default btn-primary' title="Eliminar Registro"><span class='glyphicon glyphicon-trash' aria-hidden='true' value='elim'></span></button></a></td>

								<td><a href="Model/reporte.php?id=<?php echo $fila ['id_factura']?>"><button type='button' class='btn btn-default btn-primary' title="Reporte factura"><span class='fa fa-file-pdf-o' aria-hidden='true' value='repor'></span></button></a></td>
							</tr>
							<?php endforeach; ?>
					</table>

					<nav aria-label='Page navigation'>
  <ul class='pagination'>
    <li>
      <a href='#' aria-label='Previous'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>
    <?php
	for ($i=1; $i<=$total_pag; $i++) { 
    echo "<li><a href='?pagina=" . $i . "'>" . $i . "</a></li>";
	}
	?>
    <li>
      <a href='#' aria-label='Next'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</body>
</html>