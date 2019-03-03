<?php
require_once(getabspath("classes/cipherer.php"));




$tdataestudiantes = array();
	$tdataestudiantes[".truncateText"] = true;
	$tdataestudiantes[".NumberOfChars"] = 80;
	$tdataestudiantes[".ShortName"] = "estudiantes";
	$tdataestudiantes[".OwnerID"] = "";
	$tdataestudiantes[".OriginalTable"] = "estudiantes";

//	field labels
$fieldLabelsestudiantes = array();
$fieldToolTipsestudiantes = array();
$pageTitlesestudiantes = array();
$placeHoldersestudiantes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsestudiantes["English"] = array();
	$fieldToolTipsestudiantes["English"] = array();
	$placeHoldersestudiantes["English"] = array();
	$pageTitlesestudiantes["English"] = array();
	$fieldLabelsestudiantes["English"]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsestudiantes["English"]["ID_ESTUDIANTE"] = "";
	$placeHoldersestudiantes["English"]["ID_ESTUDIANTE"] = "";
	$fieldLabelsestudiantes["English"]["NOMBRE"] = "Nombre Completo";
	$fieldToolTipsestudiantes["English"]["NOMBRE"] = "";
	$placeHoldersestudiantes["English"]["NOMBRE"] = "";
	$fieldLabelsestudiantes["English"]["FECHANACIMIENTO"] = "Fecha de nacimiento";
	$fieldToolTipsestudiantes["English"]["FECHANACIMIENTO"] = "";
	$placeHoldersestudiantes["English"]["FECHANACIMIENTO"] = "";
	$fieldLabelsestudiantes["English"]["DIRECCION"] = "Direccion";
	$fieldToolTipsestudiantes["English"]["DIRECCION"] = "";
	$placeHoldersestudiantes["English"]["DIRECCION"] = "";
	$fieldLabelsestudiantes["English"]["TELEFONO"] = "Telefono";
	$fieldToolTipsestudiantes["English"]["TELEFONO"] = "";
	$placeHoldersestudiantes["English"]["TELEFONO"] = "";
	$fieldLabelsestudiantes["English"]["DIAGNOSTICO"] = "Diagnostico";
	$fieldToolTipsestudiantes["English"]["DIAGNOSTICO"] = "";
	$placeHoldersestudiantes["English"]["DIAGNOSTICO"] = "";
	$fieldLabelsestudiantes["English"]["NOMBREDELPADRE"] = "Nombre del Padre";
	$fieldToolTipsestudiantes["English"]["NOMBREDELPADRE"] = "";
	$placeHoldersestudiantes["English"]["NOMBREDELPADRE"] = "";
	$fieldLabelsestudiantes["English"]["NOMBREDELAMADRE"] = "Nombre de la Madre";
	$fieldToolTipsestudiantes["English"]["NOMBREDELAMADRE"] = "";
	$placeHoldersestudiantes["English"]["NOMBREDELAMADRE"] = "";
	$fieldLabelsestudiantes["English"]["NOMBREACUDIENTE"] = "Nombre del Acudiente";
	$fieldToolTipsestudiantes["English"]["NOMBREACUDIENTE"] = "";
	$placeHoldersestudiantes["English"]["NOMBREACUDIENTE"] = "";
	$fieldLabelsestudiantes["English"]["HABILIDADES"] = "Habilidades";
	$fieldToolTipsestudiantes["English"]["HABILIDADES"] = "";
	$placeHoldersestudiantes["English"]["HABILIDADES"] = "";
	$fieldLabelsestudiantes["English"]["LIMITACIONES"] = "Limitaciones";
	$fieldToolTipsestudiantes["English"]["LIMITACIONES"] = "";
	$placeHoldersestudiantes["English"]["LIMITACIONES"] = "";
	$fieldLabelsestudiantes["English"]["DOCENTEACARGO"] = "Docente a Cargo";
	$fieldToolTipsestudiantes["English"]["DOCENTEACARGO"] = "";
	$placeHoldersestudiantes["English"]["DOCENTEACARGO"] = "";
	$fieldLabelsestudiantes["English"]["FOTODEPERFIL"] = "Foto de Perfil";
	$fieldToolTipsestudiantes["English"]["FOTODEPERFIL"] = "";
	$placeHoldersestudiantes["English"]["FOTODEPERFIL"] = "";
	$fieldLabelsestudiantes["English"]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsestudiantes["English"]["FISICALOGRO"] = "";
	$placeHoldersestudiantes["English"]["FISICALOGRO"] = "";
	$fieldLabelsestudiantes["English"]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsestudiantes["English"]["FISICAINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["FISICAINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["FISICAESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["FISICAESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsestudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$placeHoldersestudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsestudiantes["English"]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsestudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsestudiantes["English"]["DCLOGRO"] = "";
	$placeHoldersestudiantes["English"]["DCLOGRO"] = "";
	$fieldLabelsestudiantes["English"]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsestudiantes["English"]["DCINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["DCINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["CDESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["CDESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["DCHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["DCHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsestudiantes["English"]["PCLOGRO"] = "";
	$placeHoldersestudiantes["English"]["PCLOGRO"] = "";
	$fieldLabelsestudiantes["English"]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsestudiantes["English"]["PCINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["PCINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["PCESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["PCESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["PCHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["PCHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsestudiantes["English"]["ARTISTICALOGRO"] = "";
	$placeHoldersestudiantes["English"]["ARTISTICALOGRO"] = "";
	$fieldLabelsestudiantes["English"]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsestudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsestudiantes["English"]["SALOGRO"] = "";
	$placeHoldersestudiantes["English"]["SALOGRO"] = "";
	$fieldLabelsestudiantes["English"]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsestudiantes["English"]["SAINNDICADOR"] = "";
	$placeHoldersestudiantes["English"]["SAINNDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["SAESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["SAESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["SAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["SAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes["English"]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsestudiantes["English"]["COMPLOGRO"] = "";
	$placeHoldersestudiantes["English"]["COMPLOGRO"] = "";
	$fieldLabelsestudiantes["English"]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsestudiantes["English"]["COMPINDICADOR"] = "";
	$placeHoldersestudiantes["English"]["COMPINDICADOR"] = "";
	$fieldLabelsestudiantes["English"]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsestudiantes["English"]["COMPESTRATEGIA"] = "";
	$placeHoldersestudiantes["English"]["COMPESTRATEGIA"] = "";
	$fieldLabelsestudiantes["English"]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsestudiantes["English"]["COMPHERRAMIENTAS"] = "";
	$placeHoldersestudiantes["English"]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsestudiantes["English"]))
		$tdataestudiantes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsestudiantes[""] = array();
	$fieldToolTipsestudiantes[""] = array();
	$placeHoldersestudiantes[""] = array();
	$pageTitlesestudiantes[""] = array();
	$fieldLabelsestudiantes[""]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsestudiantes[""]["ID_ESTUDIANTE"] = "";
	$placeHoldersestudiantes[""]["ID_ESTUDIANTE"] = "";
	$fieldLabelsestudiantes[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsestudiantes[""]["NOMBRE"] = "";
	$placeHoldersestudiantes[""]["NOMBRE"] = "";
	$fieldLabelsestudiantes[""]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsestudiantes[""]["FECHANACIMIENTO"] = "";
	$placeHoldersestudiantes[""]["FECHANACIMIENTO"] = "";
	$fieldLabelsestudiantes[""]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsestudiantes[""]["DIRECCION"] = "";
	$placeHoldersestudiantes[""]["DIRECCION"] = "";
	$fieldLabelsestudiantes[""]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsestudiantes[""]["TELEFONO"] = "";
	$placeHoldersestudiantes[""]["TELEFONO"] = "";
	$fieldLabelsestudiantes[""]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsestudiantes[""]["DIAGNOSTICO"] = "";
	$placeHoldersestudiantes[""]["DIAGNOSTICO"] = "";
	$fieldLabelsestudiantes[""]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsestudiantes[""]["NOMBREDELPADRE"] = "";
	$placeHoldersestudiantes[""]["NOMBREDELPADRE"] = "";
	$fieldLabelsestudiantes[""]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsestudiantes[""]["NOMBREDELAMADRE"] = "";
	$placeHoldersestudiantes[""]["NOMBREDELAMADRE"] = "";
	$fieldLabelsestudiantes[""]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsestudiantes[""]["NOMBREACUDIENTE"] = "";
	$placeHoldersestudiantes[""]["NOMBREACUDIENTE"] = "";
	$fieldLabelsestudiantes[""]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsestudiantes[""]["HABILIDADES"] = "";
	$placeHoldersestudiantes[""]["HABILIDADES"] = "";
	$fieldLabelsestudiantes[""]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsestudiantes[""]["LIMITACIONES"] = "";
	$placeHoldersestudiantes[""]["LIMITACIONES"] = "";
	$fieldLabelsestudiantes[""]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsestudiantes[""]["DOCENTEACARGO"] = "";
	$placeHoldersestudiantes[""]["DOCENTEACARGO"] = "";
	$fieldLabelsestudiantes[""]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsestudiantes[""]["FOTODEPERFIL"] = "";
	$placeHoldersestudiantes[""]["FOTODEPERFIL"] = "";
	$fieldLabelsestudiantes[""]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsestudiantes[""]["FISICALOGRO"] = "";
	$placeHoldersestudiantes[""]["FISICALOGRO"] = "";
	$fieldLabelsestudiantes[""]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsestudiantes[""]["FISICAINDICADOR"] = "";
	$placeHoldersestudiantes[""]["FISICAINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsestudiantes[""]["FISICAESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["FISICAESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsestudiantes[""]["COMUNICATIVALOGRO"] = "";
	$placeHoldersestudiantes[""]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsestudiantes[""]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsestudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersestudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsestudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsestudiantes[""]["DCLOGRO"] = "";
	$placeHoldersestudiantes[""]["DCLOGRO"] = "";
	$fieldLabelsestudiantes[""]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsestudiantes[""]["DCINDICADOR"] = "";
	$placeHoldersestudiantes[""]["DCINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsestudiantes[""]["CDESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["CDESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["DCHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["DCHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsestudiantes[""]["PCLOGRO"] = "";
	$placeHoldersestudiantes[""]["PCLOGRO"] = "";
	$fieldLabelsestudiantes[""]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsestudiantes[""]["PCINDICADOR"] = "";
	$placeHoldersestudiantes[""]["PCINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsestudiantes[""]["PCESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["PCESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["PCHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["PCHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsestudiantes[""]["ARTISTICALOGRO"] = "";
	$placeHoldersestudiantes[""]["ARTISTICALOGRO"] = "";
	$fieldLabelsestudiantes[""]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsestudiantes[""]["ARTISTICAINDICADOR"] = "";
	$placeHoldersestudiantes[""]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsestudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsestudiantes[""]["SALOGRO"] = "";
	$placeHoldersestudiantes[""]["SALOGRO"] = "";
	$fieldLabelsestudiantes[""]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsestudiantes[""]["SAINNDICADOR"] = "";
	$placeHoldersestudiantes[""]["SAINNDICADOR"] = "";
	$fieldLabelsestudiantes[""]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsestudiantes[""]["SAESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["SAESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["SAHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["SAHERRAMIENTAS"] = "";
	$fieldLabelsestudiantes[""]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsestudiantes[""]["COMPLOGRO"] = "";
	$placeHoldersestudiantes[""]["COMPLOGRO"] = "";
	$fieldLabelsestudiantes[""]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsestudiantes[""]["COMPINDICADOR"] = "";
	$placeHoldersestudiantes[""]["COMPINDICADOR"] = "";
	$fieldLabelsestudiantes[""]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsestudiantes[""]["COMPESTRATEGIA"] = "";
	$placeHoldersestudiantes[""]["COMPESTRATEGIA"] = "";
	$fieldLabelsestudiantes[""]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsestudiantes[""]["COMPHERRAMIENTAS"] = "";
	$placeHoldersestudiantes[""]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsestudiantes[""]))
		$tdataestudiantes[".isUseToolTips"] = true;
}


	$tdataestudiantes[".NCSearch"] = true;



$tdataestudiantes[".shortTableName"] = "estudiantes";
$tdataestudiantes[".nSecOptions"] = 0;
$tdataestudiantes[".recsPerRowPrint"] = 1;
$tdataestudiantes[".mainTableOwnerID"] = "";
$tdataestudiantes[".moveNext"] = 1;
$tdataestudiantes[".entityType"] = 0;

$tdataestudiantes[".strOriginalTableName"] = "estudiantes";

	



$tdataestudiantes[".showAddInPopup"] = true;

$tdataestudiantes[".showEditInPopup"] = true;

$tdataestudiantes[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap_2col";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdataestudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestudiantes[".fieldsForRegister"] = array();
	
$tdataestudiantes[".listAjax"] = false;

	$tdataestudiantes[".audit"] = false;

	$tdataestudiantes[".locking"] = false;

$tdataestudiantes[".edit"] = true;
$tdataestudiantes[".afterEditAction"] = 1;
$tdataestudiantes[".closePopupAfterEdit"] = 1;
$tdataestudiantes[".afterEditActionDetTable"] = "";

$tdataestudiantes[".add"] = true;
$tdataestudiantes[".afterAddAction"] = 1;
$tdataestudiantes[".closePopupAfterAdd"] = 1;
$tdataestudiantes[".afterAddActionDetTable"] = "";

$tdataestudiantes[".list"] = true;



$tdataestudiantes[".reorderRecordsByHeader"] = true;


$tdataestudiantes[".exportFormatting"] = 2;
$tdataestudiantes[".exportDelimiter"] = ",";
		
$tdataestudiantes[".view"] = true;

$tdataestudiantes[".import"] = true;

$tdataestudiantes[".exportTo"] = true;

$tdataestudiantes[".printFriendly"] = true;

$tdataestudiantes[".delete"] = true;

$tdataestudiantes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataestudiantes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataestudiantes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataestudiantes[".searchSaving"] = false;
//

$tdataestudiantes[".showSearchPanel"] = true;
		$tdataestudiantes[".flexibleSearch"] = true;

$tdataestudiantes[".isUseAjaxSuggest"] = true;

$tdataestudiantes[".rowHighlite"] = true;





$tdataestudiantes[".ajaxCodeSnippetAdded"] = false;

$tdataestudiantes[".buttonsAdded"] = false;

$tdataestudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestudiantes[".isUseTimeForSearch"] = false;





$tdataestudiantes[".allSearchFields"] = array();
$tdataestudiantes[".filterFields"] = array();
$tdataestudiantes[".requiredSearchFields"] = array();

$tdataestudiantes[".allSearchFields"][] = "ID_ESTUDIANTE";
	$tdataestudiantes[".allSearchFields"][] = "NOMBRE";
	$tdataestudiantes[".allSearchFields"][] = "FECHANACIMIENTO";
	$tdataestudiantes[".allSearchFields"][] = "DIRECCION";
	$tdataestudiantes[".allSearchFields"][] = "TELEFONO";
	$tdataestudiantes[".allSearchFields"][] = "DIAGNOSTICO";
	$tdataestudiantes[".allSearchFields"][] = "NOMBREDELPADRE";
	$tdataestudiantes[".allSearchFields"][] = "NOMBREDELAMADRE";
	$tdataestudiantes[".allSearchFields"][] = "NOMBREACUDIENTE";
	$tdataestudiantes[".allSearchFields"][] = "HABILIDADES";
	$tdataestudiantes[".allSearchFields"][] = "LIMITACIONES";
	$tdataestudiantes[".allSearchFields"][] = "DOCENTEACARGO";
	$tdataestudiantes[".allSearchFields"][] = "FOTODEPERFIL";
	

$tdataestudiantes[".googleLikeFields"] = array();
$tdataestudiantes[".googleLikeFields"][] = "ID_ESTUDIANTE";
$tdataestudiantes[".googleLikeFields"][] = "NOMBRE";
$tdataestudiantes[".googleLikeFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".googleLikeFields"][] = "DIRECCION";
$tdataestudiantes[".googleLikeFields"][] = "TELEFONO";
$tdataestudiantes[".googleLikeFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".googleLikeFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".googleLikeFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".googleLikeFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".googleLikeFields"][] = "HABILIDADES";
$tdataestudiantes[".googleLikeFields"][] = "LIMITACIONES";
$tdataestudiantes[".googleLikeFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".googleLikeFields"][] = "FOTODEPERFIL";
$tdataestudiantes[".googleLikeFields"][] = "FISICALOGRO";
$tdataestudiantes[".googleLikeFields"][] = "FISICAINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "FISICAESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "FISICAHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "COMUNICATIVALOGRO";
$tdataestudiantes[".googleLikeFields"][] = "COMUNICATIVAINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "DCLOGRO";
$tdataestudiantes[".googleLikeFields"][] = "DCINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "CDESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "DCHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "PCLOGRO";
$tdataestudiantes[".googleLikeFields"][] = "PCINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "PCESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "PCHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "ARTISTICALOGRO";
$tdataestudiantes[".googleLikeFields"][] = "ARTISTICAINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "ARTISTICAESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "SALOGRO";
$tdataestudiantes[".googleLikeFields"][] = "SAINNDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "SAESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "SAHERRAMIENTAS";
$tdataestudiantes[".googleLikeFields"][] = "COMPLOGRO";
$tdataestudiantes[".googleLikeFields"][] = "COMPINDICADOR";
$tdataestudiantes[".googleLikeFields"][] = "COMPESTRATEGIA";
$tdataestudiantes[".googleLikeFields"][] = "COMPHERRAMIENTAS";


$tdataestudiantes[".advSearchFields"] = array();
$tdataestudiantes[".advSearchFields"][] = "ID_ESTUDIANTE";
$tdataestudiantes[".advSearchFields"][] = "NOMBRE";
$tdataestudiantes[".advSearchFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".advSearchFields"][] = "DIRECCION";
$tdataestudiantes[".advSearchFields"][] = "TELEFONO";
$tdataestudiantes[".advSearchFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".advSearchFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".advSearchFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".advSearchFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".advSearchFields"][] = "HABILIDADES";
$tdataestudiantes[".advSearchFields"][] = "LIMITACIONES";
$tdataestudiantes[".advSearchFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".advSearchFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".tableType"] = "list";

$tdataestudiantes[".printerPageOrientation"] = 0;
$tdataestudiantes[".nPrinterPageScale"] = 100;

$tdataestudiantes[".nPrinterSplitRecords"] = 40;

$tdataestudiantes[".nPrinterPDFSplitRecords"] = 40;



$tdataestudiantes[".geocodingEnabled"] = false;





$tdataestudiantes[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataestudiantes[".pageSize"] = 20;

$tdataestudiantes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestudiantes[".strOrderBy"] = $tstrOrderBy;

$tdataestudiantes[".orderindexes"] = array();

$tdataestudiantes[".sqlHead"] = "SELECT ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$tdataestudiantes[".sqlFrom"] = "FROM estudiantes";
$tdataestudiantes[".sqlWhereExpr"] = "";
$tdataestudiantes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdataestudiantes[".highlightSearchResults"] = true;

$tableKeysestudiantes = array();
$tableKeysestudiantes[] = "ID_ESTUDIANTE";
$tdataestudiantes[".Keys"] = $tableKeysestudiantes;

$tdataestudiantes[".listFields"] = array();
$tdataestudiantes[".listFields"][] = "FOTODEPERFIL";
$tdataestudiantes[".listFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".listFields"][] = "NOMBRE";
$tdataestudiantes[".listFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".listFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".listFields"][] = "LIMITACIONES";
$tdataestudiantes[".listFields"][] = "HABILIDADES";

$tdataestudiantes[".hideMobileList"] = array();


$tdataestudiantes[".viewFields"] = array();
$tdataestudiantes[".viewFields"][] = "NOMBRE";
$tdataestudiantes[".viewFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".viewFields"][] = "DIRECCION";
$tdataestudiantes[".viewFields"][] = "TELEFONO";
$tdataestudiantes[".viewFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".viewFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".viewFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".viewFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".viewFields"][] = "HABILIDADES";
$tdataestudiantes[".viewFields"][] = "LIMITACIONES";
$tdataestudiantes[".viewFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".viewFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".addFields"] = array();
$tdataestudiantes[".addFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".addFields"][] = "NOMBRE";
$tdataestudiantes[".addFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".addFields"][] = "DIRECCION";
$tdataestudiantes[".addFields"][] = "TELEFONO";
$tdataestudiantes[".addFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".addFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".addFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".addFields"][] = "HABILIDADES";
$tdataestudiantes[".addFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".addFields"][] = "LIMITACIONES";
$tdataestudiantes[".addFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".masterListFields"] = array();
$tdataestudiantes[".masterListFields"][] = "ID_ESTUDIANTE";
$tdataestudiantes[".masterListFields"][] = "NOMBRE";
$tdataestudiantes[".masterListFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".masterListFields"][] = "DIRECCION";
$tdataestudiantes[".masterListFields"][] = "TELEFONO";
$tdataestudiantes[".masterListFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".masterListFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".masterListFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".masterListFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".masterListFields"][] = "HABILIDADES";
$tdataestudiantes[".masterListFields"][] = "LIMITACIONES";
$tdataestudiantes[".masterListFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".masterListFields"][] = "FOTODEPERFIL";
$tdataestudiantes[".masterListFields"][] = "FISICALOGRO";
$tdataestudiantes[".masterListFields"][] = "FISICAINDICADOR";
$tdataestudiantes[".masterListFields"][] = "FISICAESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "FISICAHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "COMUNICATIVALOGRO";
$tdataestudiantes[".masterListFields"][] = "COMUNICATIVAINDICADOR";
$tdataestudiantes[".masterListFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "DCLOGRO";
$tdataestudiantes[".masterListFields"][] = "DCINDICADOR";
$tdataestudiantes[".masterListFields"][] = "CDESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "DCHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "PCLOGRO";
$tdataestudiantes[".masterListFields"][] = "PCINDICADOR";
$tdataestudiantes[".masterListFields"][] = "PCESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "PCHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "ARTISTICALOGRO";
$tdataestudiantes[".masterListFields"][] = "ARTISTICAINDICADOR";
$tdataestudiantes[".masterListFields"][] = "ARTISTICAESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "SALOGRO";
$tdataestudiantes[".masterListFields"][] = "SAINNDICADOR";
$tdataestudiantes[".masterListFields"][] = "SAESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "SAHERRAMIENTAS";
$tdataestudiantes[".masterListFields"][] = "COMPLOGRO";
$tdataestudiantes[".masterListFields"][] = "COMPINDICADOR";
$tdataestudiantes[".masterListFields"][] = "COMPESTRATEGIA";
$tdataestudiantes[".masterListFields"][] = "COMPHERRAMIENTAS";

$tdataestudiantes[".inlineAddFields"] = array();

$tdataestudiantes[".editFields"] = array();
$tdataestudiantes[".editFields"][] = "NOMBRE";
$tdataestudiantes[".editFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".editFields"][] = "DIRECCION";
$tdataestudiantes[".editFields"][] = "TELEFONO";
$tdataestudiantes[".editFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".editFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".editFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".editFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".editFields"][] = "HABILIDADES";
$tdataestudiantes[".editFields"][] = "LIMITACIONES";
$tdataestudiantes[".editFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".editFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".inlineEditFields"] = array();

$tdataestudiantes[".updateSelectedFields"] = array();
$tdataestudiantes[".updateSelectedFields"][] = "NOMBRE";
$tdataestudiantes[".updateSelectedFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".updateSelectedFields"][] = "DIRECCION";
$tdataestudiantes[".updateSelectedFields"][] = "TELEFONO";
$tdataestudiantes[".updateSelectedFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".updateSelectedFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".updateSelectedFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".updateSelectedFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".updateSelectedFields"][] = "HABILIDADES";
$tdataestudiantes[".updateSelectedFields"][] = "LIMITACIONES";
$tdataestudiantes[".updateSelectedFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".updateSelectedFields"][] = "FOTODEPERFIL";


$tdataestudiantes[".exportFields"] = array();
$tdataestudiantes[".exportFields"][] = "NOMBRE";
$tdataestudiantes[".exportFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".exportFields"][] = "DIRECCION";
$tdataestudiantes[".exportFields"][] = "TELEFONO";
$tdataestudiantes[".exportFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".exportFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".exportFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".exportFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".exportFields"][] = "HABILIDADES";
$tdataestudiantes[".exportFields"][] = "LIMITACIONES";
$tdataestudiantes[".exportFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".exportFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".importFields"] = array();
$tdataestudiantes[".importFields"][] = "NOMBRE";
$tdataestudiantes[".importFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".importFields"][] = "DIRECCION";
$tdataestudiantes[".importFields"][] = "TELEFONO";
$tdataestudiantes[".importFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".importFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".importFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".importFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".importFields"][] = "HABILIDADES";
$tdataestudiantes[".importFields"][] = "LIMITACIONES";
$tdataestudiantes[".importFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".importFields"][] = "FOTODEPERFIL";

$tdataestudiantes[".printFields"] = array();
$tdataestudiantes[".printFields"][] = "NOMBRE";
$tdataestudiantes[".printFields"][] = "FECHANACIMIENTO";
$tdataestudiantes[".printFields"][] = "DIRECCION";
$tdataestudiantes[".printFields"][] = "TELEFONO";
$tdataestudiantes[".printFields"][] = "DIAGNOSTICO";
$tdataestudiantes[".printFields"][] = "NOMBREDELPADRE";
$tdataestudiantes[".printFields"][] = "NOMBREDELAMADRE";
$tdataestudiantes[".printFields"][] = "NOMBREACUDIENTE";
$tdataestudiantes[".printFields"][] = "HABILIDADES";
$tdataestudiantes[".printFields"][] = "LIMITACIONES";
$tdataestudiantes[".printFields"][] = "DOCENTEACARGO";
$tdataestudiantes[".printFields"][] = "FOTODEPERFIL";


//	ID_ESTUDIANTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_ESTUDIANTE";
	$fdata["GoodName"] = "ID_ESTUDIANTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","ID_ESTUDIANTE");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_ESTUDIANTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_ESTUDIANTE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["ID_ESTUDIANTE"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","NOMBRE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["NOMBRE"] = $fdata;
//	FECHANACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHANACIMIENTO";
	$fdata["GoodName"] = "FECHANACIMIENTO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FECHANACIMIENTO");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FECHANACIMIENTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHANACIMIENTO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataestudiantes["FECHANACIMIENTO"] = $fdata;
//	DIRECCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DIRECCION";
	$fdata["GoodName"] = "DIRECCION";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DIRECCION");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DIRECCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIRECCION";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["DIRECCION"] = $fdata;
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","TELEFONO");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TELEFONO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TELEFONO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["TELEFONO"] = $fdata;
//	DIAGNOSTICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIAGNOSTICO";
	$fdata["GoodName"] = "DIAGNOSTICO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DIAGNOSTICO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DIAGNOSTICO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIAGNOSTICO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["DIAGNOSTICO"] = $fdata;
//	NOMBREDELPADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBREDELPADRE";
	$fdata["GoodName"] = "NOMBREDELPADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","NOMBREDELPADRE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBREDELPADRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBREDELPADRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["NOMBREDELPADRE"] = $fdata;
//	NOMBREDELAMADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBREDELAMADRE";
	$fdata["GoodName"] = "NOMBREDELAMADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","NOMBREDELAMADRE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBREDELAMADRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBREDELAMADRE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["NOMBREDELAMADRE"] = $fdata;
//	NOMBREACUDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NOMBREACUDIENTE";
	$fdata["GoodName"] = "NOMBREACUDIENTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","NOMBREACUDIENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBREACUDIENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBREACUDIENTE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["NOMBREACUDIENTE"] = $fdata;
//	HABILIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HABILIDADES";
	$fdata["GoodName"] = "HABILIDADES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","HABILIDADES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HABILIDADES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HABILIDADES";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["HABILIDADES"] = $fdata;
//	LIMITACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIMITACIONES";
	$fdata["GoodName"] = "LIMITACIONES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","LIMITACIONES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LIMITACIONES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LIMITACIONES";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["LIMITACIONES"] = $fdata;
//	DOCENTEACARGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DOCENTEACARGO";
	$fdata["GoodName"] = "DOCENTEACARGO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DOCENTEACARGO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DOCENTEACARGO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCENTEACARGO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "docente";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "NOMBRES";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMBRES";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["DOCENTEACARGO"] = $fdata;
//	FOTODEPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FOTODEPERFIL";
	$fdata["GoodName"] = "FOTODEPERFIL";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FOTODEPERFIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FOTODEPERFIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOTODEPERFIL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 200;
			$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 200;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	
		
	


	
	
	
							$edata["acceptFileTypes"] = "bmp";
						$edata["acceptFileTypes"] .= "|gif";
						$edata["acceptFileTypes"] .= "|jpg";
						$edata["acceptFileTypes"] .= "|png";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataestudiantes["FOTODEPERFIL"] = $fdata;
//	FISICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FISICALOGRO";
	$fdata["GoodName"] = "FISICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FISICALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "FISICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICALOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["FISICALOGRO"] = $fdata;
//	FISICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FISICAINDICADOR";
	$fdata["GoodName"] = "FISICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FISICAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "FISICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["FISICAINDICADOR"] = $fdata;
//	FISICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FISICAESTRATEGIA";
	$fdata["GoodName"] = "FISICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FISICAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "FISICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["FISICAESTRATEGIA"] = $fdata;
//	FISICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FISICAHERRAMIENTAS";
	$fdata["GoodName"] = "FISICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","FISICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "FISICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["FISICAHERRAMIENTAS"] = $fdata;
//	COMUNICATIVALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "COMUNICATIVALOGRO";
	$fdata["GoodName"] = "COMUNICATIVALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMUNICATIVALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMUNICATIVALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVALOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMUNICATIVALOGRO"] = $fdata;
//	COMUNICATIVAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "COMUNICATIVAINDICADOR";
	$fdata["GoodName"] = "COMUNICATIVAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMUNICATIVAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMUNICATIVAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMUNICATIVAINDICADOR"] = $fdata;
//	COMUNICATIVAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["GoodName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMUNICATIVAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMUNICATIVAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMUNICATIVAESTRATEGIA"] = $fdata;
//	COMUNICATIVAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["GoodName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMUNICATIVAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMUNICATIVAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMUNICATIVAHERRAMIENTAS"] = $fdata;
//	DCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DCLOGRO";
	$fdata["GoodName"] = "DCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DCLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCLOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["DCLOGRO"] = $fdata;
//	DCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DCINDICADOR";
	$fdata["GoodName"] = "DCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DCINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["DCINDICADOR"] = $fdata;
//	CDESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDESTRATEGIA";
	$fdata["GoodName"] = "CDESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","CDESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "CDESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["CDESTRATEGIA"] = $fdata;
//	DCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DCHERRAMIENTAS";
	$fdata["GoodName"] = "DCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","DCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["DCHERRAMIENTAS"] = $fdata;
//	PCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PCLOGRO";
	$fdata["GoodName"] = "PCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","PCLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCLOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["PCLOGRO"] = $fdata;
//	PCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PCINDICADOR";
	$fdata["GoodName"] = "PCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","PCINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["PCINDICADOR"] = $fdata;
//	PCESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PCESTRATEGIA";
	$fdata["GoodName"] = "PCESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","PCESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PCESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["PCESTRATEGIA"] = $fdata;
//	PCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PCHERRAMIENTAS";
	$fdata["GoodName"] = "PCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","PCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "PCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["PCHERRAMIENTAS"] = $fdata;
//	ARTISTICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ARTISTICALOGRO";
	$fdata["GoodName"] = "ARTISTICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","ARTISTICALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ARTISTICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICALOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["ARTISTICALOGRO"] = $fdata;
//	ARTISTICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ARTISTICAINDICADOR";
	$fdata["GoodName"] = "ARTISTICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","ARTISTICAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ARTISTICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["ARTISTICAINDICADOR"] = $fdata;
//	ARTISTICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ARTISTICAESTRATEGIA";
	$fdata["GoodName"] = "ARTISTICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","ARTISTICAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ARTISTICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["ARTISTICAESTRATEGIA"] = $fdata;
//	ARTISTICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["GoodName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","ARTISTICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ARTISTICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["ARTISTICAHERRAMIENTAS"] = $fdata;
//	SALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SALOGRO";
	$fdata["GoodName"] = "SALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","SALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "SALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["SALOGRO"] = $fdata;
//	SAINNDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SAINNDICADOR";
	$fdata["GoodName"] = "SAINNDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","SAINNDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "SAINNDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAINNDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["SAINNDICADOR"] = $fdata;
//	SAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SAESTRATEGIA";
	$fdata["GoodName"] = "SAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","SAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "SAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["SAESTRATEGIA"] = $fdata;
//	SAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SAHERRAMIENTAS";
	$fdata["GoodName"] = "SAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","SAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "SAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["SAHERRAMIENTAS"] = $fdata;
//	COMPLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "COMPLOGRO";
	$fdata["GoodName"] = "COMPLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMPLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMPLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPLOGRO";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMPLOGRO"] = $fdata;
//	COMPINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "COMPINDICADOR";
	$fdata["GoodName"] = "COMPINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMPINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMPINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPINDICADOR";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMPINDICADOR"] = $fdata;
//	COMPESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "COMPESTRATEGIA";
	$fdata["GoodName"] = "COMPESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMPESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMPESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPESTRATEGIA";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMPESTRATEGIA"] = $fdata;
//	COMPHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "COMPHERRAMIENTAS";
	$fdata["GoodName"] = "COMPHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("estudiantes","COMPHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "COMPHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPHERRAMIENTAS";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataestudiantes["COMPHERRAMIENTAS"] = $fdata;


$tables_data["estudiantes"]=&$tdataestudiantes;
$field_labels["estudiantes"] = &$fieldLabelsestudiantes;
$fieldToolTips["estudiantes"] = &$fieldToolTipsestudiantes;
$placeHolders["estudiantes"] = &$placeHoldersestudiantes;
$page_titles["estudiantes"] = &$pageTitlesestudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estudiantes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["estudiantes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_estudiantes()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$proto3["m_strFrom"] = "FROM estudiantes";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
	
		;
			$proto3["cipherer"] = null;
$proto5=array();
$proto5["m_sql"] = "";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

$proto3["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_ESTUDIANTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto9["m_sql"] = "ID_ESTUDIANTE";
$proto9["m_srcTableName"] = "estudiantes";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto11["m_sql"] = "NOMBRE";
$proto11["m_srcTableName"] = "estudiantes";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHANACIMIENTO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto13["m_sql"] = "FECHANACIMIENTO";
$proto13["m_srcTableName"] = "estudiantes";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DIRECCION",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto15["m_sql"] = "DIRECCION";
$proto15["m_srcTableName"] = "estudiantes";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto17["m_sql"] = "TELEFONO";
$proto17["m_srcTableName"] = "estudiantes";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAGNOSTICO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto19["m_sql"] = "DIAGNOSTICO";
$proto19["m_srcTableName"] = "estudiantes";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELPADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto21["m_sql"] = "NOMBREDELPADRE";
$proto21["m_srcTableName"] = "estudiantes";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELAMADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto23["m_sql"] = "NOMBREDELAMADRE";
$proto23["m_srcTableName"] = "estudiantes";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREACUDIENTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto25["m_sql"] = "NOMBREACUDIENTE";
$proto25["m_srcTableName"] = "estudiantes";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "HABILIDADES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto27["m_sql"] = "HABILIDADES";
$proto27["m_srcTableName"] = "estudiantes";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "LIMITACIONES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto29["m_sql"] = "LIMITACIONES";
$proto29["m_srcTableName"] = "estudiantes";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCENTEACARGO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto31["m_sql"] = "DOCENTEACARGO";
$proto31["m_srcTableName"] = "estudiantes";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTODEPERFIL",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto33["m_sql"] = "FOTODEPERFIL";
$proto33["m_srcTableName"] = "estudiantes";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto35["m_sql"] = "FISICALOGRO";
$proto35["m_srcTableName"] = "estudiantes";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto37["m_sql"] = "FISICAINDICADOR";
$proto37["m_srcTableName"] = "estudiantes";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto39["m_sql"] = "FISICAESTRATEGIA";
$proto39["m_srcTableName"] = "estudiantes";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto41["m_sql"] = "FISICAHERRAMIENTAS";
$proto41["m_srcTableName"] = "estudiantes";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto43["m_sql"] = "COMUNICATIVALOGRO";
$proto43["m_srcTableName"] = "estudiantes";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto3["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto45["m_sql"] = "COMUNICATIVAINDICADOR";
$proto45["m_srcTableName"] = "estudiantes";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto3["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto47["m_sql"] = "COMUNICATIVAESTRATEGIA";
$proto47["m_srcTableName"] = "estudiantes";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto3["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto49["m_sql"] = "COMUNICATIVAHERRAMIENTAS";
$proto49["m_srcTableName"] = "estudiantes";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto3["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "DCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto51["m_sql"] = "DCLOGRO";
$proto51["m_srcTableName"] = "estudiantes";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto3["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "DCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto53["m_sql"] = "DCINDICADOR";
$proto53["m_srcTableName"] = "estudiantes";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto3["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "CDESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto55["m_sql"] = "CDESTRATEGIA";
$proto55["m_srcTableName"] = "estudiantes";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto3["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "DCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto57["m_sql"] = "DCHERRAMIENTAS";
$proto57["m_srcTableName"] = "estudiantes";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto3["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "PCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto59["m_sql"] = "PCLOGRO";
$proto59["m_srcTableName"] = "estudiantes";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto3["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "PCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto61["m_sql"] = "PCINDICADOR";
$proto61["m_srcTableName"] = "estudiantes";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto3["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "PCESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto63["m_sql"] = "PCESTRATEGIA";
$proto63["m_srcTableName"] = "estudiantes";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto3["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "PCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto65["m_sql"] = "PCHERRAMIENTAS";
$proto65["m_srcTableName"] = "estudiantes";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto3["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto67["m_sql"] = "ARTISTICALOGRO";
$proto67["m_srcTableName"] = "estudiantes";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto3["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto69["m_sql"] = "ARTISTICAINDICADOR";
$proto69["m_srcTableName"] = "estudiantes";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto3["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto71["m_sql"] = "ARTISTICAESTRATEGIA";
$proto71["m_srcTableName"] = "estudiantes";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto3["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto73["m_sql"] = "ARTISTICAHERRAMIENTAS";
$proto73["m_srcTableName"] = "estudiantes";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto3["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "SALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto75["m_sql"] = "SALOGRO";
$proto75["m_srcTableName"] = "estudiantes";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto3["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "SAINNDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto77["m_sql"] = "SAINNDICADOR";
$proto77["m_srcTableName"] = "estudiantes";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto3["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "SAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto79["m_sql"] = "SAESTRATEGIA";
$proto79["m_srcTableName"] = "estudiantes";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto3["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "SAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto81["m_sql"] = "SAHERRAMIENTAS";
$proto81["m_srcTableName"] = "estudiantes";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto3["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto83["m_sql"] = "COMPLOGRO";
$proto83["m_srcTableName"] = "estudiantes";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto3["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto85["m_sql"] = "COMPINDICADOR";
$proto85["m_srcTableName"] = "estudiantes";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto3["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto87["m_sql"] = "COMPESTRATEGIA";
$proto87["m_srcTableName"] = "estudiantes";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto3["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "estudiantes"
));

$proto89["m_sql"] = "COMPHERRAMIENTAS";
$proto89["m_srcTableName"] = "estudiantes";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto91=array();
$proto91["m_link"] = "SQLL_MAIN";
			$proto92=array();
$proto92["m_strName"] = "estudiantes";
$proto92["m_srcTableName"] = "estudiantes";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "ID_ESTUDIANTE";
$proto92["m_columns"][] = "NOMBRE";
$proto92["m_columns"][] = "FECHANACIMIENTO";
$proto92["m_columns"][] = "DIRECCION";
$proto92["m_columns"][] = "TELEFONO";
$proto92["m_columns"][] = "DIAGNOSTICO";
$proto92["m_columns"][] = "NOMBREDELPADRE";
$proto92["m_columns"][] = "NOMBREDELAMADRE";
$proto92["m_columns"][] = "NOMBREACUDIENTE";
$proto92["m_columns"][] = "HABILIDADES";
$proto92["m_columns"][] = "LIMITACIONES";
$proto92["m_columns"][] = "DOCENTEACARGO";
$proto92["m_columns"][] = "FOTODEPERFIL";
$proto92["m_columns"][] = "FISICALOGRO";
$proto92["m_columns"][] = "FISICAINDICADOR";
$proto92["m_columns"][] = "FISICAESTRATEGIA";
$proto92["m_columns"][] = "FISICAHERRAMIENTAS";
$proto92["m_columns"][] = "COMUNICATIVALOGRO";
$proto92["m_columns"][] = "COMUNICATIVAINDICADOR";
$proto92["m_columns"][] = "COMUNICATIVAESTRATEGIA";
$proto92["m_columns"][] = "COMUNICATIVAHERRAMIENTAS";
$proto92["m_columns"][] = "DCLOGRO";
$proto92["m_columns"][] = "DCINDICADOR";
$proto92["m_columns"][] = "CDESTRATEGIA";
$proto92["m_columns"][] = "DCHERRAMIENTAS";
$proto92["m_columns"][] = "PCLOGRO";
$proto92["m_columns"][] = "PCINDICADOR";
$proto92["m_columns"][] = "PCESTRATEGIA";
$proto92["m_columns"][] = "PCHERRAMIENTAS";
$proto92["m_columns"][] = "ARTISTICALOGRO";
$proto92["m_columns"][] = "ARTISTICAINDICADOR";
$proto92["m_columns"][] = "ARTISTICAESTRATEGIA";
$proto92["m_columns"][] = "ARTISTICAHERRAMIENTAS";
$proto92["m_columns"][] = "SALOGRO";
$proto92["m_columns"][] = "SAINNDICADOR";
$proto92["m_columns"][] = "SAESTRATEGIA";
$proto92["m_columns"][] = "SAHERRAMIENTAS";
$proto92["m_columns"][] = "COMPLOGRO";
$proto92["m_columns"][] = "COMPINDICADOR";
$proto92["m_columns"][] = "COMPESTRATEGIA";
$proto92["m_columns"][] = "COMPHERRAMIENTAS";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_sql"] = "estudiantes";
$proto91["m_alias"] = "";
$proto91["m_srcTableName"] = "estudiantes";
$proto93=array();
$proto93["m_sql"] = "";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "";
$proto93["m_havingmode"] = false;
$proto93["m_inBrackets"] = false;
$proto93["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="estudiantes";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_estudiantes = createSqlQuery_estudiantes();


	
		;

																																									

$tdataestudiantes[".sqlquery"] = $queryData_estudiantes;

$tableEvents["estudiantes"] = new eventsBase;
$tdataestudiantes[".hasEvents"] = false;

?>