<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "docente";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("docente", " " . "Docente");
$table = "estado";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("estado", " " . "Estado");
$table = "asignatura";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("asignatura", " " . "Asignatura");
$table = "profesion";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("profesion", " " . "Profesion");
$table = "estudiantes";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("estudiantes", " " . "Estudiantes");
$table = "habilidades";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("habilidades", " " . "Habilidades");
$table = "Reporte de Estudiantes";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Reporte_de_Estudiantes", " " . "Reporte de Estudiantes");
$table = "usuarios";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("usuarios", " " . "USUARIOS");
$table = "roles";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("roles", " " . "Roles");
$table = "Quienes Somos";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Quienes_Somos", " " . "Quienes Somos");
$table = "PROYECTOS";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("PROYECTOS", " " . "PROYECTOS");
$table = "PIAR";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("PIAR", " " . "PIAR");
$table = "PERFILDOCENTE";
$mask="";
		$mask .= "E";
		$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("PERFILDOCENTE", " " . "PERFILDOCENTE");
$table = "ESTUDIANTESACARGO";
$mask="";
		$mask .= "E";
		$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("ESTUDIANTESACARGO", " " . "ESTUDIANTESACARGO");
$table = "Estadisticas de Estudiantes";
$mask="";
	$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("Estadisticas_de_Estudiantes", " " . "Estadisticas de Estudiantes");
$table = "miscasos";
$mask="";
		$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("miscasos", " " . "Miscasos");
$table = "seguimiento";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("seguimiento", " " . "Seguimiento");
$table = "preguntas";
$mask="";
		$mask .= "E";
		$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("preguntas", " " . "Preguntas");
$table = "rangocalificacion";
$mask="";
	$mask .= "A";
			$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("rangocalificacion", " " . "Rangocalificacion");
$table = "Dicccionario";
$mask="";
				$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("Dicccionario", " " . "Dicccionario");




$layout = new TLayout("admin_rights_list_bootstrap", "DeliciousOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "_admin_rights_list";
$layout->blocks["top"] = array();
$layout->containers["top"] = array();
$layout->container_properties["top"] = array(  );
$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu" );
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["more"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more_1" );
$layout->containers["more_1"] = array();
$layout->container_properties["more_1"] = array(  );
$layout->containers["more_1"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->skins["more_1"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"breadcrumbs" );
$layout->containers["breadcrumbs"] = array();
$layout->container_properties["breadcrumbs"] = array(  );
$layout->containers["breadcrumbs"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bc" );
$layout->containers["bc"] = array();
$layout->container_properties["bc"] = array(  );
$layout->containers["bc"][] = array("name"=>"breadcrumbs",
	"block"=>"breadcrumbs", "substyle"=>1  );

$layout->skins["bc"] = "";


$layout->skins["breadcrumbs"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"messagerow" );
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"ugcontrols" );
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"save" );
$layout->containers["save"] = array();
$layout->container_properties["save"] = array(  );
$layout->containers["save"][] = array("name"=>"ugbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["save"] = "";


$layout->containers["ugcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"filter" );
$layout->containers["filter"] = array();
$layout->container_properties["filter"] = array(  );
$layout->containers["filter"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["filter"] = "";


$layout->skins["ugcontrols"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"grcontrols" );
$layout->containers["grcontrols"] = array();
$layout->container_properties["grcontrols"] = array(  );
$layout->containers["grcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"groupcontrols" );
$layout->containers["groupcontrols"] = array();
$layout->container_properties["groupcontrols"] = array(  );
$layout->containers["groupcontrols"][] = array("name"=>"bsugrights_groupbuttons",
	"block"=>"", "substyle"=>1  );

$layout->skins["groupcontrols"] = "";


$layout->skins["grcontrols"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"uggroups" );
$layout->containers["uggroups"] = array();
$layout->container_properties["uggroups"] = array(  );
$layout->containers["uggroups"][] = array("name"=>"bsugrightsgroups",
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroups"] = "";


$layout->containers["top"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"permgrid" );
$layout->containers["permgrid"] = array();
$layout->container_properties["permgrid"] = array(  );
$layout->containers["permgrid"][] = array("name"=>"ugrightsblock",
	"block"=>"", "substyle"=>1  );

$layout->skins["permgrid"] = "";


$layout->skins["top"] = "";

$layout->blocks["top"][] = "top";
$page_layouts["admin_rights_list"] = $layout;




require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
