<?php
$dalTableusuarios = array();
$dalTableusuarios["ID_USUARIOS"] = array("type"=>3,"varname"=>"ID_USUARIOS", "name" => "ID_USUARIOS");
$dalTableusuarios["USUARIO"] = array("type"=>200,"varname"=>"USUARIO", "name" => "USUARIO");
$dalTableusuarios["CORREO"] = array("type"=>200,"varname"=>"CORREO", "name" => "CORREO");
$dalTableusuarios["PASS"] = array("type"=>200,"varname"=>"PASS", "name" => "PASS");
$dalTableusuarios["FECHAREGISTRO"] = array("type"=>135,"varname"=>"FECHAREGISTRO", "name" => "FECHAREGISTRO");
$dalTableusuarios["ROL"] = array("type"=>200,"varname"=>"ROL", "name" => "ROL");
	$dalTableusuarios["ID_USUARIOS"]["key"]=true;

$dal_info["lasierra_at_localhost__usuarios"] = &$dalTableusuarios;
?>