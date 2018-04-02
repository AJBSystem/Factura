<?php
/**
* 
*/
class Factura_model
{
	private $db;
	private $factura;
	
	function __construct()
	{
		require_once('Model/Conectar.php');

		$this->db=Conexion::conectar();
		$this->factura=array();
	}

	public function get_Factura(){
		require("Model/paginacion.php");
		$consulta = $this->db->query("SELECT * FROM tbl_factura LIMIT $empezar_desde, $regxpag");

		while ($fila =$consulta->fetch(PDO::FETCH_ASSOC)){
			$this->factura[]=$fila;
		}
		return $this->factura;
	}
}
?>