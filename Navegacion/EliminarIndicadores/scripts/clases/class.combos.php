<?php

class selects extends MySQL
{
	var $code = "";
	
	function cargarPaises()
	{
		$consulta = parent::consulta("SELECT IND_ID, IND_DESCRIPCION FROM TB_INDICADOR");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$paises = array();
			while($pais = parent::fetch_assoc($consulta))
			{
				$code = $pais["IND_ID"];
				$name = $pais["IND_DESCRIPCION"];				
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
		$consulta = parent::consulta("SELECT IND_FECHA FROM TB_INDICADOR WHERE IND_ID = '".$this->code."'");
		$num_total_registros = parent::num_rows($consulta);
		if($num_total_registros>0)
		{
			$estados = array();
			while($estado = parent::fetch_assoc($consulta))
			{
				$name = $estado["IND_FECHA"];				
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