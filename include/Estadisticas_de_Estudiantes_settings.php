<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEstadisticas_de_Estudiantes = array();
	$tdataEstadisticas_de_Estudiantes[".truncateText"] = true;
	$tdataEstadisticas_de_Estudiantes[".NumberOfChars"] = 80;
	$tdataEstadisticas_de_Estudiantes[".ShortName"] = "Estadisticas_de_Estudiantes";
	$tdataEstadisticas_de_Estudiantes[".OwnerID"] = "";
	$tdataEstadisticas_de_Estudiantes[".OriginalTable"] = "estudiantes";

//	field labels
$fieldLabelsEstadisticas_de_Estudiantes = array();
$fieldToolTipsEstadisticas_de_Estudiantes = array();
$pageTitlesEstadisticas_de_Estudiantes = array();
$placeHoldersEstadisticas_de_Estudiantes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEstadisticas_de_Estudiantes["English"] = array();
	$fieldToolTipsEstadisticas_de_Estudiantes["English"] = array();
	$placeHoldersEstadisticas_de_Estudiantes["English"] = array();
	$pageTitlesEstadisticas_de_Estudiantes["English"] = array();
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["ID_ESTUDIANTE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["NOMBRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["NOMBRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FECHANACIMIENTO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FECHANACIMIENTO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DIRECCION"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DIRECCION"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["TELEFONO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["TELEFONO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DIAGNOSTICO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DIAGNOSTICO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["NOMBREDELPADRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["NOMBREDELPADRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["NOMBREDELAMADRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["NOMBREACUDIENTE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["HABILIDADES"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["HABILIDADES"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["LIMITACIONES"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["LIMITACIONES"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DOCENTEACARGO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DOCENTEACARGO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FOTODEPERFIL"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FOTODEPERFIL"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FISICALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FISICALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FISICAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FISICAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FISICAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DCLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DCLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DCINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DCINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["CDESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["CDESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["DCHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["PCLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["PCLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["PCINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["PCINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["PCESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["PCESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["PCHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["ARTISTICALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["ARTISTICALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["SALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["SALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["SAINNDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["SAINNDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["SAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["SAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["SAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMPLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMPLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMPINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMPINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMPESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMPESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes["English"]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsEstadisticas_de_Estudiantes["English"]))
		$tdataEstadisticas_de_Estudiantes[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEstadisticas_de_Estudiantes[""] = array();
	$fieldToolTipsEstadisticas_de_Estudiantes[""] = array();
	$placeHoldersEstadisticas_de_Estudiantes[""] = array();
	$pageTitlesEstadisticas_de_Estudiantes[""] = array();
	$fieldLabelsEstadisticas_de_Estudiantes[""]["ID_ESTUDIANTE"] = "ID ESTUDIANTE";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["ID_ESTUDIANTE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["ID_ESTUDIANTE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["NOMBRE"] = "NOMBRE";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["NOMBRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["NOMBRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FECHANACIMIENTO"] = "FECHANACIMIENTO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FECHANACIMIENTO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FECHANACIMIENTO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DIRECCION"] = "DIRECCION";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DIRECCION"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DIRECCION"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["TELEFONO"] = "TELEFONO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["TELEFONO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["TELEFONO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DIAGNOSTICO"] = "DIAGNOSTICO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DIAGNOSTICO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DIAGNOSTICO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["NOMBREDELPADRE"] = "NOMBREDELPADRE";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["NOMBREDELPADRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["NOMBREDELPADRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["NOMBREDELAMADRE"] = "NOMBREDELAMADRE";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["NOMBREDELAMADRE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["NOMBREDELAMADRE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["NOMBREACUDIENTE"] = "NOMBREACUDIENTE";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["NOMBREACUDIENTE"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["NOMBREACUDIENTE"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["HABILIDADES"] = "HABILIDADES";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["HABILIDADES"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["HABILIDADES"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["LIMITACIONES"] = "LIMITACIONES";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["LIMITACIONES"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["LIMITACIONES"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DOCENTEACARGO"] = "DOCENTEACARGO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DOCENTEACARGO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DOCENTEACARGO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FOTODEPERFIL"] = "FOTODEPERFIL";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FOTODEPERFIL"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FOTODEPERFIL"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FISICALOGRO"] = "FISICALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FISICALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FISICALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FISICAINDICADOR"] = "FISICAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FISICAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FISICAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FISICAESTRATEGIA"] = "FISICAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FISICAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FISICAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "FISICAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["FISICAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "COMUNICATIVALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMUNICATIVALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "COMUNICATIVAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMUNICATIVAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "COMUNICATIVAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMUNICATIVAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "COMUNICATIVAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMUNICATIVAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DCLOGRO"] = "DCLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DCLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DCLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DCINDICADOR"] = "DCINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DCINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DCINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["CDESTRATEGIA"] = "CDESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["CDESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["CDESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["DCHERRAMIENTAS"] = "DCHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["DCHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["DCHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["PCLOGRO"] = "PCLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["PCLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["PCLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["PCINDICADOR"] = "PCINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["PCINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["PCINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["PCESTRATEGIA"] = "PCESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["PCESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["PCESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["PCHERRAMIENTAS"] = "PCHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["PCHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["PCHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["ARTISTICALOGRO"] = "ARTISTICALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["ARTISTICALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["ARTISTICALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "ARTISTICAINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["ARTISTICAINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "ARTISTICAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["ARTISTICAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "ARTISTICAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["ARTISTICAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["SALOGRO"] = "SALOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["SALOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["SALOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["SAINNDICADOR"] = "SAINNDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["SAINNDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["SAINNDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["SAESTRATEGIA"] = "SAESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["SAESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["SAESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["SAHERRAMIENTAS"] = "SAHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["SAHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["SAHERRAMIENTAS"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMPLOGRO"] = "COMPLOGRO";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMPLOGRO"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMPLOGRO"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMPINDICADOR"] = "COMPINDICADOR";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMPINDICADOR"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMPINDICADOR"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMPESTRATEGIA"] = "COMPESTRATEGIA";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMPESTRATEGIA"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMPESTRATEGIA"] = "";
	$fieldLabelsEstadisticas_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "COMPHERRAMIENTAS";
	$fieldToolTipsEstadisticas_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "";
	$placeHoldersEstadisticas_de_Estudiantes[""]["COMPHERRAMIENTAS"] = "";
	if (count($fieldToolTipsEstadisticas_de_Estudiantes[""]))
		$tdataEstadisticas_de_Estudiantes[".isUseToolTips"] = true;
}


	$tdataEstadisticas_de_Estudiantes[".NCSearch"] = true;



$tdataEstadisticas_de_Estudiantes[".shortTableName"] = "Estadisticas_de_Estudiantes";
$tdataEstadisticas_de_Estudiantes[".nSecOptions"] = 0;
$tdataEstadisticas_de_Estudiantes[".recsPerRowPrint"] = 1;
$tdataEstadisticas_de_Estudiantes[".mainTableOwnerID"] = "";
$tdataEstadisticas_de_Estudiantes[".moveNext"] = 1;
$tdataEstadisticas_de_Estudiantes[".entityType"] = 2;

$tdataEstadisticas_de_Estudiantes[".strOriginalTableName"] = "estudiantes";

	



$tdataEstadisticas_de_Estudiantes[".showAddInPopup"] = false;

$tdataEstadisticas_de_Estudiantes[".showEditInPopup"] = false;

$tdataEstadisticas_de_Estudiantes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEstadisticas_de_Estudiantes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEstadisticas_de_Estudiantes[".fieldsForRegister"] = array();
	
$tdataEstadisticas_de_Estudiantes[".listAjax"] = false;

	$tdataEstadisticas_de_Estudiantes[".audit"] = false;

	$tdataEstadisticas_de_Estudiantes[".locking"] = false;

$tdataEstadisticas_de_Estudiantes[".edit"] = true;
$tdataEstadisticas_de_Estudiantes[".afterEditAction"] = 1;
$tdataEstadisticas_de_Estudiantes[".closePopupAfterEdit"] = 1;
$tdataEstadisticas_de_Estudiantes[".afterEditActionDetTable"] = "";

$tdataEstadisticas_de_Estudiantes[".add"] = true;
$tdataEstadisticas_de_Estudiantes[".afterAddAction"] = 1;
$tdataEstadisticas_de_Estudiantes[".closePopupAfterAdd"] = 1;
$tdataEstadisticas_de_Estudiantes[".afterAddActionDetTable"] = "";

$tdataEstadisticas_de_Estudiantes[".list"] = true;



$tdataEstadisticas_de_Estudiantes[".reorderRecordsByHeader"] = true;


$tdataEstadisticas_de_Estudiantes[".exportFormatting"] = 2;
$tdataEstadisticas_de_Estudiantes[".exportDelimiter"] = ",";
		
$tdataEstadisticas_de_Estudiantes[".view"] = true;


$tdataEstadisticas_de_Estudiantes[".exportTo"] = true;

$tdataEstadisticas_de_Estudiantes[".printFriendly"] = true;

$tdataEstadisticas_de_Estudiantes[".delete"] = true;

$tdataEstadisticas_de_Estudiantes[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEstadisticas_de_Estudiantes[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEstadisticas_de_Estudiantes[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEstadisticas_de_Estudiantes[".searchSaving"] = false;
//

$tdataEstadisticas_de_Estudiantes[".showSearchPanel"] = true;
		$tdataEstadisticas_de_Estudiantes[".flexibleSearch"] = true;

$tdataEstadisticas_de_Estudiantes[".isUseAjaxSuggest"] = true;






$tdataEstadisticas_de_Estudiantes[".ajaxCodeSnippetAdded"] = false;

$tdataEstadisticas_de_Estudiantes[".buttonsAdded"] = false;

$tdataEstadisticas_de_Estudiantes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEstadisticas_de_Estudiantes[".isUseTimeForSearch"] = false;





$tdataEstadisticas_de_Estudiantes[".allSearchFields"] = array();
$tdataEstadisticas_de_Estudiantes[".filterFields"] = array();
$tdataEstadisticas_de_Estudiantes[".requiredSearchFields"] = array();

$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "ID_ESTUDIANTE";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "NOMBRE";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FECHANACIMIENTO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DIRECCION";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "TELEFONO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DIAGNOSTICO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "NOMBREDELPADRE";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "NOMBREDELAMADRE";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "NOMBREACUDIENTE";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "HABILIDADES";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "LIMITACIONES";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DOCENTEACARGO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FOTODEPERFIL";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FISICALOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FISICAINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FISICAESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "FISICAHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVALOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DCLOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DCINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "CDESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "DCHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "PCLOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "PCINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "PCESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "PCHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "ARTISTICALOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "ARTISTICAINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "ARTISTICAESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "ARTISTICAHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "SALOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "SAINNDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "SAESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "SAHERRAMIENTAS";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMPLOGRO";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMPINDICADOR";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMPESTRATEGIA";
	$tdataEstadisticas_de_Estudiantes[".allSearchFields"][] = "COMPHERRAMIENTAS";
	

$tdataEstadisticas_de_Estudiantes[".googleLikeFields"] = array();
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".googleLikeFields"][] = "COMPHERRAMIENTAS";


$tdataEstadisticas_de_Estudiantes[".advSearchFields"] = array();
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".advSearchFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".tableType"] = "report";

$tdataEstadisticas_de_Estudiantes[".printerPageOrientation"] = 0;
$tdataEstadisticas_de_Estudiantes[".nPrinterPageScale"] = 100;

$tdataEstadisticas_de_Estudiantes[".nPrinterSplitRecords"] = 40;

$tdataEstadisticas_de_Estudiantes[".nPrinterPDFSplitRecords"] = 40;



$tdataEstadisticas_de_Estudiantes[".geocodingEnabled"] = false;

//report settings
$tdataEstadisticas_de_Estudiantes[".crossTabReport"] = true;

$tdataEstadisticas_de_Estudiantes[".reportGroupFields"] = true;
$tdataEstadisticas_de_Estudiantes[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "HABILIDADES";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "LIMITACIONES";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "DIAGNOSTICO";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "NOMBRE";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 4;
	$rgroupField['showGroupSummary'] = "0";
	$rgroupField['crossTabAxis'] = "2";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "FECHANACIMIENTO";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 5;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataEstadisticas_de_Estudiantes[".reportGroupFieldsData"] = $reportGroupFields;


$tdataEstadisticas_de_Estudiantes[".isExistTotalFields"] = true;




$tdataEstadisticas_de_Estudiantes[".repShowDet"] = true;

$tdataEstadisticas_de_Estudiantes[".reportLayout"] = 0;

//end of report settings




$tdataEstadisticas_de_Estudiantes[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEstadisticas_de_Estudiantes[".strOrderBy"] = $tstrOrderBy;

$tdataEstadisticas_de_Estudiantes[".orderindexes"] = array();

$tdataEstadisticas_de_Estudiantes[".sqlHead"] = "SELECT ID_ESTUDIANTE,  	NOMBRE,  	FECHANACIMIENTO,  	DIRECCION,  	TELEFONO,  	DIAGNOSTICO,  	NOMBREDELPADRE,  	NOMBREDELAMADRE,  	NOMBREACUDIENTE,  	HABILIDADES,  	LIMITACIONES,  	DOCENTEACARGO,  	FOTODEPERFIL,  	FISICALOGRO,  	FISICAINDICADOR,  	FISICAESTRATEGIA,  	FISICAHERRAMIENTAS,  	COMUNICATIVALOGRO,  	COMUNICATIVAINDICADOR,  	COMUNICATIVAESTRATEGIA,  	COMUNICATIVAHERRAMIENTAS,  	DCLOGRO,  	DCINDICADOR,  	CDESTRATEGIA,  	DCHERRAMIENTAS,  	PCLOGRO,  	PCINDICADOR,  	PCESTRATEGIA,  	PCHERRAMIENTAS,  	ARTISTICALOGRO,  	ARTISTICAINDICADOR,  	ARTISTICAESTRATEGIA,  	ARTISTICAHERRAMIENTAS,  	SALOGRO,  	SAINNDICADOR,  	SAESTRATEGIA,  	SAHERRAMIENTAS,  	COMPLOGRO,  	COMPINDICADOR,  	COMPESTRATEGIA,  	COMPHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".sqlFrom"] = "FROM estudiantes";
$tdataEstadisticas_de_Estudiantes[".sqlWhereExpr"] = "";
$tdataEstadisticas_de_Estudiantes[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEstadisticas_de_Estudiantes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEstadisticas_de_Estudiantes[".arrGroupsPerPage"] = $arrGPP;

$tdataEstadisticas_de_Estudiantes[".highlightSearchResults"] = true;

$tableKeysEstadisticas_de_Estudiantes = array();
$tableKeysEstadisticas_de_Estudiantes[] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".Keys"] = $tableKeysEstadisticas_de_Estudiantes;

$tdataEstadisticas_de_Estudiantes[".listFields"] = array();
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".listFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".hideMobileList"] = array();


$tdataEstadisticas_de_Estudiantes[".viewFields"] = array();
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".viewFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".addFields"] = array();
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".addFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".masterListFields"] = array();
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".masterListFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".inlineAddFields"] = array();
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineAddFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".editFields"] = array();
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".editFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".inlineEditFields"] = array();
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".inlineEditFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"] = array();
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".updateSelectedFields"][] = "COMPHERRAMIENTAS";


$tdataEstadisticas_de_Estudiantes[".exportFields"] = array();
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".exportFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".importFields"] = array();
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".importFields"][] = "COMPHERRAMIENTAS";

$tdataEstadisticas_de_Estudiantes[".printFields"] = array();
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "ID_ESTUDIANTE";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "NOMBRE";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FECHANACIMIENTO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DIRECCION";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "TELEFONO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DIAGNOSTICO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "NOMBREDELPADRE";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "NOMBREDELAMADRE";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "NOMBREACUDIENTE";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "HABILIDADES";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "LIMITACIONES";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DOCENTEACARGO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FOTODEPERFIL";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FISICALOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FISICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FISICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "FISICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMUNICATIVALOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMUNICATIVAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMUNICATIVAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMUNICATIVAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DCLOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "CDESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "DCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "PCLOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "PCINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "PCESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "PCHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "ARTISTICALOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "ARTISTICAINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "ARTISTICAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "ARTISTICAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "SALOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "SAINNDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "SAESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "SAHERRAMIENTAS";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMPLOGRO";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMPINDICADOR";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMPESTRATEGIA";
$tdataEstadisticas_de_Estudiantes[".printFields"][] = "COMPHERRAMIENTAS";


//	ID_ESTUDIANTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_ESTUDIANTE";
	$fdata["GoodName"] = "ID_ESTUDIANTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","ID_ESTUDIANTE");
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




	$tdataEstadisticas_de_Estudiantes["ID_ESTUDIANTE"] = $fdata;
//	NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRE";
	$fdata["GoodName"] = "NOMBRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","NOMBRE");
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




	$tdataEstadisticas_de_Estudiantes["NOMBRE"] = $fdata;
//	FECHANACIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FECHANACIMIENTO";
	$fdata["GoodName"] = "FECHANACIMIENTO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FECHANACIMIENTO");
	$fdata["FieldType"] = 135;

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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["FECHANACIMIENTO"] = $fdata;
//	DIRECCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DIRECCION";
	$fdata["GoodName"] = "DIRECCION";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DIRECCION");
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




	$tdataEstadisticas_de_Estudiantes["DIRECCION"] = $fdata;
//	TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TELEFONO";
	$fdata["GoodName"] = "TELEFONO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","TELEFONO");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["TELEFONO"] = $fdata;
//	DIAGNOSTICO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIAGNOSTICO";
	$fdata["GoodName"] = "DIAGNOSTICO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DIAGNOSTICO");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["DIAGNOSTICO"] = $fdata;
//	NOMBREDELPADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBREDELPADRE";
	$fdata["GoodName"] = "NOMBREDELPADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","NOMBREDELPADRE");
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




	$tdataEstadisticas_de_Estudiantes["NOMBREDELPADRE"] = $fdata;
//	NOMBREDELAMADRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBREDELAMADRE";
	$fdata["GoodName"] = "NOMBREDELAMADRE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","NOMBREDELAMADRE");
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




	$tdataEstadisticas_de_Estudiantes["NOMBREDELAMADRE"] = $fdata;
//	NOMBREACUDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NOMBREACUDIENTE";
	$fdata["GoodName"] = "NOMBREACUDIENTE";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","NOMBREACUDIENTE");
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




	$tdataEstadisticas_de_Estudiantes["NOMBREACUDIENTE"] = $fdata;
//	HABILIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "HABILIDADES";
	$fdata["GoodName"] = "HABILIDADES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","HABILIDADES");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["HABILIDADES"] = $fdata;
//	LIMITACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LIMITACIONES";
	$fdata["GoodName"] = "LIMITACIONES";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","LIMITACIONES");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["LIMITACIONES"] = $fdata;
//	DOCENTEACARGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DOCENTEACARGO";
	$fdata["GoodName"] = "DOCENTEACARGO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DOCENTEACARGO");
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["DOCENTEACARGO"] = $fdata;
//	FOTODEPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FOTODEPERFIL";
	$fdata["GoodName"] = "FOTODEPERFIL";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FOTODEPERFIL");
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

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 200;
			$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 200;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEstadisticas_de_Estudiantes["FOTODEPERFIL"] = $fdata;
//	FISICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "FISICALOGRO";
	$fdata["GoodName"] = "FISICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FISICALOGRO");
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




	$tdataEstadisticas_de_Estudiantes["FISICALOGRO"] = $fdata;
//	FISICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FISICAINDICADOR";
	$fdata["GoodName"] = "FISICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FISICAINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["FISICAINDICADOR"] = $fdata;
//	FISICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FISICAESTRATEGIA";
	$fdata["GoodName"] = "FISICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FISICAESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["FISICAESTRATEGIA"] = $fdata;
//	FISICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FISICAHERRAMIENTAS";
	$fdata["GoodName"] = "FISICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","FISICAHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["FISICAHERRAMIENTAS"] = $fdata;
//	COMUNICATIVALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "COMUNICATIVALOGRO";
	$fdata["GoodName"] = "COMUNICATIVALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMUNICATIVALOGRO");
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




	$tdataEstadisticas_de_Estudiantes["COMUNICATIVALOGRO"] = $fdata;
//	COMUNICATIVAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "COMUNICATIVAINDICADOR";
	$fdata["GoodName"] = "COMUNICATIVAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMUNICATIVAINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["COMUNICATIVAINDICADOR"] = $fdata;
//	COMUNICATIVAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["GoodName"] = "COMUNICATIVAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMUNICATIVAESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["COMUNICATIVAESTRATEGIA"] = $fdata;
//	COMUNICATIVAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["GoodName"] = "COMUNICATIVAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMUNICATIVAHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["COMUNICATIVAHERRAMIENTAS"] = $fdata;
//	DCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DCLOGRO";
	$fdata["GoodName"] = "DCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DCLOGRO");
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




	$tdataEstadisticas_de_Estudiantes["DCLOGRO"] = $fdata;
//	DCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DCINDICADOR";
	$fdata["GoodName"] = "DCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DCINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["DCINDICADOR"] = $fdata;
//	CDESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CDESTRATEGIA";
	$fdata["GoodName"] = "CDESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","CDESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["CDESTRATEGIA"] = $fdata;
//	DCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DCHERRAMIENTAS";
	$fdata["GoodName"] = "DCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","DCHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["DCHERRAMIENTAS"] = $fdata;
//	PCLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "PCLOGRO";
	$fdata["GoodName"] = "PCLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","PCLOGRO");
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




	$tdataEstadisticas_de_Estudiantes["PCLOGRO"] = $fdata;
//	PCINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "PCINDICADOR";
	$fdata["GoodName"] = "PCINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","PCINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["PCINDICADOR"] = $fdata;
//	PCESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "PCESTRATEGIA";
	$fdata["GoodName"] = "PCESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","PCESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["PCESTRATEGIA"] = $fdata;
//	PCHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PCHERRAMIENTAS";
	$fdata["GoodName"] = "PCHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","PCHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["PCHERRAMIENTAS"] = $fdata;
//	ARTISTICALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ARTISTICALOGRO";
	$fdata["GoodName"] = "ARTISTICALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","ARTISTICALOGRO");
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




	$tdataEstadisticas_de_Estudiantes["ARTISTICALOGRO"] = $fdata;
//	ARTISTICAINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ARTISTICAINDICADOR";
	$fdata["GoodName"] = "ARTISTICAINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","ARTISTICAINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["ARTISTICAINDICADOR"] = $fdata;
//	ARTISTICAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ARTISTICAESTRATEGIA";
	$fdata["GoodName"] = "ARTISTICAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","ARTISTICAESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["ARTISTICAESTRATEGIA"] = $fdata;
//	ARTISTICAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["GoodName"] = "ARTISTICAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","ARTISTICAHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["ARTISTICAHERRAMIENTAS"] = $fdata;
//	SALOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "SALOGRO";
	$fdata["GoodName"] = "SALOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","SALOGRO");
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




	$tdataEstadisticas_de_Estudiantes["SALOGRO"] = $fdata;
//	SAINNDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "SAINNDICADOR";
	$fdata["GoodName"] = "SAINNDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","SAINNDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["SAINNDICADOR"] = $fdata;
//	SAESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "SAESTRATEGIA";
	$fdata["GoodName"] = "SAESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","SAESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["SAESTRATEGIA"] = $fdata;
//	SAHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "SAHERRAMIENTAS";
	$fdata["GoodName"] = "SAHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","SAHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["SAHERRAMIENTAS"] = $fdata;
//	COMPLOGRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "COMPLOGRO";
	$fdata["GoodName"] = "COMPLOGRO";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMPLOGRO");
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




	$tdataEstadisticas_de_Estudiantes["COMPLOGRO"] = $fdata;
//	COMPINDICADOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "COMPINDICADOR";
	$fdata["GoodName"] = "COMPINDICADOR";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMPINDICADOR");
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




	$tdataEstadisticas_de_Estudiantes["COMPINDICADOR"] = $fdata;
//	COMPESTRATEGIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "COMPESTRATEGIA";
	$fdata["GoodName"] = "COMPESTRATEGIA";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMPESTRATEGIA");
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




	$tdataEstadisticas_de_Estudiantes["COMPESTRATEGIA"] = $fdata;
//	COMPHERRAMIENTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "COMPHERRAMIENTAS";
	$fdata["GoodName"] = "COMPHERRAMIENTAS";
	$fdata["ownerTable"] = "estudiantes";
	$fdata["Label"] = GetFieldLabel("Estadisticas_de_Estudiantes","COMPHERRAMIENTAS");
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




	$tdataEstadisticas_de_Estudiantes["COMPHERRAMIENTAS"] = $fdata;


$tables_data["Estadisticas de Estudiantes"]=&$tdataEstadisticas_de_Estudiantes;
$field_labels["Estadisticas_de_Estudiantes"] = &$fieldLabelsEstadisticas_de_Estudiantes;
$fieldToolTips["Estadisticas_de_Estudiantes"] = &$fieldToolTipsEstadisticas_de_Estudiantes;
$placeHolders["Estadisticas_de_Estudiantes"] = &$placeHoldersEstadisticas_de_Estudiantes;
$page_titles["Estadisticas_de_Estudiantes"] = &$pageTitlesEstadisticas_de_Estudiantes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Estadisticas de Estudiantes"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Estadisticas_de_Estudiantes()
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
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto6["m_sql"] = "ID_ESTUDIANTE";
$proto6["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto8["m_sql"] = "NOMBRE";
$proto8["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHANACIMIENTO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto10["m_sql"] = "FECHANACIMIENTO";
$proto10["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DIRECCION",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto12["m_sql"] = "DIRECCION";
$proto12["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TELEFONO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto14["m_sql"] = "TELEFONO";
$proto14["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAGNOSTICO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto16["m_sql"] = "DIAGNOSTICO";
$proto16["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELPADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto18["m_sql"] = "NOMBREDELPADRE";
$proto18["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREDELAMADRE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto20["m_sql"] = "NOMBREDELAMADRE";
$proto20["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBREACUDIENTE",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto22["m_sql"] = "NOMBREACUDIENTE";
$proto22["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "HABILIDADES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto24["m_sql"] = "HABILIDADES";
$proto24["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LIMITACIONES",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto26["m_sql"] = "LIMITACIONES";
$proto26["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCENTEACARGO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto28["m_sql"] = "DOCENTEACARGO";
$proto28["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTODEPERFIL",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto30["m_sql"] = "FOTODEPERFIL";
$proto30["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto32["m_sql"] = "FISICALOGRO";
$proto32["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto34["m_sql"] = "FISICAINDICADOR";
$proto34["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto36["m_sql"] = "FISICAESTRATEGIA";
$proto36["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FISICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto38["m_sql"] = "FISICAHERRAMIENTAS";
$proto38["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto40["m_sql"] = "COMUNICATIVALOGRO";
$proto40["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto42["m_sql"] = "COMUNICATIVAINDICADOR";
$proto42["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto44["m_sql"] = "COMUNICATIVAESTRATEGIA";
$proto44["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "COMUNICATIVAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto46["m_sql"] = "COMUNICATIVAHERRAMIENTAS";
$proto46["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto48["m_sql"] = "DCLOGRO";
$proto48["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto50["m_sql"] = "DCINDICADOR";
$proto50["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CDESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto52["m_sql"] = "CDESTRATEGIA";
$proto52["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto54["m_sql"] = "DCHERRAMIENTAS";
$proto54["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "PCLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto56["m_sql"] = "PCLOGRO";
$proto56["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "PCINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto58["m_sql"] = "PCINDICADOR";
$proto58["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "PCESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto60["m_sql"] = "PCESTRATEGIA";
$proto60["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PCHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto62["m_sql"] = "PCHERRAMIENTAS";
$proto62["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto64["m_sql"] = "ARTISTICALOGRO";
$proto64["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto66["m_sql"] = "ARTISTICAINDICADOR";
$proto66["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto68["m_sql"] = "ARTISTICAESTRATEGIA";
$proto68["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ARTISTICAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto70["m_sql"] = "ARTISTICAHERRAMIENTAS";
$proto70["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "SALOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto72["m_sql"] = "SALOGRO";
$proto72["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "SAINNDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto74["m_sql"] = "SAINNDICADOR";
$proto74["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "SAESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto76["m_sql"] = "SAESTRATEGIA";
$proto76["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "SAHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto78["m_sql"] = "SAHERRAMIENTAS";
$proto78["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPLOGRO",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto80["m_sql"] = "COMPLOGRO";
$proto80["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPINDICADOR",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto82["m_sql"] = "COMPINDICADOR";
$proto82["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPESTRATEGIA",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto84["m_sql"] = "COMPESTRATEGIA";
$proto84["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPHERRAMIENTAS",
	"m_strTable" => "estudiantes",
	"m_srcTableName" => "Estadisticas de Estudiantes"
));

$proto86["m_sql"] = "COMPHERRAMIENTAS";
$proto86["m_srcTableName"] = "Estadisticas de Estudiantes";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "estudiantes";
$proto89["m_srcTableName"] = "Estadisticas de Estudiantes";
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
$proto88["m_srcTableName"] = "Estadisticas de Estudiantes";
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
$proto0["m_srcTableName"]="Estadisticas de Estudiantes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Estadisticas_de_Estudiantes = createSqlQuery_Estadisticas_de_Estudiantes();


	
		;

																																									

$tdataEstadisticas_de_Estudiantes[".sqlquery"] = $queryData_Estadisticas_de_Estudiantes;

$tableEvents["Estadisticas de Estudiantes"] = new eventsBase;
$tdataEstadisticas_de_Estudiantes[".hasEvents"] = false;

?>