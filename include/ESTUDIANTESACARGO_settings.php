<?php
require_once(getabspath("classes/cipherer.php"));




$tdataESTUDIANTESACARGO = array();
	$tdataESTUDIANTESACARGO[".truncateText"] = true;
	$tdataESTUDIANTESACARGO[".NumberOfChars"] = 80;
	$tdataESTUDIANTESACARGO[".ShortName"] = "ESTUDIANTESACARGO";
	$tdataESTUDIANTESACARGO[".OwnerID"] = "";
	$tdataESTUDIANTESACARGO[".OriginalTable"] = "estudiantes";

//	field labels
$fieldLabelsESTUDIANTESACARGO = array();
$fieldToolTipsESTUDIANTESACARGO = array();
$pageTitlesESTUDIANTESACARGO = array();
$placeHoldersESTUDIANTESACARGO = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsESTUDIANTESACARGO["English"] = array();
	$fieldToolTipsESTUDIANTESACARGO["English"] = array();
	$placeHoldersESTUDIANTESACARGO["English"] = array();
	$pageTitlesESTUDIANTESACARGO["English"] = array();
	$fieldLabelsESTUDIANTESACARGO["English"]["ID_ESTUDIANTE"] = "Codigo del Caso";
	$fieldToolTipsESTUDIANTESACARGO["English"]["ID_ESTUDIANTE"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["ID_ESTUDIANTE"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["NOMBRE"] = "Nombre Alumno";
	$fieldToolTipsESTUDIANTESACARGO["English"]["NOMBRE"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["NOMBRE"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FECHANACIMIENTO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FECHANACIMIENTO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DIRECCION"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DIRECCION"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["TELEFONO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["TELEFONO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DIAGNOSTICO"] = "Diagnostico";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DIAGNOSTICO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DIAGNOSTICO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsESTUDIANTESACARGO["English"]["NOMBREDELPADRE"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["NOMBREDELPADRE"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsESTUDIANTESACARGO["English"]["NOMBREDELAMADRE"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["NOMBREDELAMADRE"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsESTUDIANTESACARGO["English"]["NOMBREACUDIENTE"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["NOMBREACUDIENTE"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["HABILIDADES"] = "Habilidades";
	$fieldToolTipsESTUDIANTESACARGO["English"]["HABILIDADES"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["HABILIDADES"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["LIMITACIONES"] = "Limitaciones";
	$fieldToolTipsESTUDIANTESACARGO["English"]["LIMITACIONES"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["LIMITACIONES"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DOCENTEACARGO"] = "Docente a Cargo";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DOCENTEACARGO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DOCENTEACARGO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FOTODEPERFIL"] = "Foto de Perfil";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FOTODEPERFIL"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FOTODEPERFIL"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FISICALOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FISICALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FISICALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FISICAINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FISICAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FISICAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FISICAESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FISICAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FISICAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["FISICAHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMUNICATIVALOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMUNICATIVALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMUNICATIVAINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMUNICATIVAESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMUNICATIVAHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DCLOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DCLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DCLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DCINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DCINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DCINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["CDESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["CDESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["CDESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["DCHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["DCHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["DCHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["PCLOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["PCLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["PCLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["PCINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["PCINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["PCINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["PCESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["PCESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["PCESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["PCHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["PCHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["PCHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["ARTISTICALOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["ARTISTICALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["ARTISTICALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["ARTISTICAINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["ARTISTICAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["ARTISTICAESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["ARTISTICAHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["SALOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["SALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["SALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["SAINNDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["SAINNDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["SAINNDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["SAESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["SAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["SAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["SAHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["SAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["SAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMPLOGRO"] = "LOGRO";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMPLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMPLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMPINDICADOR"] = "INDICADOR DE LOGRO PIAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMPINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMPINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMPESTRATEGIA"] = "ESTRATEGIAS A UTILIZAR";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMPESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMPESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO["English"]["COMPHERRAMIENTAS"] = "HERRAMIENTAS DIDÁCTICAS";
	$fieldToolTipsESTUDIANTESACARGO["English"]["COMPHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO["English"]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsESTUDIANTESACARGO["English"]))
		$tdataESTUDIANTESACARGO[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsESTUDIANTESACARGO[""] = array();
	$fieldToolTipsESTUDIANTESACARGO[""] = array();
	$placeHoldersESTUDIANTESACARGO[""] = array();
	$pageTitlesESTUDIANTESACARGO[""] = array();
	$fieldLabelsESTUDIANTESACARGO[""]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsESTUDIANTESACARGO[""]["ID_ESTUDIANTE"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["ID_ESTUDIANTE"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsESTUDIANTESACARGO[""]["NOMBRE"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["NOMBRE"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsESTUDIANTESACARGO[""]["FECHANACIMIENTO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FECHANACIMIENTO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsESTUDIANTESACARGO[""]["DIRECCION"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DIRECCION"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsESTUDIANTESACARGO[""]["TELEFONO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["TELEFONO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsESTUDIANTESACARGO[""]["DIAGNOSTICO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DIAGNOSTICO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsESTUDIANTESACARGO[""]["NOMBREDELPADRE"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["NOMBREDELPADRE"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsESTUDIANTESACARGO[""]["NOMBREDELAMADRE"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["NOMBREDELAMADRE"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsESTUDIANTESACARGO[""]["NOMBREACUDIENTE"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["NOMBREACUDIENTE"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsESTUDIANTESACARGO[""]["HABILIDADES"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["HABILIDADES"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsESTUDIANTESACARGO[""]["LIMITACIONES"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["LIMITACIONES"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsESTUDIANTESACARGO[""]["DOCENTEACARGO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DOCENTEACARGO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsESTUDIANTESACARGO[""]["FOTODEPERFIL"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FOTODEPERFIL"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["FISICALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FISICALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["FISICAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FISICAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["FISICAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FISICAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMUNICATIVALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["DCLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DCLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["DCINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DCINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["CDESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["CDESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["DCHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["DCHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["PCLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["PCLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["PCINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["PCINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["PCESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["PCESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["PCHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["PCHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["ARTISTICALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["ARTISTICALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["ARTISTICAINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["SALOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["SALOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["SAINNDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["SAINNDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["SAESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["SAESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["SAHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["SAHERRAMIENTAS"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMPLOGRO"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMPLOGRO"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMPINDICADOR"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMPINDICADOR"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMPESTRATEGIA"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMPESTRATEGIA"] = "";
	$fieldLabelsESTUDIANTESACARGO[""]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsESTUDIANTESACARGO[""]["COMPHERRAMIENTAS"] = "";
	$placeHoldersESTUDIANTESACARGO[""]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsESTUDIANTESACARGO[""]))
		$tdataESTUDIANTESACARGO[".isUseToolTips"] = true;
}


	$tdataESTUDIANTESACARGO[".NCSearch"] = true;



$tdataESTUDIANTESACARGO[".shortTableName"] = "ESTUDIANTESACARGO";
$tdataESTUDIANTESACARGO[".nSecOptions"] = 0;
$tdataESTUDIANTESACARGO[".recsPerRowPrint"] = 1;
$tdataESTUDIANTESACARGO[".mainTableOwnerID"] = "";
$tdataESTUDIANTESACARGO[".moveNext"] = 1;
$tdataESTUDIANTESACARGO[".entityType"] = 1;

$tdataESTUDIANTESACARGO[".strOriginalTableName"] = "estudiantes";

	



$tdataESTUDIANTESACARGO[".showAddInPopup"] = true;

$tdataESTUDIANTESACARGO[".showEditInPopup"] = true;

$tdataESTUDIANTESACARGO[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
			;
$popupPagesLayoutNames["view"] = "edit_bootstrap_4col";
$tdataESTUDIANTESACARGO[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataESTUDIANTESACARGO[".fieldsForRegister"] = array();
	
$tdataESTUDIANTESACARGO[".listAjax"] = false;

	$tdataESTUDIANTESACARGO[".audit"] = false;

	$tdataESTUDIANTESACARGO[".locking"] = false;

$tdataESTUDIANTESACARGO[".edit"] = true;
$tdataESTUDIANTESACARGO[".afterEditAction"] = 1;
$tdataESTUDIANTESACARGO[".closePopupAfterEdit"] = 1;
$tdataESTUDIANTESACARGO[".afterEditActionDetTable"] = "";


$tdataESTUDIANTESACARGO[".list"] = true;



$tdataESTUDIANTESACARGO[".reorderRecordsByHeader"] = true;








$tdataESTUDIANTESACARGO[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataESTUDIANTESACARGO[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataESTUDIANTESACARGO[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataESTUDIANTESACARGO[".searchSaving"] = false;
//

$tdataESTUDIANTESACARGO[".showSearchPanel"] = true;
		$tdataESTUDIANTESACARGO[".flexibleSearch"] = true;

$tdataESTUDIANTESACARGO[".isUseAjaxSuggest"] = true;

$tdataESTUDIANTESACARGO[".rowHighlite"] = true;





$tdataESTUDIANTESACARGO[".ajaxCodeSnippetAdded"] = false;

$tdataESTUDIANTESACARGO[".buttonsAdded"] = false;

$tdataESTUDIANTESACARGO[".addPageEvents"] = false;

// use timepicker for search panel
$tdataESTUDIANTESACARGO[".isUseTimeForSearch"] = false;



$tdataESTUDIANTESACARGO[".badgeColor"] = "CD5C5C";


$tdataESTUDIANTESACARGO[".allSearchFields"] = array();
$tdataESTUDIANTESACARGO[".filterFields"] = array();
$tdataESTUDIANTESACARGO[".requiredSearchFields"] = array();

$tdataESTUDIANTESACARGO[".allSearchFields"][] = "PCLOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "PCINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "PCESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "PCHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "ARTISTICALOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "ARTISTICAINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "ARTISTICAESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "ARTISTICAHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "SALOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "SAINNDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "SAESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "SAHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMPLOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMPINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMPESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMPHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "ID_ESTUDIANTE";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "NOMBRE";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FECHANACIMIENTO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DIRECCION";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "TELEFONO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DIAGNOSTICO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "NOMBREDELPADRE";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "NOMBREDELAMADRE";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "NOMBREACUDIENTE";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "HABILIDADES";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "LIMITACIONES";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DOCENTEACARGO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FOTODEPERFIL";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FISICALOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FISICAINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FISICAESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "FISICAHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMUNICATIVALOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMUNICATIVAINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMUNICATIVAESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DCLOGRO";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DCINDICADOR";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "CDESTRATEGIA";
	$tdataESTUDIANTESACARGO[".allSearchFields"][] = "DCHERRAMIENTAS";
	

$tdataESTUDIANTESACARGO[".googleLikeFields"] = array();
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "ID_ESTUDIANTE";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "NOMBRE";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FECHANACIMIENTO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DIRECCION";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "TELEFONO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DIAGNOSTICO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "NOMBREDELPADRE";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "NOMBREDELAMADRE";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "NOMBREACUDIENTE";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "HABILIDADES";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "LIMITACIONES";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DOCENTEACARGO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FOTODEPERFIL";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FISICALOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FISICAINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FISICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "FISICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMUNICATIVALOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMUNICATIVAINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DCLOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DCINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "CDESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "DCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "PCLOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "PCINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "PCESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "PCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "ARTISTICALOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "ARTISTICAINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "ARTISTICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "SALOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "SAINNDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "SAESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "SAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMPLOGRO";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMPINDICADOR";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMPESTRATEGIA";
$tdataESTUDIANTESACARGO[".googleLikeFields"][] = "COMPHERRAMIENTAS";


$tdataESTUDIANTESACARGO[".advSearchFields"] = array();
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "PCLOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "PCINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "PCESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "PCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "ARTISTICALOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "ARTISTICAINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "ARTISTICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "SALOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "SAINNDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "SAESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "SAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMPLOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMPINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMPESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMPHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "ID_ESTUDIANTE";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "NOMBRE";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FECHANACIMIENTO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DIRECCION";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "TELEFONO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DIAGNOSTICO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "NOMBREDELPADRE";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "NOMBREDELAMADRE";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "NOMBREACUDIENTE";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "HABILIDADES";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "LIMITACIONES";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DOCENTEACARGO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FOTODEPERFIL";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FISICALOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FISICAINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FISICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "FISICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMUNICATIVALOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMUNICATIVAINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DCLOGRO";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DCINDICADOR";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "CDESTRATEGIA";
$tdataESTUDIANTESACARGO[".advSearchFields"][] = "DCHERRAMIENTAS";

$tdataESTUDIANTESACARGO[".tableType"] = "list";

$tdataESTUDIANTESACARGO[".printerPageOrientation"] = 0;
$tdataESTUDIANTESACARGO[".nPrinterPageScale"] = 100;

$tdataESTUDIANTESACARGO[".nPrinterSplitRecords"] = 40;

$tdataESTUDIANTESACARGO[".nPrinterPDFSplitRecords"] = 40;



$tdataESTUDIANTESACARGO[".geocodingEnabled"] = false;





$tdataESTUDIANTESACARGO[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataESTUDIANTESACARGO[".pageSize"] = 20;

$tdataESTUDIANTESACARGO[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataESTUDIANTESACARGO[".strOrderBy"] = $tstrOrderBy;

$tdataESTUDIANTESACARGO[".orderindexes"] = array();

$tdataESTUDIANTESACARGO[".sqlHead"] = "SELECT ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".sqlFrom"] = "FROM estudiantes";
$tdataESTUDIANTESACARGO[".sqlWhereExpr"] = "";
$tdataESTUDIANTESACARGO[".sqlTail"] = "";


//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "FISICALOGRO";
	
		$tabFields[] = "FISICAINDICADOR";
	
		$tabFields[] = "FISICAESTRATEGIA";
	
		$tabFields[] = "FISICAHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Fisica",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "COMUNICATIVALOGRO";
	
		$tabFields[] = "COMUNICATIVAINDICADOR";
	
		$tabFields[] = "COMUNICATIVAESTRATEGIA";
	
		$tabFields[] = "COMUNICATIVAHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Comunicativa",
					   'nType'=>'2',
					   'nOrder'=>6,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "DCLOGRO";
	
		$tabFields[] = "DCINDICADOR";
	
		$tabFields[] = "CDESTRATEGIA";
	
		$tabFields[] = "DCHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'DIMENSION_COGNOCITIVA1',
					   'tabName'=>"Dimensión Cognitiva",
					   'nType'=>'2',
					   'nOrder'=>11,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "PCLOGRO";
	
		$tabFields[] = "PCINDICADOR";
	
		$tabFields[] = "PCESTRATEGIA";
	
		$tabFields[] = "PCHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Psicomotriz_Corporal1',
					   'tabName'=>"Psicomotriz Corporal",
					   'nType'=>'2',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "ARTISTICALOGRO";
	
		$tabFields[] = "ARTISTICAINDICADOR";
	
		$tabFields[] = "ARTISTICAESTRATEGIA";
	
		$tabFields[] = "ARTISTICAHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Artistica1',
					   'tabName'=>"Artistica",
					   'nType'=>'2',
					   'nOrder'=>21,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "SALOGRO";
	
		$tabFields[] = "SAINNDICADOR";
	
		$tabFields[] = "SAESTRATEGIA";
	
		$tabFields[] = "SAHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Socio_Afectiva1',
					   'tabName'=>"Socio Afectiva",
					   'nType'=>'2',
					   'nOrder'=>26,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "COMPLOGRO";
	
		$tabFields[] = "COMPINDICADOR";
	
		$tabFields[] = "COMPESTRATEGIA";
	
		$tabFields[] = "COMPHERRAMIENTAS";
$arrEditTabs[] = array('tabId'=>'Comportamental_y_Diciplinaria1',
					   'tabName'=>"Comportamental y Diciplinaria",
					   'nType'=>'2',
					   'nOrder'=>31,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataESTUDIANTESACARGO[".arrEditTabs"] = $arrEditTabs;






$tdataESTUDIANTESACARGO[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataESTUDIANTESACARGO[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataESTUDIANTESACARGO[".arrGroupsPerPage"] = $arrGPP;

$tdataESTUDIANTESACARGO[".highlightSearchResults"] = true;

$tableKeysESTUDIANTESACARGO = array();
$tableKeysESTUDIANTESACARGO[] = "ID_ESTUDIANTE";
$tdataESTUDIANTESACARGO[".Keys"] = $tableKeysESTUDIANTESACARGO;

$tdataESTUDIANTESACARGO[".listFields"] = array();
$tdataESTUDIANTESACARGO[".listFields"][] = "ID_ESTUDIANTE";
$tdataESTUDIANTESACARGO[".listFields"][] = "FOTODEPERFIL";
$tdataESTUDIANTESACARGO[".listFields"][] = "DOCENTEACARGO";
$tdataESTUDIANTESACARGO[".listFields"][] = "NOMBRE";
$tdataESTUDIANTESACARGO[".listFields"][] = "DIAGNOSTICO";
$tdataESTUDIANTESACARGO[".listFields"][] = "LIMITACIONES";
$tdataESTUDIANTESACARGO[".listFields"][] = "HABILIDADES";

$tdataESTUDIANTESACARGO[".hideMobileList"] = array();


$tdataESTUDIANTESACARGO[".viewFields"] = array();

$tdataESTUDIANTESACARGO[".addFields"] = array();

$tdataESTUDIANTESACARGO[".masterListFields"] = array();
$tdataESTUDIANTESACARGO[".masterListFields"][] = "ID_ESTUDIANTE";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "NOMBRE";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FECHANACIMIENTO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DIRECCION";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "TELEFONO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DIAGNOSTICO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "NOMBREDELPADRE";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "NOMBREDELAMADRE";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "NOMBREACUDIENTE";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "HABILIDADES";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "LIMITACIONES";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DOCENTEACARGO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FOTODEPERFIL";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FISICALOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FISICAINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FISICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "FISICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMUNICATIVALOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMUNICATIVAINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DCLOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DCINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "CDESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "DCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "PCLOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "PCINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "PCESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "PCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "ARTISTICALOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "ARTISTICAINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "ARTISTICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "SALOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "SAINNDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "SAESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "SAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMPLOGRO";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMPINDICADOR";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMPESTRATEGIA";
$tdataESTUDIANTESACARGO[".masterListFields"][] = "COMPHERRAMIENTAS";

$tdataESTUDIANTESACARGO[".inlineAddFields"] = array();

$tdataESTUDIANTESACARGO[".editFields"] = array();
$tdataESTUDIANTESACARGO[".editFields"][] = "FISICALOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "FISICAINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "FISICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "FISICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMUNICATIVALOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMUNICATIVAINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "DCLOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "DCINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "CDESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "DCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "PCLOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "PCINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "PCESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "PCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "ARTISTICALOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "ARTISTICAINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "ARTISTICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "SALOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "SAINNDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "SAESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "SAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMPLOGRO";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMPINDICADOR";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMPESTRATEGIA";
$tdataESTUDIANTESACARGO[".editFields"][] = "COMPHERRAMIENTAS";

$tdataESTUDIANTESACARGO[".inlineEditFields"] = array();

$tdataESTUDIANTESACARGO[".updateSelectedFields"] = array();
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "FISICALOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "FISICAINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "FISICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "FISICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMUNICATIVALOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMUNICATIVAINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "DCLOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "DCINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "CDESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "DCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "PCLOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "PCINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "PCESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "PCHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "ARTISTICALOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "ARTISTICAINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "ARTISTICAESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "SALOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "SAINNDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "SAESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "SAHERRAMIENTAS";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMPLOGRO";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMPINDICADOR";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMPESTRATEGIA";
$tdataESTUDIANTESACARGO[".updateSelectedFields"][] = "COMPHERRAMIENTAS";


$tdataESTUDIANTESACARGO[".exportFields"] = array();

$tdataESTUDIANTESACARGO[".importFields"] = array();

$tdataESTUDIANTESACARGO[".printFields"] = array();


//	ID_ESTUDIANTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_ESTUDIANTE";
	$fdata["GoodName"] = "ID_ESTUDIANTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","ID_ESTUDIANTE");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataESTUDIANTESACARGO["ID_ESTUDIANTE"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","NOMBRE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["NOMBRE"] = $fdata;
//	FECHANACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHANACIMIENTO";
	$fdata["GoodName"] = "FECHANACIMIENTO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FECHANACIMIENTO");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["FECHANACIMIENTO"] = $fdata;
//	DIRECCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DIRECCION";
	$fdata["GoodName"] = "DIRECCION";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DIRECCION");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["DIRECCION"] = $fdata;
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","TELEFONO");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["TELEFONO"] = $fdata;
//	DIAGNOSTICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIAGNOSTICO";
	$fdata["GoodName"] = "DIAGNOSTICO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DIAGNOSTICO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["DIAGNOSTICO"] = $fdata;
//	NOMBREDELPADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBREDELPADRE";
	$fdata["GoodName"] = "NOMBREDELPADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","NOMBREDELPADRE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["NOMBREDELPADRE"] = $fdata;
//	NOMBREDELAMADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBREDELAMADRE";
	$fdata["GoodName"] = "NOMBREDELAMADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","NOMBREDELAMADRE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["NOMBREDELAMADRE"] = $fdata;
//	NOMBREACUDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NOMBREACUDIENTE";
	$fdata["GoodName"] = "NOMBREACUDIENTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","NOMBREACUDIENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["NOMBREACUDIENTE"] = $fdata;
//	HABILIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HABILIDADES";
	$fdata["GoodName"] = "HABILIDADES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","HABILIDADES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["HABILIDADES"] = $fdata;
//	LIMITACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIMITACIONES";
	$fdata["GoodName"] = "LIMITACIONES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","LIMITACIONES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["LIMITACIONES"] = $fdata;
//	DOCENTEACARGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DOCENTEACARGO";
	$fdata["GoodName"] = "DOCENTEACARGO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DOCENTEACARGO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataESTUDIANTESACARGO["DOCENTEACARGO"] = $fdata;
//	FOTODEPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FOTODEPERFIL";
	$fdata["GoodName"] = "FOTODEPERFIL";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FOTODEPERFIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FOTODEPERFIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOTODEPERFIL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
						$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

	
	
	
	
	
	
	
	
	
	
		
	
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
			$edata["ThumbnailSize"] = 100;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 100;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataESTUDIANTESACARGO["FOTODEPERFIL"] = $fdata;
//	FISICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FISICALOGRO";
	$fdata["GoodName"] = "FISICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FISICALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FISICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICALOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["FISICALOGRO"] = $fdata;
//	FISICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FISICAINDICADOR";
	$fdata["GoodName"] = "FISICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FISICAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FISICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["FISICAINDICADOR"] = $fdata;
//	FISICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FISICAESTRATEGIA";
	$fdata["GoodName"] = "FISICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FISICAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FISICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["FISICAESTRATEGIA"] = $fdata;
//	FISICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FISICAHERRAMIENTAS";
	$fdata["GoodName"] = "FISICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","FISICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FISICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FISICAHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["FISICAHERRAMIENTAS"] = $fdata;
//	COMUNICATIVALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "COMUNICATIVALOGRO";
	$fdata["GoodName"] = "COMUNICATIVALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMUNICATIVALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMUNICATIVALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVALOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMUNICATIVALOGRO"] = $fdata;
//	COMUNICATIVAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "COMUNICATIVAINDICADOR";
	$fdata["GoodName"] = "COMUNICATIVAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMUNICATIVAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMUNICATIVAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMUNICATIVAINDICADOR"] = $fdata;
//	COMUNICATIVAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["GoodName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMUNICATIVAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMUNICATIVAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMUNICATIVAESTRATEGIA"] = $fdata;
//	COMUNICATIVAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["GoodName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMUNICATIVAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMUNICATIVAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMUNICATIVAHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMUNICATIVAHERRAMIENTAS"] = $fdata;
//	DCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DCLOGRO";
	$fdata["GoodName"] = "DCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DCLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCLOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["DCLOGRO"] = $fdata;
//	DCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DCINDICADOR";
	$fdata["GoodName"] = "DCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DCINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["DCINDICADOR"] = $fdata;
//	CDESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDESTRATEGIA";
	$fdata["GoodName"] = "CDESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","CDESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "CDESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["CDESTRATEGIA"] = $fdata;
//	DCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DCHERRAMIENTAS";
	$fdata["GoodName"] = "DCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","DCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DCHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["DCHERRAMIENTAS"] = $fdata;
//	PCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PCLOGRO";
	$fdata["GoodName"] = "PCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","PCLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "PCLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCLOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["PCLOGRO"] = $fdata;
//	PCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PCINDICADOR";
	$fdata["GoodName"] = "PCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","PCINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "PCINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["PCINDICADOR"] = $fdata;
//	PCESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PCESTRATEGIA";
	$fdata["GoodName"] = "PCESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","PCESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "PCESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["PCESTRATEGIA"] = $fdata;
//	PCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PCHERRAMIENTAS";
	$fdata["GoodName"] = "PCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","PCHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "PCHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PCHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["PCHERRAMIENTAS"] = $fdata;
//	ARTISTICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ARTISTICALOGRO";
	$fdata["GoodName"] = "ARTISTICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","ARTISTICALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ARTISTICALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICALOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["ARTISTICALOGRO"] = $fdata;
//	ARTISTICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ARTISTICAINDICADOR";
	$fdata["GoodName"] = "ARTISTICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","ARTISTICAINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ARTISTICAINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["ARTISTICAINDICADOR"] = $fdata;
//	ARTISTICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ARTISTICAESTRATEGIA";
	$fdata["GoodName"] = "ARTISTICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","ARTISTICAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ARTISTICAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["ARTISTICAESTRATEGIA"] = $fdata;
//	ARTISTICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["GoodName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","ARTISTICAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ARTISTICAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ARTISTICAHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["ARTISTICAHERRAMIENTAS"] = $fdata;
//	SALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SALOGRO";
	$fdata["GoodName"] = "SALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","SALOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SALOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SALOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["SALOGRO"] = $fdata;
//	SAINNDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SAINNDICADOR";
	$fdata["GoodName"] = "SAINNDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","SAINNDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SAINNDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAINNDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["SAINNDICADOR"] = $fdata;
//	SAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SAESTRATEGIA";
	$fdata["GoodName"] = "SAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","SAESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SAESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["SAESTRATEGIA"] = $fdata;
//	SAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SAHERRAMIENTAS";
	$fdata["GoodName"] = "SAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","SAHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "SAHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SAHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["SAHERRAMIENTAS"] = $fdata;
//	COMPLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "COMPLOGRO";
	$fdata["GoodName"] = "COMPLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMPLOGRO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMPLOGRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPLOGRO";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMPLOGRO"] = $fdata;
//	COMPINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "COMPINDICADOR";
	$fdata["GoodName"] = "COMPINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMPINDICADOR");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMPINDICADOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPINDICADOR";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMPINDICADOR"] = $fdata;
//	COMPESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "COMPESTRATEGIA";
	$fdata["GoodName"] = "COMPESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMPESTRATEGIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMPESTRATEGIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPESTRATEGIA";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMPESTRATEGIA"] = $fdata;
//	COMPHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "COMPHERRAMIENTAS";
	$fdata["GoodName"] = "COMPHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("ESTUDIANTESACARGO","COMPHERRAMIENTAS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "COMPHERRAMIENTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPHERRAMIENTAS";

	
	
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
			$edata["nCols"] = 300;

	
	
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




	$tdataESTUDIANTESACARGO["COMPHERRAMIENTAS"] = $fdata;


$tables_data["ESTUDIANTESACARGO"]=&$tdataESTUDIANTESACARGO;
$field_labels["ESTUDIANTESACARGO"] = &$fieldLabelsESTUDIANTESACARGO;
$fieldToolTips["ESTUDIANTESACARGO"] = &$fieldToolTipsESTUDIANTESACARGO;
$placeHolders["ESTUDIANTESACARGO"] = &$placeHoldersESTUDIANTESACARGO;
$page_titles["ESTUDIANTESACARGO"] = &$pageTitlesESTUDIANTESACARGO;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ESTUDIANTESACARGO"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ESTUDIANTESACARGO"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ESTUDIANTESACARGO()
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
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto9["m_sql"] = "ID_ESTUDIANTE";
$proto9["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto11["m_sql"] = "NOMBRE";
$proto11["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHANACIMIENTO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto13["m_sql"] = "FECHANACIMIENTO";
$proto13["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DIRECCION",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto15["m_sql"] = "DIRECCION";
$proto15["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto17["m_sql"] = "TELEFONO";
$proto17["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAGNOSTICO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto19["m_sql"] = "DIAGNOSTICO";
$proto19["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELPADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto21["m_sql"] = "NOMBREDELPADRE";
$proto21["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELAMADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto23["m_sql"] = "NOMBREDELAMADRE";
$proto23["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREACUDIENTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto25["m_sql"] = "NOMBREACUDIENTE";
$proto25["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "HABILIDADES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto27["m_sql"] = "HABILIDADES";
$proto27["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "LIMITACIONES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto29["m_sql"] = "LIMITACIONES";
$proto29["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCENTEACARGO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto31["m_sql"] = "DOCENTEACARGO";
$proto31["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTODEPERFIL",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto33["m_sql"] = "FOTODEPERFIL";
$proto33["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto35["m_sql"] = "FISICALOGRO";
$proto35["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto37["m_sql"] = "FISICAINDICADOR";
$proto37["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto39["m_sql"] = "FISICAESTRATEGIA";
$proto39["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto41["m_sql"] = "FISICAHERRAMIENTAS";
$proto41["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto43["m_sql"] = "COMUNICATIVALOGRO";
$proto43["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto3["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto45["m_sql"] = "COMUNICATIVAINDICADOR";
$proto45["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto3["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto47["m_sql"] = "COMUNICATIVAESTRATEGIA";
$proto47["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto3["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto49["m_sql"] = "COMUNICATIVAHERRAMIENTAS";
$proto49["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto3["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "DCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto51["m_sql"] = "DCLOGRO";
$proto51["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto3["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "DCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto53["m_sql"] = "DCINDICADOR";
$proto53["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto3["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "CDESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto55["m_sql"] = "CDESTRATEGIA";
$proto55["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto3["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "DCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto57["m_sql"] = "DCHERRAMIENTAS";
$proto57["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto3["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "PCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto59["m_sql"] = "PCLOGRO";
$proto59["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto3["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "PCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto61["m_sql"] = "PCINDICADOR";
$proto61["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto3["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "PCESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto63["m_sql"] = "PCESTRATEGIA";
$proto63["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto3["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "PCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto65["m_sql"] = "PCHERRAMIENTAS";
$proto65["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto3["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto67["m_sql"] = "ARTISTICALOGRO";
$proto67["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto3["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto69["m_sql"] = "ARTISTICAINDICADOR";
$proto69["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto3["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto71["m_sql"] = "ARTISTICAESTRATEGIA";
$proto71["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto3["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto73["m_sql"] = "ARTISTICAHERRAMIENTAS";
$proto73["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto3["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "SALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto75["m_sql"] = "SALOGRO";
$proto75["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto3["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "SAINNDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto77["m_sql"] = "SAINNDICADOR";
$proto77["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto3["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "SAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto79["m_sql"] = "SAESTRATEGIA";
$proto79["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto3["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "SAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto81["m_sql"] = "SAHERRAMIENTAS";
$proto81["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto3["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto83["m_sql"] = "COMPLOGRO";
$proto83["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto3["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto85["m_sql"] = "COMPINDICADOR";
$proto85["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto3["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto87["m_sql"] = "COMPESTRATEGIA";
$proto87["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto3["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "ESTUDIANTESACARGO"
));

$proto89["m_sql"] = "COMPHERRAMIENTAS";
$proto89["m_srcTableName"] = "ESTUDIANTESACARGO";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto91=array();
$proto91["m_link"] = "SQLL_MAIN";
			$proto92=array();
$proto92["m_strName"] = "estudiantes";
$proto92["m_srcTableName"] = "ESTUDIANTESACARGO";
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
$proto91["m_srcTableName"] = "ESTUDIANTESACARGO";
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
$proto3["m_srcTableName"]="ESTUDIANTESACARGO";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_ESTUDIANTESACARGO = createSqlQuery_ESTUDIANTESACARGO();


	
		;

																																									

$tdataESTUDIANTESACARGO[".sqlquery"] = $queryData_ESTUDIANTESACARGO;

$tableEvents["ESTUDIANTESACARGO"] = new eventsBase;
$tdataESTUDIANTESACARGO[".hasEvents"] = false;

?>