<?php

class selects extends MySQL
{
	var $code = "";
	
	function cargarPaises()
	{
		$consulta = parent::consulta("SELECT A.PRO_DESCRIPCION, B.DET_PRO_ID FROM TB_PROYECTO A RIGHT JOIN TB_DETALLE_PROYECTO B ON  A.PRO_ID=B.DET_PRO_ID");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["DET_PRO_ID"];
				$name = $pais["PRO_DESCRIPCION"];				
				$paises[$code]=$name;
			}
			return $paises;
		}
		else
		{
			return false;
		}
	}
	function cargarEstados()
	{
		$consulta = parent::consulta("SELECT DET_ETAPA FROM TB_DETALLE_PROYECTO WHERE DET_PRO_ID = '".$this->code."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$estados = array();
			while($estado = parent::fetch_assoc($consulta))
			{
				$name = $estado["DET_ETAPA"];				
				$estados[$name]=$name;
			}
			return $estados;
		}
		else
		{
			return false;
		}
	}
		
	function cargarCiudades()
	{
		$consulta = parent::consulta("SELECT CIU_DESCRIPCION FROM TB_CIUDAD WHERE CIU_PAI_ID = '".$this->code."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$ciudades = array();
			while($ciudad = parent::fetch_assoc($consulta))
			{
				$name = $ciudad["CIU_DESCRIPCION"];				
				$ciudades[$name]=$name;
			}
			return $ciudades;
		}
		else
		{
			return false;
		}
	}		
}
?>