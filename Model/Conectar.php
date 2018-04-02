<?php
/**
* 
*/
class Conexion
{
	#se crea un método estatico para que solamente se necesite el nombre de la clase para llamamr al metodo
	public static function conectar(){
		try{
			$conexion=new PDO('mysql:host=localhost; dbname=bd_factura', 'root', '');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");

		}catch(Exception $e){
			die("La linea de error es: " . $e->getMessage());
			echo "El código de error es: " . $e->getLine();
		}
		return $conexion;
	}
}
?>