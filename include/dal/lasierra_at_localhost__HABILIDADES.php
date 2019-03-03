<?php
$dalTablehabilidades = array();
$dalTablehabilidades["ID_HABILIDADES"] = array("type"=>3,"varname"=>"ID_HABILIDADES", "name" => "ID_HABILIDADES");
$dalTablehabilidades["TITULO"] = array("type"=>200,"varname"=>"TITULO", "name" => "TITULO");
$dalTablehabilidades["DESCRIPCION"] = array("type"=>200,"varname"=>"DESCRIPCION", "name" => "DESCRIPCION");
	$dalTablehabilidades["ID_HABILIDADES"]["key"]=true;

$dal_info["lasierra_at_localhost__habilidades"] = &$dalTablehabilidades;
?>