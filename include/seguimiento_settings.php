<?php
require_once(getabspath("classes/cipherer.php"));




$tdataseguimiento = array();
	$tdataseguimiento[".truncateText"] = true;
	$tdataseguimiento[".NumberOfChars"] = 80;
	$tdataseguimiento[".ShortName"] = "seguimiento";
	$tdataseguimiento[".OwnerID"] = "";
	$tdataseguimiento[".OriginalTable"] = "seguimiento";

//	field labels
$fieldLabelsseguimiento = array();
$fieldToolTipsseguimiento = array();
$pageTitlesseguimiento = array();
$placeHoldersseguimiento = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsseguimiento["English"] = array();
	$fieldToolTipsseguimiento["English"] = array();
	$placeHoldersseguimiento["English"] = array();
	$pageTitlesseguimiento["English"] = array();
	$fieldLabelsseguimiento["English"]["ID_SEGUIMIENTO"] = "ID SEGUIMIENTO";
	$fieldToolTipsseguimiento["English"]["ID_SEGUIMIENTO"] = "";
	$placeHoldersseguimiento["English"]["ID_SEGUIMIENTO"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION1"] = "VALORACION1";
	$fieldToolTipsseguimiento["English"]["VALORACION1"] = "";
	$placeHoldersseguimiento["English"]["VALORACION1"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION2"] = "VALORACION2";
	$fieldToolTipsseguimiento["English"]["VALORACION2"] = "";
	$placeHoldersseguimiento["English"]["VALORACION2"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION3"] = "VALORACION3";
	$fieldToolTipsseguimiento["English"]["VALORACION3"] = "";
	$placeHoldersseguimiento["English"]["VALORACION3"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION4"] = "VALORACION4";
	$fieldToolTipsseguimiento["English"]["VALORACION4"] = "";
	$placeHoldersseguimiento["English"]["VALORACION4"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION5"] = "VALORACION5";
	$fieldToolTipsseguimiento["English"]["VALORACION5"] = "";
	$placeHoldersseguimiento["English"]["VALORACION5"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION6"] = "VALORACION6";
	$fieldToolTipsseguimiento["English"]["VALORACION6"] = "";
	$placeHoldersseguimiento["English"]["VALORACION6"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION7"] = "VALORACION7";
	$fieldToolTipsseguimiento["English"]["VALORACION7"] = "";
	$placeHoldersseguimiento["English"]["VALORACION7"] = "";
	$fieldLabelsseguimiento["English"]["VALORACION8"] = "VALORACION8";
	$fieldToolTipsseguimiento["English"]["VALORACION8"] = "";
	$placeHoldersseguimiento["English"]["VALORACION8"] = "";
	$fieldLabelsseguimiento["English"]["SUMATORIA"] = "SUMATORIA";
	$fieldToolTipsseguimiento["English"]["SUMATORIA"] = "";
	$placeHoldersseguimiento["English"]["SUMATORIA"] = "";
	$fieldLabelsseguimiento["English"]["RENDIMIENTO"] = "RENDIMIENTO %";
	$fieldToolTipsseguimiento["English"]["RENDIMIENTO"] = "";
	$placeHoldersseguimiento["English"]["RENDIMIENTO"] = "";
	$fieldLabelsseguimiento["English"]["CODCASO"] = "CODCASO";
	$fieldToolTipsseguimiento["English"]["CODCASO"] = "";
	$placeHoldersseguimiento["English"]["CODCASO"] = "";
	$fieldLabelsseguimiento["English"]["DOCENTE"] = "DOCENTE";
	$fieldToolTipsseguimiento["English"]["DOCENTE"] = "";
	$placeHoldersseguimiento["English"]["DOCENTE"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS1"] = "ASPECTOS1";
	$fieldToolTipsseguimiento["English"]["ASPECTOS1"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS1"] = "";
	$fieldLabelsseguimiento["English"]["DESCIPCION1"] = "DESCIPCION1";
	$fieldToolTipsseguimiento["English"]["DESCIPCION1"] = "";
	$placeHoldersseguimiento["English"]["DESCIPCION1"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS2"] = "ASPECTOS2";
	$fieldToolTipsseguimiento["English"]["ASPECTOS2"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS2"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION2"] = "DESCRIPCION2";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION2"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION2"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS3"] = "ASPECTOS3";
	$fieldToolTipsseguimiento["English"]["ASPECTOS3"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS3"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION5"] = "DESCRIPCION5";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION5"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION5"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION6"] = "DESCRIPCION6";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION6"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION6"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS6"] = "ASPECTOS6";
	$fieldToolTipsseguimiento["English"]["ASPECTOS6"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS6"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS7"] = "ASPECTOS7";
	$fieldToolTipsseguimiento["English"]["ASPECTOS7"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS7"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION7"] = "DESCRIPCION7";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION7"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION7"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS8"] = "ASPECTOS8";
	$fieldToolTipsseguimiento["English"]["ASPECTOS8"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS8"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION8"] = "DESCRIPCION8";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION8"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION8"] = "";
	$fieldLabelsseguimiento["English"]["DESCIPCION3"] = "DESCIPCION3";
	$fieldToolTipsseguimiento["English"]["DESCIPCION3"] = "";
	$placeHoldersseguimiento["English"]["DESCIPCION3"] = "";
	$fieldLabelsseguimiento["English"]["DESCRIPCION4"] = "DESCRIPCION4";
	$fieldToolTipsseguimiento["English"]["DESCRIPCION4"] = "";
	$placeHoldersseguimiento["English"]["DESCRIPCION4"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS4"] = "ASPECTOS4";
	$fieldToolTipsseguimiento["English"]["ASPECTOS4"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS4"] = "";
	$fieldLabelsseguimiento["English"]["ASPECTOS5"] = "ASPECTOS5";
	$fieldToolTipsseguimiento["English"]["ASPECTOS5"] = "";
	$placeHoldersseguimiento["English"]["ASPECTOS5"] = "";
	if (count($fieldToolTipsseguimiento["English"]))
		$tdataseguimiento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsseguimiento[""] = array();
	$fieldToolTipsseguimiento[""] = array();
	$placeHoldersseguimiento[""] = array();
	$pageTitlesseguimiento[""] = array();
	$fieldLabelsseguimiento[""]["ID_SEGUIMIENTO"] = "ID SEGUIMIENTO";
	$fieldToolTipsseguimiento[""]["ID_SEGUIMIENTO"] = "";
	$placeHoldersseguimiento[""]["ID_SEGUIMIENTO"] = "";
	$fieldLabelsseguimiento[""]["VALORACION1"] = "VALORACION1";
	$fieldToolTipsseguimiento[""]["VALORACION1"] = "";
	$placeHoldersseguimiento[""]["VALORACION1"] = "";
	$fieldLabelsseguimiento[""]["VALORACION2"] = "VALORACION2";
	$fieldToolTipsseguimiento[""]["VALORACION2"] = "";
	$placeHoldersseguimiento[""]["VALORACION2"] = "";
	$fieldLabelsseguimiento[""]["VALORACION3"] = "VALORACION3";
	$fieldToolTipsseguimiento[""]["VALORACION3"] = "";
	$placeHoldersseguimiento[""]["VALORACION3"] = "";
	$fieldLabelsseguimiento[""]["VALORACION4"] = "VALORACION4";
	$fieldToolTipsseguimiento[""]["VALORACION4"] = "";
	$placeHoldersseguimiento[""]["VALORACION4"] = "";
	$fieldLabelsseguimiento[""]["VALORACION5"] = "VALORACION5";
	$fieldToolTipsseguimiento[""]["VALORACION5"] = "";
	$placeHoldersseguimiento[""]["VALORACION5"] = "";
	$fieldLabelsseguimiento[""]["VALORACION6"] = "VALORACION6";
	$fieldToolTipsseguimiento[""]["VALORACION6"] = "";
	$placeHoldersseguimiento[""]["VALORACION6"] = "";
	$fieldLabelsseguimiento[""]["VALORACION7"] = "VALORACION7";
	$fieldToolTipsseguimiento[""]["VALORACION7"] = "";
	$placeHoldersseguimiento[""]["VALORACION7"] = "";
	$fieldLabelsseguimiento[""]["VALORACION8"] = "VALORACION8";
	$fieldToolTipsseguimiento[""]["VALORACION8"] = "";
	$placeHoldersseguimiento[""]["VALORACION8"] = "";
	$fieldLabelsseguimiento[""]["SUMATORIA"] = "SUMATORIA";
	$fieldToolTipsseguimiento[""]["SUMATORIA"] = "";
	$placeHoldersseguimiento[""]["SUMATORIA"] = "";
	$fieldLabelsseguimiento[""]["RENDIMIENTO"] = "RENDIMIENTO";
	$fieldToolTipsseguimiento[""]["RENDIMIENTO"] = "";
	$placeHoldersseguimiento[""]["RENDIMIENTO"] = "";
	$fieldLabelsseguimiento[""]["CODCASO"] = "CODCASO";
	$fieldToolTipsseguimiento[""]["CODCASO"] = "";
	$placeHoldersseguimiento[""]["CODCASO"] = "";
	$fieldLabelsseguimiento[""]["DOCENTE"] = "DOCENTE";
	$fieldToolTipsseguimiento[""]["DOCENTE"] = "";
	$placeHoldersseguimiento[""]["DOCENTE"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS1"] = "ASPECTOS1";
	$fieldToolTipsseguimiento[""]["ASPECTOS1"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS1"] = "";
	$fieldLabelsseguimiento[""]["DESCIPCION1"] = "DESCIPCION1";
	$fieldToolTipsseguimiento[""]["DESCIPCION1"] = "";
	$placeHoldersseguimiento[""]["DESCIPCION1"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS2"] = "ASPECTOS2";
	$fieldToolTipsseguimiento[""]["ASPECTOS2"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS2"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION2"] = "DESCRIPCION2";
	$fieldToolTipsseguimiento[""]["DESCRIPCION2"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION2"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS3"] = "ASPECTOS3";
	$fieldToolTipsseguimiento[""]["ASPECTOS3"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS3"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION5"] = "DESCRIPCION5";
	$fieldToolTipsseguimiento[""]["DESCRIPCION5"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION5"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION6"] = "DESCRIPCION6";
	$fieldToolTipsseguimiento[""]["DESCRIPCION6"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION6"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS6"] = "ASPECTOS6";
	$fieldToolTipsseguimiento[""]["ASPECTOS6"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS6"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS7"] = "ASPECTOS7";
	$fieldToolTipsseguimiento[""]["ASPECTOS7"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS7"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION7"] = "DESCRIPCION7";
	$fieldToolTipsseguimiento[""]["DESCRIPCION7"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION7"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS8"] = "ASPECTOS8";
	$fieldToolTipsseguimiento[""]["ASPECTOS8"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS8"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION8"] = "DESCRIPCION8";
	$fieldToolTipsseguimiento[""]["DESCRIPCION8"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION8"] = "";
	$fieldLabelsseguimiento[""]["DESCIPCION3"] = "DESCIPCION3";
	$fieldToolTipsseguimiento[""]["DESCIPCION3"] = "";
	$placeHoldersseguimiento[""]["DESCIPCION3"] = "";
	$fieldLabelsseguimiento[""]["DESCRIPCION4"] = "DESCRIPCION4";
	$fieldToolTipsseguimiento[""]["DESCRIPCION4"] = "";
	$placeHoldersseguimiento[""]["DESCRIPCION4"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS4"] = "ASPECTOS4";
	$fieldToolTipsseguimiento[""]["ASPECTOS4"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS4"] = "";
	$fieldLabelsseguimiento[""]["ASPECTOS5"] = "ASPECTOS5";
	$fieldToolTipsseguimiento[""]["ASPECTOS5"] = "";
	$placeHoldersseguimiento[""]["ASPECTOS5"] = "";
	if (count($fieldToolTipsseguimiento[""]))
		$tdataseguimiento[".isUseToolTips"] = true;
}


	$tdataseguimiento[".NCSearch"] = true;



$tdataseguimiento[".shortTableName"] = "seguimiento";
$tdataseguimiento[".nSecOptions"] = 0;
$tdataseguimiento[".recsPerRowPrint"] = 1;
$tdataseguimiento[".mainTableOwnerID"] = "";
$tdataseguimiento[".moveNext"] = 1;
$tdataseguimiento[".entityType"] = 0;

$tdataseguimiento[".strOriginalTableName"] = "seguimiento";

	



$tdataseguimiento[".showAddInPopup"] = true;

$tdataseguimiento[".showEditInPopup"] = true;

$tdataseguimiento[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap_2col";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdataseguimiento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataseguimiento[".fieldsForRegister"] = array();
	
$tdataseguimiento[".listAjax"] = false;

	$tdataseguimiento[".audit"] = false;

	$tdataseguimiento[".locking"] = false;

$tdataseguimiento[".edit"] = true;
$tdataseguimiento[".afterEditAction"] = 1;
$tdataseguimiento[".closePopupAfterEdit"] = 1;
$tdataseguimiento[".afterEditActionDetTable"] = "";

$tdataseguimiento[".add"] = true;
$tdataseguimiento[".afterAddAction"] = 1;
$tdataseguimiento[".closePopupAfterAdd"] = 1;
$tdataseguimiento[".afterAddActionDetTable"] = "";

$tdataseguimiento[".list"] = true;



$tdataseguimiento[".reorderRecordsByHeader"] = true;


$tdataseguimiento[".exportFormatting"] = 2;
$tdataseguimiento[".exportDelimiter"] = ",";
		
$tdataseguimiento[".view"] = true;

$tdataseguimiento[".import"] = true;

$tdataseguimiento[".exportTo"] = true;

$tdataseguimiento[".printFriendly"] = true;

$tdataseguimiento[".delete"] = true;

$tdataseguimiento[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataseguimiento[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataseguimiento[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataseguimiento[".searchSaving"] = false;
//

	$tdataseguimiento[".showSearchPanel"] = false;

$tdataseguimiento[".isUseAjaxSuggest"] = true;

$tdataseguimiento[".rowHighlite"] = true;





$tdataseguimiento[".ajaxCodeSnippetAdded"] = false;

$tdataseguimiento[".buttonsAdded"] = false;

$tdataseguimiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataseguimiento[".isUseTimeForSearch"] = false;



$tdataseguimiento[".badgeColor"] = "1E90FF";


$tdataseguimiento[".allSearchFields"] = array();
$tdataseguimiento[".filterFields"] = array();
$tdataseguimiento[".requiredSearchFields"] = array();

$tdataseguimiento[".allSearchFields"][] = "ID_SEGUIMIENTO";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION1";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION2";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION3";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION4";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION5";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION6";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION7";
	$tdataseguimiento[".allSearchFields"][] = "VALORACION8";
	$tdataseguimiento[".allSearchFields"][] = "SUMATORIA";
	$tdataseguimiento[".allSearchFields"][] = "RENDIMIENTO";
	$tdataseguimiento[".allSearchFields"][] = "CODCASO";
	$tdataseguimiento[".allSearchFields"][] = "DOCENTE";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS1";
	$tdataseguimiento[".allSearchFields"][] = "DESCIPCION1";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS2";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION2";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS3";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION5";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION6";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS6";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS7";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION7";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS8";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION8";
	$tdataseguimiento[".allSearchFields"][] = "DESCIPCION3";
	$tdataseguimiento[".allSearchFields"][] = "DESCRIPCION4";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS4";
	$tdataseguimiento[".allSearchFields"][] = "ASPECTOS5";
	

$tdataseguimiento[".googleLikeFields"] = array();
$tdataseguimiento[".googleLikeFields"][] = "ID_SEGUIMIENTO";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION1";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION2";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION3";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION4";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION5";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION6";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION7";
$tdataseguimiento[".googleLikeFields"][] = "VALORACION8";
$tdataseguimiento[".googleLikeFields"][] = "SUMATORIA";
$tdataseguimiento[".googleLikeFields"][] = "RENDIMIENTO";
$tdataseguimiento[".googleLikeFields"][] = "CODCASO";
$tdataseguimiento[".googleLikeFields"][] = "DOCENTE";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS1";
$tdataseguimiento[".googleLikeFields"][] = "DESCIPCION1";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS2";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION2";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS3";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION5";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION6";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS6";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS7";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION7";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS8";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION8";
$tdataseguimiento[".googleLikeFields"][] = "DESCIPCION3";
$tdataseguimiento[".googleLikeFields"][] = "DESCRIPCION4";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS4";
$tdataseguimiento[".googleLikeFields"][] = "ASPECTOS5";


$tdataseguimiento[".advSearchFields"] = array();
$tdataseguimiento[".advSearchFields"][] = "ID_SEGUIMIENTO";
$tdataseguimiento[".advSearchFields"][] = "VALORACION1";
$tdataseguimiento[".advSearchFields"][] = "VALORACION2";
$tdataseguimiento[".advSearchFields"][] = "VALORACION3";
$tdataseguimiento[".advSearchFields"][] = "VALORACION4";
$tdataseguimiento[".advSearchFields"][] = "VALORACION5";
$tdataseguimiento[".advSearchFields"][] = "VALORACION6";
$tdataseguimiento[".advSearchFields"][] = "VALORACION7";
$tdataseguimiento[".advSearchFields"][] = "VALORACION8";
$tdataseguimiento[".advSearchFields"][] = "SUMATORIA";
$tdataseguimiento[".advSearchFields"][] = "RENDIMIENTO";
$tdataseguimiento[".advSearchFields"][] = "CODCASO";
$tdataseguimiento[".advSearchFields"][] = "DOCENTE";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS1";
$tdataseguimiento[".advSearchFields"][] = "DESCIPCION1";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS2";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION2";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS3";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION5";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION6";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS6";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS7";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION7";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS8";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION8";
$tdataseguimiento[".advSearchFields"][] = "DESCIPCION3";
$tdataseguimiento[".advSearchFields"][] = "DESCRIPCION4";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS4";
$tdataseguimiento[".advSearchFields"][] = "ASPECTOS5";

$tdataseguimiento[".tableType"] = "list";

$tdataseguimiento[".printerPageOrientation"] = 0;
$tdataseguimiento[".nPrinterPageScale"] = 100;

$tdataseguimiento[".nPrinterSplitRecords"] = 40;

$tdataseguimiento[".nPrinterPDFSplitRecords"] = 40;



$tdataseguimiento[".geocodingEnabled"] = false;





$tdataseguimiento[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataseguimiento[".pageSize"] = 20;

$tdataseguimiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataseguimiento[".strOrderBy"] = $tstrOrderBy;

$tdataseguimiento[".orderindexes"] = array();

$tdataseguimiento[".sqlHead"] = "SELECT seguimiento.ID_SEGUIMIENTO,  seguimiento.VALORACION1,  seguimiento.VALORACION2,  seguimiento.VALORACION3,  seguimiento.VALORACION4,  seguimiento.VALORACION5,  seguimiento.VALORACION6,  seguimiento.VALORACION7,  seguimiento.VALORACION8,  seguimiento.SUMATORIA,  seguimiento.RENDIMIENTO,  seguimiento.CODCASO,  seguimiento.DOCENTE,  preguntas.ASPECTOS1,  preguntas.DESCIPCION1,  preguntas.ASPECTOS2,  preguntas.DESCRIPCION2,  preguntas.ASPECTOS3,  preguntas.DESCRIPCION5,  preguntas.DESCRIPCION6,  preguntas.ASPECTOS6,  preguntas.ASPECTOS7,  preguntas.DESCRIPCION7,  preguntas.ASPECTOS8,  preguntas.DESCRIPCION8,  preguntas.DESCIPCION3,  preguntas.DESCRIPCION4,  preguntas.ASPECTOS4,  preguntas.ASPECTOS5";
$tdataseguimiento[".sqlFrom"] = "FROM seguimiento  , preguntas";
$tdataseguimiento[".sqlWhereExpr"] = "";
$tdataseguimiento[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataseguimiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataseguimiento[".arrGroupsPerPage"] = $arrGPP;

$tdataseguimiento[".highlightSearchResults"] = true;

$tableKeysseguimiento = array();
$tableKeysseguimiento[] = "ID_SEGUIMIENTO";
$tdataseguimiento[".Keys"] = $tableKeysseguimiento;

$tdataseguimiento[".listFields"] = array();
$tdataseguimiento[".listFields"][] = "VALORACION1";
$tdataseguimiento[".listFields"][] = "VALORACION2";
$tdataseguimiento[".listFields"][] = "VALORACION3";
$tdataseguimiento[".listFields"][] = "VALORACION4";
$tdataseguimiento[".listFields"][] = "VALORACION5";
$tdataseguimiento[".listFields"][] = "VALORACION6";
$tdataseguimiento[".listFields"][] = "VALORACION7";
$tdataseguimiento[".listFields"][] = "VALORACION8";
$tdataseguimiento[".listFields"][] = "SUMATORIA";
$tdataseguimiento[".listFields"][] = "RENDIMIENTO";
$tdataseguimiento[".listFields"][] = "DOCENTE";

$tdataseguimiento[".hideMobileList"] = array();


$tdataseguimiento[".viewFields"] = array();
$tdataseguimiento[".viewFields"][] = "VALORACION1";
$tdataseguimiento[".viewFields"][] = "VALORACION2";
$tdataseguimiento[".viewFields"][] = "VALORACION3";
$tdataseguimiento[".viewFields"][] = "VALORACION4";
$tdataseguimiento[".viewFields"][] = "VALORACION5";
$tdataseguimiento[".viewFields"][] = "VALORACION6";
$tdataseguimiento[".viewFields"][] = "VALORACION7";
$tdataseguimiento[".viewFields"][] = "VALORACION8";
$tdataseguimiento[".viewFields"][] = "SUMATORIA";
$tdataseguimiento[".viewFields"][] = "RENDIMIENTO";
$tdataseguimiento[".viewFields"][] = "CODCASO";
$tdataseguimiento[".viewFields"][] = "DOCENTE";
$tdataseguimiento[".viewFields"][] = "ASPECTOS1";
$tdataseguimiento[".viewFields"][] = "DESCIPCION1";
$tdataseguimiento[".viewFields"][] = "ASPECTOS2";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION2";
$tdataseguimiento[".viewFields"][] = "ASPECTOS3";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION5";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION6";
$tdataseguimiento[".viewFields"][] = "ASPECTOS6";
$tdataseguimiento[".viewFields"][] = "ASPECTOS7";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION7";
$tdataseguimiento[".viewFields"][] = "ASPECTOS8";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION8";
$tdataseguimiento[".viewFields"][] = "DESCIPCION3";
$tdataseguimiento[".viewFields"][] = "DESCRIPCION4";
$tdataseguimiento[".viewFields"][] = "ASPECTOS4";
$tdataseguimiento[".viewFields"][] = "ASPECTOS5";

$tdataseguimiento[".addFields"] = array();
$tdataseguimiento[".addFields"][] = "VALORACION1";
$tdataseguimiento[".addFields"][] = "VALORACION2";
$tdataseguimiento[".addFields"][] = "VALORACION3";
$tdataseguimiento[".addFields"][] = "VALORACION4";
$tdataseguimiento[".addFields"][] = "VALORACION5";
$tdataseguimiento[".addFields"][] = "VALORACION6";
$tdataseguimiento[".addFields"][] = "VALORACION7";
$tdataseguimiento[".addFields"][] = "VALORACION8";
$tdataseguimiento[".addFields"][] = "CODCASO";
$tdataseguimiento[".addFields"][] = "DOCENTE";
$tdataseguimiento[".addFields"][] = "SUMATORIA";
$tdataseguimiento[".addFields"][] = "RENDIMIENTO";
$tdataseguimiento[".addFields"][] = "ASPECTOS1";
$tdataseguimiento[".addFields"][] = "DESCIPCION1";
$tdataseguimiento[".addFields"][] = "ASPECTOS2";
$tdataseguimiento[".addFields"][] = "DESCRIPCION2";
$tdataseguimiento[".addFields"][] = "ASPECTOS3";
$tdataseguimiento[".addFields"][] = "DESCRIPCION6";
$tdataseguimiento[".addFields"][] = "ASPECTOS6";
$tdataseguimiento[".addFields"][] = "ASPECTOS7";
$tdataseguimiento[".addFields"][] = "DESCRIPCION7";
$tdataseguimiento[".addFields"][] = "ASPECTOS8";
$tdataseguimiento[".addFields"][] = "DESCRIPCION8";
$tdataseguimiento[".addFields"][] = "DESCRIPCION5";
$tdataseguimiento[".addFields"][] = "DESCIPCION3";
$tdataseguimiento[".addFields"][] = "DESCRIPCION4";
$tdataseguimiento[".addFields"][] = "ASPECTOS4";
$tdataseguimiento[".addFields"][] = "ASPECTOS5";

$tdataseguimiento[".masterListFields"] = array();
$tdataseguimiento[".masterListFields"][] = "ID_SEGUIMIENTO";
$tdataseguimiento[".masterListFields"][] = "VALORACION1";
$tdataseguimiento[".masterListFields"][] = "VALORACION2";
$tdataseguimiento[".masterListFields"][] = "VALORACION3";
$tdataseguimiento[".masterListFields"][] = "VALORACION4";
$tdataseguimiento[".masterListFields"][] = "VALORACION5";
$tdataseguimiento[".masterListFields"][] = "VALORACION6";
$tdataseguimiento[".masterListFields"][] = "VALORACION7";
$tdataseguimiento[".masterListFields"][] = "VALORACION8";
$tdataseguimiento[".masterListFields"][] = "SUMATORIA";
$tdataseguimiento[".masterListFields"][] = "RENDIMIENTO";
$tdataseguimiento[".masterListFields"][] = "CODCASO";
$tdataseguimiento[".masterListFields"][] = "DOCENTE";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS1";
$tdataseguimiento[".masterListFields"][] = "DESCIPCION1";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS2";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION2";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS3";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION5";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION6";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS6";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS7";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION7";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS8";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION8";
$tdataseguimiento[".masterListFields"][] = "DESCIPCION3";
$tdataseguimiento[".masterListFields"][] = "DESCRIPCION4";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS4";
$tdataseguimiento[".masterListFields"][] = "ASPECTOS5";

$tdataseguimiento[".inlineAddFields"] = array();

$tdataseguimiento[".editFields"] = array();
$tdataseguimiento[".editFields"][] = "VALORACION1";
$tdataseguimiento[".editFields"][] = "VALORACION2";
$tdataseguimiento[".editFields"][] = "VALORACION3";
$tdataseguimiento[".editFields"][] = "VALORACION4";
$tdataseguimiento[".editFields"][] = "VALORACION5";
$tdataseguimiento[".editFields"][] = "VALORACION6";
$tdataseguimiento[".editFields"][] = "VALORACION7";
$tdataseguimiento[".editFields"][] = "VALORACION8";
$tdataseguimiento[".editFields"][] = "CODCASO";
$tdataseguimiento[".editFields"][] = "DOCENTE";

$tdataseguimiento[".inlineEditFields"] = array();

$tdataseguimiento[".updateSelectedFields"] = array();
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION1";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION2";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION3";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION4";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION5";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION6";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION7";
$tdataseguimiento[".updateSelectedFields"][] = "VALORACION8";
$tdataseguimiento[".updateSelectedFields"][] = "CODCASO";
$tdataseguimiento[".updateSelectedFields"][] = "DOCENTE";


$tdataseguimiento[".exportFields"] = array();
$tdataseguimiento[".exportFields"][] = "VALORACION1";
$tdataseguimiento[".exportFields"][] = "VALORACION2";
$tdataseguimiento[".exportFields"][] = "VALORACION3";
$tdataseguimiento[".exportFields"][] = "VALORACION4";
$tdataseguimiento[".exportFields"][] = "VALORACION5";
$tdataseguimiento[".exportFields"][] = "VALORACION6";
$tdataseguimiento[".exportFields"][] = "VALORACION7";
$tdataseguimiento[".exportFields"][] = "VALORACION8";
$tdataseguimiento[".exportFields"][] = "SUMATORIA";
$tdataseguimiento[".exportFields"][] = "RENDIMIENTO";
$tdataseguimiento[".exportFields"][] = "CODCASO";
$tdataseguimiento[".exportFields"][] = "DOCENTE";
$tdataseguimiento[".exportFields"][] = "ASPECTOS1";
$tdataseguimiento[".exportFields"][] = "DESCIPCION1";
$tdataseguimiento[".exportFields"][] = "ASPECTOS2";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION2";
$tdataseguimiento[".exportFields"][] = "ASPECTOS3";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION5";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION6";
$tdataseguimiento[".exportFields"][] = "ASPECTOS6";
$tdataseguimiento[".exportFields"][] = "ASPECTOS7";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION7";
$tdataseguimiento[".exportFields"][] = "ASPECTOS8";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION8";
$tdataseguimiento[".exportFields"][] = "DESCIPCION3";
$tdataseguimiento[".exportFields"][] = "DESCRIPCION4";
$tdataseguimiento[".exportFields"][] = "ASPECTOS4";
$tdataseguimiento[".exportFields"][] = "ASPECTOS5";

$tdataseguimiento[".importFields"] = array();
$tdataseguimiento[".importFields"][] = "VALORACION1";
$tdataseguimiento[".importFields"][] = "VALORACION2";
$tdataseguimiento[".importFields"][] = "VALORACION3";
$tdataseguimiento[".importFields"][] = "VALORACION4";
$tdataseguimiento[".importFields"][] = "VALORACION5";
$tdataseguimiento[".importFields"][] = "VALORACION6";
$tdataseguimiento[".importFields"][] = "VALORACION7";
$tdataseguimiento[".importFields"][] = "VALORACION8";
$tdataseguimiento[".importFields"][] = "SUMATORIA";
$tdataseguimiento[".importFields"][] = "RENDIMIENTO";
$tdataseguimiento[".importFields"][] = "CODCASO";
$tdataseguimiento[".importFields"][] = "DOCENTE";
$tdataseguimiento[".importFields"][] = "ASPECTOS1";
$tdataseguimiento[".importFields"][] = "DESCIPCION1";
$tdataseguimiento[".importFields"][] = "ASPECTOS2";
$tdataseguimiento[".importFields"][] = "DESCRIPCION2";
$tdataseguimiento[".importFields"][] = "ASPECTOS3";
$tdataseguimiento[".importFields"][] = "DESCRIPCION5";
$tdataseguimiento[".importFields"][] = "DESCRIPCION6";
$tdataseguimiento[".importFields"][] = "ASPECTOS6";
$tdataseguimiento[".importFields"][] = "ASPECTOS7";
$tdataseguimiento[".importFields"][] = "DESCRIPCION7";
$tdataseguimiento[".importFields"][] = "ASPECTOS8";
$tdataseguimiento[".importFields"][] = "DESCRIPCION8";
$tdataseguimiento[".importFields"][] = "DESCIPCION3";
$tdataseguimiento[".importFields"][] = "DESCRIPCION4";
$tdataseguimiento[".importFields"][] = "ASPECTOS4";
$tdataseguimiento[".importFields"][] = "ASPECTOS5";

$tdataseguimiento[".printFields"] = array();
$tdataseguimiento[".printFields"][] = "VALORACION1";
$tdataseguimiento[".printFields"][] = "VALORACION2";
$tdataseguimiento[".printFields"][] = "VALORACION3";
$tdataseguimiento[".printFields"][] = "VALORACION4";
$tdataseguimiento[".printFields"][] = "VALORACION5";
$tdataseguimiento[".printFields"][] = "VALORACION6";
$tdataseguimiento[".printFields"][] = "VALORACION7";
$tdataseguimiento[".printFields"][] = "VALORACION8";
$tdataseguimiento[".printFields"][] = "SUMATORIA";
$tdataseguimiento[".printFields"][] = "RENDIMIENTO";
$tdataseguimiento[".printFields"][] = "CODCASO";
$tdataseguimiento[".printFields"][] = "DOCENTE";
$tdataseguimiento[".printFields"][] = "ASPECTOS1";
$tdataseguimiento[".printFields"][] = "DESCIPCION1";
$tdataseguimiento[".printFields"][] = "ASPECTOS2";
$tdataseguimiento[".printFields"][] = "DESCRIPCION2";
$tdataseguimiento[".printFields"][] = "ASPECTOS3";
$tdataseguimiento[".printFields"][] = "DESCRIPCION5";
$tdataseguimiento[".printFields"][] = "DESCRIPCION6";
$tdataseguimiento[".printFields"][] = "ASPECTOS6";
$tdataseguimiento[".printFields"][] = "ASPECTOS7";
$tdataseguimiento[".printFields"][] = "DESCRIPCION7";
$tdataseguimiento[".printFields"][] = "ASPECTOS8";
$tdataseguimiento[".printFields"][] = "DESCRIPCION8";
$tdataseguimiento[".printFields"][] = "DESCIPCION3";
$tdataseguimiento[".printFields"][] = "DESCRIPCION4";
$tdataseguimiento[".printFields"][] = "ASPECTOS4";
$tdataseguimiento[".printFields"][] = "ASPECTOS5";


//	ID_SEGUIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_SEGUIMIENTO";
	$fdata["GoodName"] = "ID_SEGUIMIENTO";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","ID_SEGUIMIENTO");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_SEGUIMIENTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.ID_SEGUIMIENTO";

	
	
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




	$tdataseguimiento["ID_SEGUIMIENTO"] = $fdata;
//	VALORACION1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VALORACION1";
	$fdata["GoodName"] = "VALORACION1";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION1";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION1"] = $fdata;
//	VALORACION2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VALORACION2";
	$fdata["GoodName"] = "VALORACION2";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION2";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION2"] = $fdata;
//	VALORACION3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "VALORACION3";
	$fdata["GoodName"] = "VALORACION3";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION3");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION3";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION3"] = $fdata;
//	VALORACION4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VALORACION4";
	$fdata["GoodName"] = "VALORACION4";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION4");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION4";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION4"] = $fdata;
//	VALORACION5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "VALORACION5";
	$fdata["GoodName"] = "VALORACION5";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION5");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION5";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION5"] = $fdata;
//	VALORACION6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "VALORACION6";
	$fdata["GoodName"] = "VALORACION6";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION6");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION6";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION6"] = $fdata;
//	VALORACION7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "VALORACION7";
	$fdata["GoodName"] = "VALORACION7";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION7");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION7";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION7"] = $fdata;
//	VALORACION8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "VALORACION8";
	$fdata["GoodName"] = "VALORACION8";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","VALORACION8");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VALORACION8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.VALORACION8";

	
	
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
	$edata["LookupTable"] = "rangocalificacion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "RANGOCALIFICACION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "RANGOCALIFICACION";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["VALORACION8"] = $fdata;
//	SUMATORIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SUMATORIA";
	$fdata["GoodName"] = "SUMATORIA";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","SUMATORIA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SUMATORIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.SUMATORIA";

	
	
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




	$tdataseguimiento["SUMATORIA"] = $fdata;
//	RENDIMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "RENDIMIENTO";
	$fdata["GoodName"] = "RENDIMIENTO";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","RENDIMIENTO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "RENDIMIENTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.RENDIMIENTO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataseguimiento["RENDIMIENTO"] = $fdata;
//	CODCASO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CODCASO";
	$fdata["GoodName"] = "CODCASO";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","CODCASO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CODCASO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.CODCASO";

	
	
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
	$edata["LookupTable"] = "ESTUDIANTESACARGO";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DOCENTE", 'lookupF'=>"DOCENTEACARGO");
	$edata["autoCompleteFields"][] = array('masterF'=>"ASPECTOS1", 'lookupF'=>"ASPECTOS1");
	$edata["autoCompleteFields"][] = array('masterF'=>"DESCIPCION1", 'lookupF'=>"DESCIPCION1");
	$edata["autoCompleteFields"][] = array('masterF'=>"ASPECTOS2", 'lookupF'=>"ASPECTOS2");
	$edata["autoCompleteFields"][] = array('masterF'=>"DESCRIPCION2", 'lookupF'=>"DESCRIPCION2");
	$edata["autoCompleteFields"][] = array('masterF'=>"ASPECTOS3", 'lookupF'=>"ASPECTOS3");
	$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "ID_ESTUDIANTE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ID_ESTUDIANTE";
	
	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdataseguimiento["CODCASO"] = $fdata;
//	DOCENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DOCENTE";
	$fdata["GoodName"] = "DOCENTE";
	$fdata["ownerTable"] = "seguimiento";
	$fdata["Label"] = GetFieldLabel("seguimiento","DOCENTE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DOCENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seguimiento.DOCENTE";

	
	
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




	$tdataseguimiento["DOCENTE"] = $fdata;
//	ASPECTOS1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ASPECTOS1";
	$fdata["GoodName"] = "ASPECTOS1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS1";

	
	
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




	$tdataseguimiento["ASPECTOS1"] = $fdata;
//	DESCIPCION1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DESCIPCION1";
	$fdata["GoodName"] = "DESCIPCION1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCIPCION1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCIPCION1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCIPCION1";

	
	
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




	$tdataseguimiento["DESCIPCION1"] = $fdata;
//	ASPECTOS2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ASPECTOS2";
	$fdata["GoodName"] = "ASPECTOS2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS2";

	
	
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




	$tdataseguimiento["ASPECTOS2"] = $fdata;
//	DESCRIPCION2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DESCRIPCION2";
	$fdata["GoodName"] = "DESCRIPCION2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION2";

	
	
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




	$tdataseguimiento["DESCRIPCION2"] = $fdata;
//	ASPECTOS3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ASPECTOS3";
	$fdata["GoodName"] = "ASPECTOS3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS3";

	
	
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




	$tdataseguimiento["ASPECTOS3"] = $fdata;
//	DESCRIPCION5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DESCRIPCION5";
	$fdata["GoodName"] = "DESCRIPCION5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION5";

	
	
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




	$tdataseguimiento["DESCRIPCION5"] = $fdata;
//	DESCRIPCION6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DESCRIPCION6";
	$fdata["GoodName"] = "DESCRIPCION6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION6");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION6";

	
	
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




	$tdataseguimiento["DESCRIPCION6"] = $fdata;
//	ASPECTOS6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ASPECTOS6";
	$fdata["GoodName"] = "ASPECTOS6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS6");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS6";

	
	
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




	$tdataseguimiento["ASPECTOS6"] = $fdata;
//	ASPECTOS7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ASPECTOS7";
	$fdata["GoodName"] = "ASPECTOS7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS7";

	
	
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




	$tdataseguimiento["ASPECTOS7"] = $fdata;
//	DESCRIPCION7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DESCRIPCION7";
	$fdata["GoodName"] = "DESCRIPCION7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION7";

	
	
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




	$tdataseguimiento["DESCRIPCION7"] = $fdata;
//	ASPECTOS8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "ASPECTOS8";
	$fdata["GoodName"] = "ASPECTOS8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS8");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS8";

	
	
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




	$tdataseguimiento["ASPECTOS8"] = $fdata;
//	DESCRIPCION8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DESCRIPCION8";
	$fdata["GoodName"] = "DESCRIPCION8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION8");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION8";

	
	
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




	$tdataseguimiento["DESCRIPCION8"] = $fdata;
//	DESCIPCION3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DESCIPCION3";
	$fdata["GoodName"] = "DESCIPCION3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCIPCION3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCIPCION3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCIPCION3";

	
	
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




	$tdataseguimiento["DESCIPCION3"] = $fdata;
//	DESCRIPCION4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DESCRIPCION4";
	$fdata["GoodName"] = "DESCRIPCION4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","DESCRIPCION4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.DESCRIPCION4";

	
	
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




	$tdataseguimiento["DESCRIPCION4"] = $fdata;
//	ASPECTOS4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ASPECTOS4";
	$fdata["GoodName"] = "ASPECTOS4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS4";

	
	
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




	$tdataseguimiento["ASPECTOS4"] = $fdata;
//	ASPECTOS5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ASPECTOS5";
	$fdata["GoodName"] = "ASPECTOS5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("seguimiento","ASPECTOS5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preguntas.ASPECTOS5";

	
	
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




	$tdataseguimiento["ASPECTOS5"] = $fdata;


$tables_data["seguimiento"]=&$tdataseguimiento;
$field_labels["seguimiento"] = &$fieldLabelsseguimiento;
$fieldToolTips["seguimiento"] = &$fieldToolTipsseguimiento;
$placeHolders["seguimiento"] = &$placeHoldersseguimiento;
$page_titles["seguimiento"] = &$pageTitlesseguimiento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["seguimiento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["seguimiento"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_seguimiento()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "seguimiento.ID_SEGUIMIENTO,  seguimiento.VALORACION1,  seguimiento.VALORACION2,  seguimiento.VALORACION3,  seguimiento.VALORACION4,  seguimiento.VALORACION5,  seguimiento.VALORACION6,  seguimiento.VALORACION7,  seguimiento.VALORACION8,  seguimiento.SUMATORIA,  seguimiento.RENDIMIENTO,  seguimiento.CODCASO,  seguimiento.DOCENTE,  preguntas.ASPECTOS1,  preguntas.DESCIPCION1,  preguntas.ASPECTOS2,  preguntas.DESCRIPCION2,  preguntas.ASPECTOS3,  preguntas.DESCRIPCION5,  preguntas.DESCRIPCION6,  preguntas.ASPECTOS6,  preguntas.ASPECTOS7,  preguntas.DESCRIPCION7,  preguntas.ASPECTOS8,  preguntas.DESCRIPCION8,  preguntas.DESCIPCION3,  preguntas.DESCRIPCION4,  preguntas.ASPECTOS4,  preguntas.ASPECTOS5";
$proto3["m_strFrom"] = "FROM seguimiento  , preguntas";
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
	"m_strName" => "ID_SEGUIMIENTO",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto9["m_sql"] = "seguimiento.ID_SEGUIMIENTO";
$proto9["m_srcTableName"] = "seguimiento";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION1",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto11["m_sql"] = "seguimiento.VALORACION1";
$proto11["m_srcTableName"] = "seguimiento";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION2",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto13["m_sql"] = "seguimiento.VALORACION2";
$proto13["m_srcTableName"] = "seguimiento";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION3",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto15["m_sql"] = "seguimiento.VALORACION3";
$proto15["m_srcTableName"] = "seguimiento";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION4",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto17["m_sql"] = "seguimiento.VALORACION4";
$proto17["m_srcTableName"] = "seguimiento";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION5",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto19["m_sql"] = "seguimiento.VALORACION5";
$proto19["m_srcTableName"] = "seguimiento";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION6",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto21["m_sql"] = "seguimiento.VALORACION6";
$proto21["m_srcTableName"] = "seguimiento";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION7",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto23["m_sql"] = "seguimiento.VALORACION7";
$proto23["m_srcTableName"] = "seguimiento";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORACION8",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto25["m_sql"] = "seguimiento.VALORACION8";
$proto25["m_srcTableName"] = "seguimiento";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMATORIA",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto27["m_sql"] = "seguimiento.SUMATORIA";
$proto27["m_srcTableName"] = "seguimiento";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "RENDIMIENTO",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto29["m_sql"] = "seguimiento.RENDIMIENTO";
$proto29["m_srcTableName"] = "seguimiento";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "CODCASO",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto31["m_sql"] = "seguimiento.CODCASO";
$proto31["m_srcTableName"] = "seguimiento";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCENTE",
	"m_strTable" => "seguimiento",
	"m_srcTableName" => "seguimiento"
));

$proto33["m_sql"] = "seguimiento.DOCENTE";
$proto33["m_srcTableName"] = "seguimiento";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto35["m_sql"] = "preguntas.ASPECTOS1";
$proto35["m_srcTableName"] = "seguimiento";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCIPCION1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto37["m_sql"] = "preguntas.DESCIPCION1";
$proto37["m_srcTableName"] = "seguimiento";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto39["m_sql"] = "preguntas.ASPECTOS2";
$proto39["m_srcTableName"] = "seguimiento";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto41["m_sql"] = "preguntas.DESCRIPCION2";
$proto41["m_srcTableName"] = "seguimiento";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto43["m_sql"] = "preguntas.ASPECTOS3";
$proto43["m_srcTableName"] = "seguimiento";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto3["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto45["m_sql"] = "preguntas.DESCRIPCION5";
$proto45["m_srcTableName"] = "seguimiento";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto3["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto47["m_sql"] = "preguntas.DESCRIPCION6";
$proto47["m_srcTableName"] = "seguimiento";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto3["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto49["m_sql"] = "preguntas.ASPECTOS6";
$proto49["m_srcTableName"] = "seguimiento";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto3["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto51["m_sql"] = "preguntas.ASPECTOS7";
$proto51["m_srcTableName"] = "seguimiento";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto3["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto53["m_sql"] = "preguntas.DESCRIPCION7";
$proto53["m_srcTableName"] = "seguimiento";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto3["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto55["m_sql"] = "preguntas.ASPECTOS8";
$proto55["m_srcTableName"] = "seguimiento";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto3["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto57["m_sql"] = "preguntas.DESCRIPCION8";
$proto57["m_srcTableName"] = "seguimiento";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto3["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCIPCION3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto59["m_sql"] = "preguntas.DESCIPCION3";
$proto59["m_srcTableName"] = "seguimiento";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto3["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto61["m_sql"] = "preguntas.DESCRIPCION4";
$proto61["m_srcTableName"] = "seguimiento";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto3["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto63["m_sql"] = "preguntas.ASPECTOS4";
$proto63["m_srcTableName"] = "seguimiento";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto3["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "seguimiento"
));

$proto65["m_sql"] = "preguntas.ASPECTOS5";
$proto65["m_srcTableName"] = "seguimiento";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto67=array();
$proto67["m_link"] = "SQLL_MAIN";
			$proto68=array();
$proto68["m_strName"] = "seguimiento";
$proto68["m_srcTableName"] = "seguimiento";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "ID_SEGUIMIENTO";
$proto68["m_columns"][] = "VALORACION1";
$proto68["m_columns"][] = "VALORACION2";
$proto68["m_columns"][] = "VALORACION3";
$proto68["m_columns"][] = "VALORACION4";
$proto68["m_columns"][] = "VALORACION5";
$proto68["m_columns"][] = "VALORACION6";
$proto68["m_columns"][] = "VALORACION7";
$proto68["m_columns"][] = "VALORACION8";
$proto68["m_columns"][] = "SUMATORIA";
$proto68["m_columns"][] = "RENDIMIENTO";
$proto68["m_columns"][] = "CODCASO";
$proto68["m_columns"][] = "DOCENTE";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "seguimiento";
$proto67["m_alias"] = "";
$proto67["m_srcTableName"] = "seguimiento";
$proto69=array();
$proto69["m_sql"] = "";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto3["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_CROSSJOIN";
			$proto72=array();
$proto72["m_strName"] = "preguntas";
$proto72["m_srcTableName"] = "seguimiento";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "ID_PREGUNTAS";
$proto72["m_columns"][] = "ASPECTOS1";
$proto72["m_columns"][] = "DESCIPCION1";
$proto72["m_columns"][] = "ASPECTOS2";
$proto72["m_columns"][] = "DESCRIPCION2";
$proto72["m_columns"][] = "ASPECTOS3";
$proto72["m_columns"][] = "DESCIPCION3";
$proto72["m_columns"][] = "ASPECTOS4";
$proto72["m_columns"][] = "DESCRIPCION4";
$proto72["m_columns"][] = "ASPECTOS5";
$proto72["m_columns"][] = "DESCRIPCION5";
$proto72["m_columns"][] = "ASPECTOS6";
$proto72["m_columns"][] = "DESCRIPCION6";
$proto72["m_columns"][] = "ASPECTOS7";
$proto72["m_columns"][] = "DESCRIPCION7";
$proto72["m_columns"][] = "ASPECTOS8";
$proto72["m_columns"][] = "DESCRIPCION8";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "preguntas";
$proto71["m_alias"] = "";
$proto71["m_srcTableName"] = "seguimiento";
$proto73=array();
$proto73["m_sql"] = "";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="seguimiento";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_seguimiento = createSqlQuery_seguimiento();


	
		;

																													

$tdataseguimiento[".sqlquery"] = $queryData_seguimiento;

include_once(getabspath("include/seguimiento_events.php"));
$tableEvents["seguimiento"] = new eventclass_seguimiento;
$tdataseguimiento[".hasEvents"] = true;

?>