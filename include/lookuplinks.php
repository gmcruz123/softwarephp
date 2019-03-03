<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["asignatura"]["docente.ASIGNATURA"]["edit"] = array("table" => "docente", "field" => "ASIGNATURA", "page" => "edit");
	$lookupTableLinks["profesion"]["docente.PROFESION"]["edit"] = array("table" => "docente", "field" => "PROFESION", "page" => "edit");
	$lookupTableLinks["estado"]["docente.ESTADO"]["edit"] = array("table" => "docente", "field" => "ESTADO", "page" => "edit");
	$lookupTableLinks["docente"]["estudiantes.DOCENTEACARGO"]["edit"] = array("table" => "estudiantes", "field" => "DOCENTEACARGO", "page" => "edit");
	$lookupTableLinks["roles"]["usuarios.ROL"]["edit"] = array("table" => "usuarios", "field" => "ROL", "page" => "edit");
	$lookupTableLinks["asignatura"]["PERFILDOCENTE.ASIGNATURA"]["edit"] = array("table" => "PERFILDOCENTE", "field" => "ASIGNATURA", "page" => "edit");
	$lookupTableLinks["profesion"]["PERFILDOCENTE.PROFESION"]["edit"] = array("table" => "PERFILDOCENTE", "field" => "PROFESION", "page" => "edit");
	$lookupTableLinks["estado"]["PERFILDOCENTE.ESTADO"]["edit"] = array("table" => "PERFILDOCENTE", "field" => "ESTADO", "page" => "edit");
	$lookupTableLinks["docente"]["ESTUDIANTESACARGO.DOCENTEACARGO"]["edit"] = array("table" => "ESTUDIANTESACARGO", "field" => "DOCENTEACARGO", "page" => "edit");
	$lookupTableLinks["docente"]["Estadisticas_de_Estudiantes.DOCENTEACARGO"]["search"] = array("table" => "Estadisticas de Estudiantes", "field" => "DOCENTEACARGO", "page" => "search");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION1"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION1", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION2"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION2", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION3"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION3", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION4"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION4", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION5"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION5", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION6"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION6", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION7"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION7", "page" => "edit");
	$lookupTableLinks["rangocalificacion"]["seguimiento.VALORACION8"]["edit"] = array("table" => "seguimiento", "field" => "VALORACION8", "page" => "edit");
	$lookupTableLinks["ESTUDIANTESACARGO"]["seguimiento.CODCASO"]["edit"] = array("table" => "seguimiento", "field" => "CODCASO", "page" => "edit");
	$lookupTableLinks["asignatura"]["admin_members.ASIGNATURA"]["edit"] = array("table" => "admin_members", "field" => "ASIGNATURA", "page" => "edit");
	$lookupTableLinks["profesion"]["admin_members.PROFESION"]["edit"] = array("table" => "admin_members", "field" => "PROFESION", "page" => "edit");
	$lookupTableLinks["estado"]["admin_members.ESTADO"]["edit"] = array("table" => "admin_members", "field" => "ESTADO", "page" => "edit");
	$lookupTableLinks["asignatura"]["admin_users.ASIGNATURA"]["edit"] = array("table" => "admin_users", "field" => "ASIGNATURA", "page" => "edit");
	$lookupTableLinks["profesion"]["admin_users.PROFESION"]["edit"] = array("table" => "admin_users", "field" => "PROFESION", "page" => "edit");
	$lookupTableLinks["estado"]["admin_users.ESTADO"]["edit"] = array("table" => "admin_users", "field" => "ESTADO", "page" => "edit");
}

?>