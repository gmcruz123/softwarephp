<?php
require_once(getabspath("classes/cipherer.php"));




$tdataReporte_de_Estudiantes = array();
	$tdataReporte_de_Estudiantes[".truncateText"] = true;
	$tdataReporte_de_Estudiantes[".NumberOfChars"] = 80;
	$tdataReporte_de_Estudiantes[".ShortName"] = "Reporte_de_Estudiantes";
	$tdataReporte_de_Estudiantes[".OwnerID"] = "";
	$tdataReporte_de_Estudiantes[".OriginalTable"] = "estudiantes";

//	field labels
$fieldLabelsReporte_de_Estudiantes = array();
$fieldToolTipsReporte_de_Estudiantes = array();
$pageTitlesReporte_de_Estudiantes = array();
$placeHoldersReporte_de_Estudiantes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsReporte_de_Estudiantes["English"] = array();
	$fieldToolTipsReporte_de_Estudiantes["English"] = array();
	$placeHoldersReporte_de_Estudiantes["English"] = array();
	$pageTitlesReporte_de_Estudiantes["English"] = array();
	$fieldLabelsReporte_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsReporte_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsReporte_de_Estudiantes["English"]["NOMBRE"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["NOMBRE"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FECHANACIMIENTO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FECHANACIMIENTO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DIRECCION"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DIRECCION"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["TELEFONO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["TELEFONO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DIAGNOSTICO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DIAGNOSTICO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsReporte_de_Estudiantes["English"]["NOMBREDELPADRE"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["NOMBREDELPADRE"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsReporte_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsReporte_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsReporte_de_Estudiantes["English"]["HABILIDADES"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["HABILIDADES"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsReporte_de_Estudiantes["English"]["LIMITACIONES"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["LIMITACIONES"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DOCENTEACARGO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DOCENTEACARGO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FOTODEPERFIL"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FOTODEPERFIL"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FISICALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FISICALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FISICAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FISICAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DCLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DCLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DCINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DCINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["CDESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["CDESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["PCLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["PCLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["PCINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["PCINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["PCESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["PCESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["ARTISTICALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["ARTISTICALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["SALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["SALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["SAINNDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["SAINNDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["SAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["SAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMPLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMPLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMPINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMPINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMPESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMPESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsReporte_de_Estudiantes["English"]))
		$tdataReporte_de_Estudiantes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsReporte_de_Estudiantes[""] = array();
	$fieldToolTipsReporte_de_Estudiantes[""] = array();
	$placeHoldersReporte_de_Estudiantes[""] = array();
	$pageTitlesReporte_de_Estudiantes[""] = array();
	$fieldLabelsReporte_de_Estudiantes[""]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsReporte_de_Estudiantes[""]["ID_ESTUDIANTE"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["ID_ESTUDIANTE"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsReporte_de_Estudiantes[""]["NOMBRE"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["NOMBRE"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsReporte_de_Estudiantes[""]["FECHANACIMIENTO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FECHANACIMIENTO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsReporte_de_Estudiantes[""]["DIRECCION"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DIRECCION"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsReporte_de_Estudiantes[""]["TELEFONO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["TELEFONO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsReporte_de_Estudiantes[""]["DIAGNOSTICO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DIAGNOSTICO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsReporte_de_Estudiantes[""]["NOMBREDELPADRE"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["NOMBREDELPADRE"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsReporte_de_Estudiantes[""]["NOMBREDELAMADRE"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["NOMBREDELAMADRE"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsReporte_de_Estudiantes[""]["NOMBREACUDIENTE"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["NOMBREACUDIENTE"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsReporte_de_Estudiantes[""]["HABILIDADES"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["HABILIDADES"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsReporte_de_Estudiantes[""]["LIMITACIONES"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["LIMITACIONES"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsReporte_de_Estudiantes[""]["DOCENTEACARGO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DOCENTEACARGO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsReporte_de_Estudiantes[""]["FOTODEPERFIL"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FOTODEPERFIL"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["FISICALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FISICALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["FISICAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FISICAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["FISICAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FISICAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["DCLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DCLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["DCINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DCINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["CDESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["CDESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["DCHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["DCHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["PCLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["PCLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["PCINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["PCINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["PCESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["PCESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["PCHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["PCHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["ARTISTICALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["ARTISTICALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["SALOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["SALOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["SAINNDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["SAINNDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["SAESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["SAESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["SAHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["SAHERRAMIENTAS"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMPLOGRO"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMPLOGRO"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMPINDICADOR"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMPINDICADOR"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMPESTRATEGIA"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMPESTRATEGIA"] = "";
	$fieldLabelsReporte_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsReporte_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "";
	$placeHoldersReporte_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsReporte_de_Estudiantes[""]))
		$tdataReporte_de_Estudiantes[".isUseToolTips"] = true;
}


	$tdataReporte_de_Estudiantes[".NCSearch"] = true;



$tdataReporte_de_Estudiantes[".shortTableName"] = "Reporte_de_Estudiantes";
$tdataReporte_de_Estudiantes[".nSecOptions"] = 0;
$tdataReporte_de_Estudiantes[".recsPerRowPrint"] = 1;
$tdataReporte_de_Estudiantes[".mainTableOwnerID"] = "";
$tdataReporte_de_Estudiantes[".moveNext"] = 1;
$tdataReporte_de_Estudiantes[".entityType"] = 2;

$tdataReporte_de_Estudiantes[".strOriginalTableName"] = "estudiantes";

	



$tdataReporte_de_Estudiantes[".showAddInPopup"] = false;

$tdataReporte_de_Estudiantes[".showEditInPopup"] = false;

$tdataReporte_de_Estudiantes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataReporte_de_Estudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataReporte_de_Estudiantes[".fieldsForRegister"] = array();
	
$tdataReporte_de_Estudiantes[".listAjax"] = false;

	$tdataReporte_de_Estudiantes[".audit"] = false;

	$tdataReporte_de_Estudiantes[".locking"] = false;

$tdataReporte_de_Estudiantes[".edit"] = true;
$tdataReporte_de_Estudiantes[".afterEditAction"] = 1;
$tdataReporte_de_Estudiantes[".closePopupAfterEdit"] = 1;
$tdataReporte_de_Estudiantes[".afterEditActionDetTable"] = "";

$tdataReporte_de_Estudiantes[".add"] = true;
$tdataReporte_de_Estudiantes[".afterAddAction"] = 1;
$tdataReporte_de_Estudiantes[".closePopupAfterAdd"] = 1;
$tdataReporte_de_Estudiantes[".afterAddActionDetTable"] = "";

$tdataReporte_de_Estudiantes[".list"] = true;



$tdataReporte_de_Estudiantes[".reorderRecordsByHeader"] = true;


$tdataReporte_de_Estudiantes[".exportFormatting"] = 2;
$tdataReporte_de_Estudiantes[".exportDelimiter"] = ",";
		
$tdataReporte_de_Estudiantes[".view"] = true;


$tdataReporte_de_Estudiantes[".exportTo"] = true;

$tdataReporte_de_Estudiantes[".printFriendly"] = true;

$tdataReporte_de_Estudiantes[".delete"] = true;

$tdataReporte_de_Estudiantes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataReporte_de_Estudiantes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataReporte_de_Estudiantes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataReporte_de_Estudiantes[".searchSaving"] = false;
//

$tdataReporte_de_Estudiantes[".showSearchPanel"] = true;
		$tdataReporte_de_Estudiantes[".flexibleSearch"] = true;

$tdataReporte_de_Estudiantes[".isUseAjaxSuggest"] = true;






$tdataReporte_de_Estudiantes[".ajaxCodeSnippetAdded"] = false;

$tdataReporte_de_Estudiantes[".buttonsAdded"] = false;

$tdataReporte_de_Estudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataReporte_de_Estudiantes[".isUseTimeForSearch"] = false;





$tdataReporte_de_Estudiantes[".allSearchFields"] = array();
$tdataReporte_de_Estudiantes[".filterFields"] = array();
$tdataReporte_de_Estudiantes[".requiredSearchFields"] = array();

$tdataReporte_de_Estudiantes[".allSearchFields"][] = "ID_ESTUDIANTE";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "NOMBRE";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FECHANACIMIENTO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DIRECCION";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "TELEFONO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DIAGNOSTICO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "NOMBREDELPADRE";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "NOMBREDELAMADRE";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "NOMBREACUDIENTE";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "HABILIDADES";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "LIMITACIONES";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DOCENTEACARGO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FOTODEPERFIL";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FISICALOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FISICAINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FISICAESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "FISICAHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVALOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DCLOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DCINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "CDESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "DCHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "PCLOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "PCINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "PCESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "PCHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "ARTISTICALOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "ARTISTICAINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "ARTISTICAESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "ARTISTICAHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "SALOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "SAINNDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "SAESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "SAHERRAMIENTAS";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMPLOGRO";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMPINDICADOR";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMPESTRATEGIA";
	$tdataReporte_de_Estudiantes[".allSearchFields"][] = "COMPHERRAMIENTAS";
	

$tdataReporte_de_Estudiantes[".googleLikeFields"] = array();
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".googleLikeFields"][] = "COMPHERRAMIENTAS";


$tdataReporte_de_Estudiantes[".advSearchFields"] = array();
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".advSearchFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".tableType"] = "report";

$tdataReporte_de_Estudiantes[".printerPageOrientation"] = 1;
$tdataReporte_de_Estudiantes[".nPrinterPageScale"] = 100;

$tdataReporte_de_Estudiantes[".nPrinterSplitRecords"] = 40;

$tdataReporte_de_Estudiantes[".nPrinterPDFSplitRecords"] = 40;



$tdataReporte_de_Estudiantes[".geocodingEnabled"] = false;

//report settings
$tdataReporte_de_Estudiantes[".printReportLayout"] = 1;

$tdataReporte_de_Estudiantes[".reportPrintPartitionType"] = 1;
$tdataReporte_de_Estudiantes[".reportPrintGroupsPerPage"] = 3;
$tdataReporte_de_Estudiantes[".reportPrintPDFGroupsPerPage"] = 3;
$tdataReporte_de_Estudiantes[".lowGroup"] = 4;



$tdataReporte_de_Estudiantes[".reportGroupFields"] = true;
$tdataReporte_de_Estudiantes[".pageSize"] = 5;
$tdataReporte_de_Estudiantes[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "DIAGNOSTICO";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "HABILIDADES";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "FECHANACIMIENTO";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "LIMITACIONES";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataReporte_de_Estudiantes[".reportGroupFieldsData"] = $reportGroupFields;


$tdataReporte_de_Estudiantes[".isExistTotalFields"] = true;




$tdataReporte_de_Estudiantes[".repShowDet"] = true;

$tdataReporte_de_Estudiantes[".reportLayout"] = 1;

//end of report settings




$tdataReporte_de_Estudiantes[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataReporte_de_Estudiantes[".strOrderBy"] = $tstrOrderBy;

$tdataReporte_de_Estudiantes[".orderindexes"] = array();

$tdataReporte_de_Estudiantes[".sqlHead"] = "SELECT ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".sqlFrom"] = "FROM estudiantes";
$tdataReporte_de_Estudiantes[".sqlWhereExpr"] = "";
$tdataReporte_de_Estudiantes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataReporte_de_Estudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataReporte_de_Estudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdataReporte_de_Estudiantes[".highlightSearchResults"] = true;

$tableKeysReporte_de_Estudiantes = array();
$tableKeysReporte_de_Estudiantes[] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".Keys"] = $tableKeysReporte_de_Estudiantes;

$tdataReporte_de_Estudiantes[".listFields"] = array();
$tdataReporte_de_Estudiantes[".listFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".listFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".listFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".listFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".listFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".listFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".listFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".listFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".listFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".listFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".listFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".listFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".listFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".listFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".listFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".hideMobileList"] = array();


$tdataReporte_de_Estudiantes[".viewFields"] = array();
$tdataReporte_de_Estudiantes[".viewFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".viewFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".viewFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".viewFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".viewFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".viewFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".viewFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".viewFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".addFields"] = array();
$tdataReporte_de_Estudiantes[".addFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".addFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".addFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".addFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".addFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".addFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".addFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".addFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".addFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".addFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".addFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".addFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".addFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".addFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".masterListFields"] = array();
$tdataReporte_de_Estudiantes[".masterListFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".masterListFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".inlineAddFields"] = array();
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineAddFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".editFields"] = array();
$tdataReporte_de_Estudiantes[".editFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".editFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".editFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".editFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".editFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".editFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".editFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".editFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".editFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".editFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".editFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".editFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".editFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".editFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".inlineEditFields"] = array();
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".inlineEditFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".updateSelectedFields"] = array();
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".updateSelectedFields"][] = "COMPHERRAMIENTAS";


$tdataReporte_de_Estudiantes[".exportFields"] = array();
$tdataReporte_de_Estudiantes[".exportFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".exportFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".exportFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".exportFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".exportFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".exportFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".exportFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".exportFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".importFields"] = array();
$tdataReporte_de_Estudiantes[".importFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".importFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".importFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".importFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".importFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".importFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".importFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".importFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".importFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".importFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".importFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".importFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".importFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".importFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".importFields"][] = "COMPHERRAMIENTAS";

$tdataReporte_de_Estudiantes[".printFields"] = array();
$tdataReporte_de_Estudiantes[".printFields"][] = "ID_ESTUDIANTE";
$tdataReporte_de_Estudiantes[".printFields"][] = "NOMBRE";
$tdataReporte_de_Estudiantes[".printFields"][] = "FECHANACIMIENTO";
$tdataReporte_de_Estudiantes[".printFields"][] = "DIRECCION";
$tdataReporte_de_Estudiantes[".printFields"][] = "TELEFONO";
$tdataReporte_de_Estudiantes[".printFields"][] = "DIAGNOSTICO";
$tdataReporte_de_Estudiantes[".printFields"][] = "NOMBREDELPADRE";
$tdataReporte_de_Estudiantes[".printFields"][] = "NOMBREDELAMADRE";
$tdataReporte_de_Estudiantes[".printFields"][] = "NOMBREACUDIENTE";
$tdataReporte_de_Estudiantes[".printFields"][] = "HABILIDADES";
$tdataReporte_de_Estudiantes[".printFields"][] = "LIMITACIONES";
$tdataReporte_de_Estudiantes[".printFields"][] = "DOCENTEACARGO";
$tdataReporte_de_Estudiantes[".printFields"][] = "FOTODEPERFIL";
$tdataReporte_de_Estudiantes[".printFields"][] = "FISICALOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "FISICAINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "FISICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "FISICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMUNICATIVALOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMUNICATIVAINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "DCLOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "DCINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "CDESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "DCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "PCLOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "PCINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "PCESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "PCHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "ARTISTICALOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "ARTISTICAINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "ARTISTICAESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "SALOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "SAINNDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "SAESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "SAHERRAMIENTAS";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMPLOGRO";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMPINDICADOR";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMPESTRATEGIA";
$tdataReporte_de_Estudiantes[".printFields"][] = "COMPHERRAMIENTAS";


//	ID_ESTUDIANTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_ESTUDIANTE";
	$fdata["GoodName"] = "ID_ESTUDIANTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","ID_ESTUDIANTE");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID_ESTUDIANTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_ESTUDIANTE";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["ID_ESTUDIANTE"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","NOMBRE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["NOMBRE"] = $fdata;
//	FECHANACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHANACIMIENTO";
	$fdata["GoodName"] = "FECHANACIMIENTO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FECHANACIMIENTO");
	$fdata["FieldType"] = 135;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataReporte_de_Estudiantes["FECHANACIMIENTO"] = $fdata;
//	DIRECCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DIRECCION";
	$fdata["GoodName"] = "DIRECCION";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DIRECCION");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DIRECCION"] = $fdata;
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","TELEFONO");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["TELEFONO"] = $fdata;
//	DIAGNOSTICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIAGNOSTICO";
	$fdata["GoodName"] = "DIAGNOSTICO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DIAGNOSTICO");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DIAGNOSTICO"] = $fdata;
//	NOMBREDELPADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBREDELPADRE";
	$fdata["GoodName"] = "NOMBREDELPADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","NOMBREDELPADRE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["NOMBREDELPADRE"] = $fdata;
//	NOMBREDELAMADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBREDELAMADRE";
	$fdata["GoodName"] = "NOMBREDELAMADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","NOMBREDELAMADRE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["NOMBREDELAMADRE"] = $fdata;
//	NOMBREACUDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NOMBREACUDIENTE";
	$fdata["GoodName"] = "NOMBREACUDIENTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","NOMBREACUDIENTE");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["NOMBREACUDIENTE"] = $fdata;
//	HABILIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HABILIDADES";
	$fdata["GoodName"] = "HABILIDADES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","HABILIDADES");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["HABILIDADES"] = $fdata;
//	LIMITACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIMITACIONES";
	$fdata["GoodName"] = "LIMITACIONES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","LIMITACIONES");
	$fdata["FieldType"] = 200;

		// report field settings
		$fdata["isTotalMin"] = true;
		$fdata["isTotalAvg"] = true;
		$fdata["isTotalMax"] = true;
		$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["LIMITACIONES"] = $fdata;
//	DOCENTEACARGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DOCENTEACARGO";
	$fdata["GoodName"] = "DOCENTEACARGO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DOCENTEACARGO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DOCENTEACARGO"] = $fdata;
//	FOTODEPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FOTODEPERFIL";
	$fdata["GoodName"] = "FOTODEPERFIL";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FOTODEPERFIL");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

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

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["FOTODEPERFIL"] = $fdata;
//	FISICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FISICALOGRO";
	$fdata["GoodName"] = "FISICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FISICALOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FISICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICALOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["FISICALOGRO"] = $fdata;
//	FISICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FISICAINDICADOR";
	$fdata["GoodName"] = "FISICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FISICAINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FISICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["FISICAINDICADOR"] = $fdata;
//	FISICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FISICAESTRATEGIA";
	$fdata["GoodName"] = "FISICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FISICAESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FISICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["FISICAESTRATEGIA"] = $fdata;
//	FISICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FISICAHERRAMIENTAS";
	$fdata["GoodName"] = "FISICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","FISICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FISICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["FISICAHERRAMIENTAS"] = $fdata;
//	COMUNICATIVALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "COMUNICATIVALOGRO";
	$fdata["GoodName"] = "COMUNICATIVALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMUNICATIVALOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMUNICATIVALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVALOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMUNICATIVALOGRO"] = $fdata;
//	COMUNICATIVAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "COMUNICATIVAINDICADOR";
	$fdata["GoodName"] = "COMUNICATIVAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMUNICATIVAINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMUNICATIVAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMUNICATIVAINDICADOR"] = $fdata;
//	COMUNICATIVAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["GoodName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMUNICATIVAESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMUNICATIVAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMUNICATIVAESTRATEGIA"] = $fdata;
//	COMUNICATIVAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["GoodName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMUNICATIVAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMUNICATIVAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMUNICATIVAHERRAMIENTAS"] = $fdata;
//	DCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DCLOGRO";
	$fdata["GoodName"] = "DCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DCLOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCLOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DCLOGRO"] = $fdata;
//	DCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DCINDICADOR";
	$fdata["GoodName"] = "DCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DCINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DCINDICADOR"] = $fdata;
//	CDESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDESTRATEGIA";
	$fdata["GoodName"] = "CDESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","CDESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CDESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["CDESTRATEGIA"] = $fdata;
//	DCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DCHERRAMIENTAS";
	$fdata["GoodName"] = "DCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","DCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["DCHERRAMIENTAS"] = $fdata;
//	PCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PCLOGRO";
	$fdata["GoodName"] = "PCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","PCLOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCLOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["PCLOGRO"] = $fdata;
//	PCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PCINDICADOR";
	$fdata["GoodName"] = "PCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","PCINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["PCINDICADOR"] = $fdata;
//	PCESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PCESTRATEGIA";
	$fdata["GoodName"] = "PCESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","PCESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PCESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["PCESTRATEGIA"] = $fdata;
//	PCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PCHERRAMIENTAS";
	$fdata["GoodName"] = "PCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","PCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["PCHERRAMIENTAS"] = $fdata;
//	ARTISTICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ARTISTICALOGRO";
	$fdata["GoodName"] = "ARTISTICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","ARTISTICALOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ARTISTICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICALOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["ARTISTICALOGRO"] = $fdata;
//	ARTISTICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ARTISTICAINDICADOR";
	$fdata["GoodName"] = "ARTISTICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","ARTISTICAINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ARTISTICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["ARTISTICAINDICADOR"] = $fdata;
//	ARTISTICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ARTISTICAESTRATEGIA";
	$fdata["GoodName"] = "ARTISTICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","ARTISTICAESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ARTISTICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["ARTISTICAESTRATEGIA"] = $fdata;
//	ARTISTICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["GoodName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","ARTISTICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ARTISTICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["ARTISTICAHERRAMIENTAS"] = $fdata;
//	SALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SALOGRO";
	$fdata["GoodName"] = "SALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","SALOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["SALOGRO"] = $fdata;
//	SAINNDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SAINNDICADOR";
	$fdata["GoodName"] = "SAINNDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","SAINNDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SAINNDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAINNDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["SAINNDICADOR"] = $fdata;
//	SAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SAESTRATEGIA";
	$fdata["GoodName"] = "SAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","SAESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["SAESTRATEGIA"] = $fdata;
//	SAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SAHERRAMIENTAS";
	$fdata["GoodName"] = "SAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","SAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["SAHERRAMIENTAS"] = $fdata;
//	COMPLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "COMPLOGRO";
	$fdata["GoodName"] = "COMPLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMPLOGRO");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMPLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPLOGRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMPLOGRO"] = $fdata;
//	COMPINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "COMPINDICADOR";
	$fdata["GoodName"] = "COMPINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMPINDICADOR");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMPINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPINDICADOR";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMPINDICADOR"] = $fdata;
//	COMPESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "COMPESTRATEGIA";
	$fdata["GoodName"] = "COMPESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMPESTRATEGIA");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMPESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPESTRATEGIA";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMPESTRATEGIA"] = $fdata;
//	COMPHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "COMPHERRAMIENTAS";
	$fdata["GoodName"] = "COMPHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Reporte_de_Estudiantes","COMPHERRAMIENTAS");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COMPHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPHERRAMIENTAS";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataReporte_de_Estudiantes["COMPHERRAMIENTAS"] = $fdata;


$tables_data["Reporte de Estudiantes"]=&$tdataReporte_de_Estudiantes;
$field_labels["Reporte_de_Estudiantes"] = &$fieldLabelsReporte_de_Estudiantes;
$fieldToolTips["Reporte_de_Estudiantes"] = &$fieldToolTipsReporte_de_Estudiantes;
$placeHolders["Reporte_de_Estudiantes"] = &$placeHoldersReporte_de_Estudiantes;
$page_titles["Reporte_de_Estudiantes"] = &$pageTitlesReporte_de_Estudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Reporte de Estudiantes"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Reporte de Estudiantes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Reporte_de_Estudiantes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$proto0["m_strFrom"] = "FROM estudiantes";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_ESTUDIANTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto6["m_sql"] = "ID_ESTUDIANTE";
$proto6["m_srcTableName"] = "Reporte de Estudiantes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto8["m_sql"] = "NOMBRE";
$proto8["m_srcTableName"] = "Reporte de Estudiantes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHANACIMIENTO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto10["m_sql"] = "FECHANACIMIENTO";
$proto10["m_srcTableName"] = "Reporte de Estudiantes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DIRECCION",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto12["m_sql"] = "DIRECCION";
$proto12["m_srcTableName"] = "Reporte de Estudiantes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto14["m_sql"] = "TELEFONO";
$proto14["m_srcTableName"] = "Reporte de Estudiantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAGNOSTICO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto16["m_sql"] = "DIAGNOSTICO";
$proto16["m_srcTableName"] = "Reporte de Estudiantes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELPADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto18["m_sql"] = "NOMBREDELPADRE";
$proto18["m_srcTableName"] = "Reporte de Estudiantes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELAMADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto20["m_sql"] = "NOMBREDELAMADRE";
$proto20["m_srcTableName"] = "Reporte de Estudiantes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREACUDIENTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto22["m_sql"] = "NOMBREACUDIENTE";
$proto22["m_srcTableName"] = "Reporte de Estudiantes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HABILIDADES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto24["m_sql"] = "HABILIDADES";
$proto24["m_srcTableName"] = "Reporte de Estudiantes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LIMITACIONES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto26["m_sql"] = "LIMITACIONES";
$proto26["m_srcTableName"] = "Reporte de Estudiantes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCENTEACARGO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto28["m_sql"] = "DOCENTEACARGO";
$proto28["m_srcTableName"] = "Reporte de Estudiantes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTODEPERFIL",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto30["m_sql"] = "FOTODEPERFIL";
$proto30["m_srcTableName"] = "Reporte de Estudiantes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto32["m_sql"] = "FISICALOGRO";
$proto32["m_srcTableName"] = "Reporte de Estudiantes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto34["m_sql"] = "FISICAINDICADOR";
$proto34["m_srcTableName"] = "Reporte de Estudiantes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto36["m_sql"] = "FISICAESTRATEGIA";
$proto36["m_srcTableName"] = "Reporte de Estudiantes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto38["m_sql"] = "FISICAHERRAMIENTAS";
$proto38["m_srcTableName"] = "Reporte de Estudiantes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto40["m_sql"] = "COMUNICATIVALOGRO";
$proto40["m_srcTableName"] = "Reporte de Estudiantes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto42["m_sql"] = "COMUNICATIVAINDICADOR";
$proto42["m_srcTableName"] = "Reporte de Estudiantes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto44["m_sql"] = "COMUNICATIVAESTRATEGIA";
$proto44["m_srcTableName"] = "Reporte de Estudiantes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto46["m_sql"] = "COMUNICATIVAHERRAMIENTAS";
$proto46["m_srcTableName"] = "Reporte de Estudiantes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto48["m_sql"] = "DCLOGRO";
$proto48["m_srcTableName"] = "Reporte de Estudiantes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto50["m_sql"] = "DCINDICADOR";
$proto50["m_srcTableName"] = "Reporte de Estudiantes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CDESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto52["m_sql"] = "CDESTRATEGIA";
$proto52["m_srcTableName"] = "Reporte de Estudiantes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto54["m_sql"] = "DCHERRAMIENTAS";
$proto54["m_srcTableName"] = "Reporte de Estudiantes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto56["m_sql"] = "PCLOGRO";
$proto56["m_srcTableName"] = "Reporte de Estudiantes";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto58["m_sql"] = "PCINDICADOR";
$proto58["m_srcTableName"] = "Reporte de Estudiantes";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PCESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto60["m_sql"] = "PCESTRATEGIA";
$proto60["m_srcTableName"] = "Reporte de Estudiantes";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto62["m_sql"] = "PCHERRAMIENTAS";
$proto62["m_srcTableName"] = "Reporte de Estudiantes";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto64["m_sql"] = "ARTISTICALOGRO";
$proto64["m_srcTableName"] = "Reporte de Estudiantes";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto66["m_sql"] = "ARTISTICAINDICADOR";
$proto66["m_srcTableName"] = "Reporte de Estudiantes";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto68["m_sql"] = "ARTISTICAESTRATEGIA";
$proto68["m_srcTableName"] = "Reporte de Estudiantes";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto70["m_sql"] = "ARTISTICAHERRAMIENTAS";
$proto70["m_srcTableName"] = "Reporte de Estudiantes";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "SALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto72["m_sql"] = "SALOGRO";
$proto72["m_srcTableName"] = "Reporte de Estudiantes";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SAINNDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto74["m_sql"] = "SAINNDICADOR";
$proto74["m_srcTableName"] = "Reporte de Estudiantes";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "SAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto76["m_sql"] = "SAESTRATEGIA";
$proto76["m_srcTableName"] = "Reporte de Estudiantes";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto78["m_sql"] = "SAHERRAMIENTAS";
$proto78["m_srcTableName"] = "Reporte de Estudiantes";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto80["m_sql"] = "COMPLOGRO";
$proto80["m_srcTableName"] = "Reporte de Estudiantes";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto82["m_sql"] = "COMPINDICADOR";
$proto82["m_srcTableName"] = "Reporte de Estudiantes";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto84["m_sql"] = "COMPESTRATEGIA";
$proto84["m_srcTableName"] = "Reporte de Estudiantes";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Reporte de Estudiantes"
));

$proto86["m_sql"] = "COMPHERRAMIENTAS";
$proto86["m_srcTableName"] = "Reporte de Estudiantes";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "estudiantes";
$proto89["m_srcTableName"] = "Reporte de Estudiantes";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "ID_ESTUDIANTE";
$proto89["m_columns"][] = "NOMBRE";
$proto89["m_columns"][] = "FECHANACIMIENTO";
$proto89["m_columns"][] = "DIRECCION";
$proto89["m_columns"][] = "TELEFONO";
$proto89["m_columns"][] = "DIAGNOSTICO";
$proto89["m_columns"][] = "NOMBREDELPADRE";
$proto89["m_columns"][] = "NOMBREDELAMADRE";
$proto89["m_columns"][] = "NOMBREACUDIENTE";
$proto89["m_columns"][] = "HABILIDADES";
$proto89["m_columns"][] = "LIMITACIONES";
$proto89["m_columns"][] = "DOCENTEACARGO";
$proto89["m_columns"][] = "FOTODEPERFIL";
$proto89["m_columns"][] = "FISICALOGRO";
$proto89["m_columns"][] = "FISICAINDICADOR";
$proto89["m_columns"][] = "FISICAESTRATEGIA";
$proto89["m_columns"][] = "FISICAHERRAMIENTAS";
$proto89["m_columns"][] = "COMUNICATIVALOGRO";
$proto89["m_columns"][] = "COMUNICATIVAINDICADOR";
$proto89["m_columns"][] = "COMUNICATIVAESTRATEGIA";
$proto89["m_columns"][] = "COMUNICATIVAHERRAMIENTAS";
$proto89["m_columns"][] = "DCLOGRO";
$proto89["m_columns"][] = "DCINDICADOR";
$proto89["m_columns"][] = "CDESTRATEGIA";
$proto89["m_columns"][] = "DCHERRAMIENTAS";
$proto89["m_columns"][] = "PCLOGRO";
$proto89["m_columns"][] = "PCINDICADOR";
$proto89["m_columns"][] = "PCESTRATEGIA";
$proto89["m_columns"][] = "PCHERRAMIENTAS";
$proto89["m_columns"][] = "ARTISTICALOGRO";
$proto89["m_columns"][] = "ARTISTICAINDICADOR";
$proto89["m_columns"][] = "ARTISTICAESTRATEGIA";
$proto89["m_columns"][] = "ARTISTICAHERRAMIENTAS";
$proto89["m_columns"][] = "SALOGRO";
$proto89["m_columns"][] = "SAINNDICADOR";
$proto89["m_columns"][] = "SAESTRATEGIA";
$proto89["m_columns"][] = "SAHERRAMIENTAS";
$proto89["m_columns"][] = "COMPLOGRO";
$proto89["m_columns"][] = "COMPINDICADOR";
$proto89["m_columns"][] = "COMPESTRATEGIA";
$proto89["m_columns"][] = "COMPHERRAMIENTAS";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "estudiantes";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Reporte de Estudiantes";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Reporte de Estudiantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Reporte_de_Estudiantes = createSqlQuery_Reporte_de_Estudiantes();


	
		;

																																									

$tdataReporte_de_Estudiantes[".sqlquery"] = $queryData_Reporte_de_Estudiantes;

$tableEvents["Reporte de Estudiantes"] = new eventsBase;
$tdataReporte_de_Estudiantes[".hasEvents"] = false;

?>