<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapreguntas = array();
	$tdatapreguntas[".truncateText"] = true;
	$tdatapreguntas[".NumberOfChars"] = 80;
	$tdatapreguntas[".ShortName"] = "preguntas";
	$tdatapreguntas[".OwnerID"] = "";
	$tdatapreguntas[".OriginalTable"] = "preguntas";

//	field labels
$fieldLabelspreguntas = array();
$fieldToolTipspreguntas = array();
$pageTitlespreguntas = array();
$placeHolderspreguntas = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspreguntas["English"] = array();
	$fieldToolTipspreguntas["English"] = array();
	$placeHolderspreguntas["English"] = array();
	$pageTitlespreguntas["English"] = array();
	$fieldLabelspreguntas["English"]["ID_PREGUNTAS"] = "ID PREGUNTAS";
	$fieldToolTipspreguntas["English"]["ID_PREGUNTAS"] = "";
	$placeHolderspreguntas["English"]["ID_PREGUNTAS"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS1"] = "A1";
	$fieldToolTipspreguntas["English"]["ASPECTOS1"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS1"] = "";
	$fieldLabelspreguntas["English"]["DESCIPCION1"] = "D1";
	$fieldToolTipspreguntas["English"]["DESCIPCION1"] = "";
	$placeHolderspreguntas["English"]["DESCIPCION1"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS2"] = "A2";
	$fieldToolTipspreguntas["English"]["ASPECTOS2"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS2"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION2"] = "D2";
	$fieldToolTipspreguntas["English"]["DESCRIPCION2"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION2"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS3"] = "A3";
	$fieldToolTipspreguntas["English"]["ASPECTOS3"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS3"] = "";
	$fieldLabelspreguntas["English"]["DESCIPCION3"] = "D3";
	$fieldToolTipspreguntas["English"]["DESCIPCION3"] = "";
	$placeHolderspreguntas["English"]["DESCIPCION3"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS4"] = "A4";
	$fieldToolTipspreguntas["English"]["ASPECTOS4"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS4"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION4"] = "D4";
	$fieldToolTipspreguntas["English"]["DESCRIPCION4"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION4"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS5"] = "A5";
	$fieldToolTipspreguntas["English"]["ASPECTOS5"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS5"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION5"] = "D5";
	$fieldToolTipspreguntas["English"]["DESCRIPCION5"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION5"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS6"] = "A6";
	$fieldToolTipspreguntas["English"]["ASPECTOS6"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS6"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION6"] = "D6";
	$fieldToolTipspreguntas["English"]["DESCRIPCION6"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION6"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS7"] = "A7";
	$fieldToolTipspreguntas["English"]["ASPECTOS7"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS7"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION7"] = "D7";
	$fieldToolTipspreguntas["English"]["DESCRIPCION7"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION7"] = "";
	$fieldLabelspreguntas["English"]["ASPECTOS8"] = "A8";
	$fieldToolTipspreguntas["English"]["ASPECTOS8"] = "";
	$placeHolderspreguntas["English"]["ASPECTOS8"] = "";
	$fieldLabelspreguntas["English"]["DESCRIPCION8"] = "D8";
	$fieldToolTipspreguntas["English"]["DESCRIPCION8"] = "";
	$placeHolderspreguntas["English"]["DESCRIPCION8"] = "";
	if (count($fieldToolTipspreguntas["English"]))
		$tdatapreguntas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspreguntas[""] = array();
	$fieldToolTipspreguntas[""] = array();
	$placeHolderspreguntas[""] = array();
	$pageTitlespreguntas[""] = array();
	$fieldLabelspreguntas[""]["ID_PREGUNTAS"] = "ID PREGUNTAS";
	$fieldToolTipspreguntas[""]["ID_PREGUNTAS"] = "";
	$placeHolderspreguntas[""]["ID_PREGUNTAS"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS1"] = "ASPECTOS1";
	$fieldToolTipspreguntas[""]["ASPECTOS1"] = "";
	$placeHolderspreguntas[""]["ASPECTOS1"] = "";
	$fieldLabelspreguntas[""]["DESCIPCION1"] = "DESCIPCION1";
	$fieldToolTipspreguntas[""]["DESCIPCION1"] = "";
	$placeHolderspreguntas[""]["DESCIPCION1"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS2"] = "ASPECTOS2";
	$fieldToolTipspreguntas[""]["ASPECTOS2"] = "";
	$placeHolderspreguntas[""]["ASPECTOS2"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION2"] = "DESCRIPCION2";
	$fieldToolTipspreguntas[""]["DESCRIPCION2"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION2"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS3"] = "ASPECTOS3";
	$fieldToolTipspreguntas[""]["ASPECTOS3"] = "";
	$placeHolderspreguntas[""]["ASPECTOS3"] = "";
	$fieldLabelspreguntas[""]["DESCIPCION3"] = "DESCIPCION3";
	$fieldToolTipspreguntas[""]["DESCIPCION3"] = "";
	$placeHolderspreguntas[""]["DESCIPCION3"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS4"] = "ASPECTOS4";
	$fieldToolTipspreguntas[""]["ASPECTOS4"] = "";
	$placeHolderspreguntas[""]["ASPECTOS4"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION4"] = "DESCRIPCION4";
	$fieldToolTipspreguntas[""]["DESCRIPCION4"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION4"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS5"] = "ASPECTOS5";
	$fieldToolTipspreguntas[""]["ASPECTOS5"] = "";
	$placeHolderspreguntas[""]["ASPECTOS5"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION5"] = "DESCRIPCION5";
	$fieldToolTipspreguntas[""]["DESCRIPCION5"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION5"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS6"] = "ASPECTOS6";
	$fieldToolTipspreguntas[""]["ASPECTOS6"] = "";
	$placeHolderspreguntas[""]["ASPECTOS6"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION6"] = "DESCRIPCION6";
	$fieldToolTipspreguntas[""]["DESCRIPCION6"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION6"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS7"] = "ASPECTOS7";
	$fieldToolTipspreguntas[""]["ASPECTOS7"] = "";
	$placeHolderspreguntas[""]["ASPECTOS7"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION7"] = "DESCRIPCION7";
	$fieldToolTipspreguntas[""]["DESCRIPCION7"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION7"] = "";
	$fieldLabelspreguntas[""]["ASPECTOS8"] = "ASPECTOS8";
	$fieldToolTipspreguntas[""]["ASPECTOS8"] = "";
	$placeHolderspreguntas[""]["ASPECTOS8"] = "";
	$fieldLabelspreguntas[""]["DESCRIPCION8"] = "DESCRIPCION8";
	$fieldToolTipspreguntas[""]["DESCRIPCION8"] = "";
	$placeHolderspreguntas[""]["DESCRIPCION8"] = "";
	if (count($fieldToolTipspreguntas[""]))
		$tdatapreguntas[".isUseToolTips"] = true;
}


	$tdatapreguntas[".NCSearch"] = true;



$tdatapreguntas[".shortTableName"] = "preguntas";
$tdatapreguntas[".nSecOptions"] = 0;
$tdatapreguntas[".recsPerRowPrint"] = 1;
$tdatapreguntas[".mainTableOwnerID"] = "";
$tdatapreguntas[".moveNext"] = 1;
$tdatapreguntas[".entityType"] = 0;

$tdatapreguntas[".strOriginalTableName"] = "preguntas";

	



$tdatapreguntas[".showAddInPopup"] = true;

$tdatapreguntas[".showEditInPopup"] = true;

$tdatapreguntas[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "edit_bootstrap_4col";
			;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatapreguntas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapreguntas[".fieldsForRegister"] = array();
	
$tdatapreguntas[".listAjax"] = false;

	$tdatapreguntas[".audit"] = false;

	$tdatapreguntas[".locking"] = false;



$tdatapreguntas[".list"] = true;

$tdatapreguntas[".inlineEdit"] = true;


$tdatapreguntas[".reorderRecordsByHeader"] = true;



$tdatapreguntas[".view"] = true;





$tdatapreguntas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapreguntas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapreguntas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapreguntas[".searchSaving"] = false;
//

	$tdatapreguntas[".showSearchPanel"] = false;

$tdatapreguntas[".isUseAjaxSuggest"] = true;

$tdatapreguntas[".rowHighlite"] = true;





$tdatapreguntas[".ajaxCodeSnippetAdded"] = false;

$tdatapreguntas[".buttonsAdded"] = false;

$tdatapreguntas[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapreguntas[".isUseTimeForSearch"] = false;



$tdatapreguntas[".badgeColor"] = "DB7093";


$tdatapreguntas[".allSearchFields"] = array();
$tdatapreguntas[".filterFields"] = array();
$tdatapreguntas[".requiredSearchFields"] = array();

$tdatapreguntas[".allSearchFields"][] = "ID_PREGUNTAS";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS1";
	$tdatapreguntas[".allSearchFields"][] = "DESCIPCION1";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS2";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION2";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS3";
	$tdatapreguntas[".allSearchFields"][] = "DESCIPCION3";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS4";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION4";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS5";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION5";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS6";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION6";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS7";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION7";
	$tdatapreguntas[".allSearchFields"][] = "ASPECTOS8";
	$tdatapreguntas[".allSearchFields"][] = "DESCRIPCION8";
	

$tdatapreguntas[".googleLikeFields"] = array();
$tdatapreguntas[".googleLikeFields"][] = "ID_PREGUNTAS";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS1";
$tdatapreguntas[".googleLikeFields"][] = "DESCIPCION1";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS2";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION2";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS3";
$tdatapreguntas[".googleLikeFields"][] = "DESCIPCION3";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS4";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION4";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS5";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION5";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS6";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION6";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS7";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION7";
$tdatapreguntas[".googleLikeFields"][] = "ASPECTOS8";
$tdatapreguntas[".googleLikeFields"][] = "DESCRIPCION8";


$tdatapreguntas[".advSearchFields"] = array();
$tdatapreguntas[".advSearchFields"][] = "ID_PREGUNTAS";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS1";
$tdatapreguntas[".advSearchFields"][] = "DESCIPCION1";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS2";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION2";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS3";
$tdatapreguntas[".advSearchFields"][] = "DESCIPCION3";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS4";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION4";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS5";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION5";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS6";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION6";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS7";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION7";
$tdatapreguntas[".advSearchFields"][] = "ASPECTOS8";
$tdatapreguntas[".advSearchFields"][] = "DESCRIPCION8";

$tdatapreguntas[".tableType"] = "list";

$tdatapreguntas[".printerPageOrientation"] = 0;
$tdatapreguntas[".nPrinterPageScale"] = 100;

$tdatapreguntas[".nPrinterSplitRecords"] = 40;

$tdatapreguntas[".nPrinterPDFSplitRecords"] = 40;



$tdatapreguntas[".geocodingEnabled"] = false;





$tdatapreguntas[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapreguntas[".pageSize"] = 20;

$tdatapreguntas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapreguntas[".strOrderBy"] = $tstrOrderBy;

$tdatapreguntas[".orderindexes"] = array();

$tdatapreguntas[".sqlHead"] = "SELECT ID_PREGUNTAS,  	ASPECTOS1,  	DESCIPCION1,  	ASPECTOS2,  	DESCRIPCION2,  	ASPECTOS3,  	DESCIPCION3,  	ASPECTOS4,  	DESCRIPCION4,  	ASPECTOS5,  	DESCRIPCION5,  	ASPECTOS6,  	DESCRIPCION6,  	ASPECTOS7,  	DESCRIPCION7,  	ASPECTOS8,  	DESCRIPCION8";
$tdatapreguntas[".sqlFrom"] = "FROM preguntas";
$tdatapreguntas[".sqlWhereExpr"] = "";
$tdatapreguntas[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapreguntas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapreguntas[".arrGroupsPerPage"] = $arrGPP;

$tdatapreguntas[".highlightSearchResults"] = true;

$tableKeyspreguntas = array();
$tableKeyspreguntas[] = "ID_PREGUNTAS";
$tdatapreguntas[".Keys"] = $tableKeyspreguntas;

$tdatapreguntas[".listFields"] = array();
$tdatapreguntas[".listFields"][] = "ASPECTOS1";
$tdatapreguntas[".listFields"][] = "DESCIPCION1";
$tdatapreguntas[".listFields"][] = "ASPECTOS2";
$tdatapreguntas[".listFields"][] = "DESCRIPCION2";
$tdatapreguntas[".listFields"][] = "ASPECTOS3";
$tdatapreguntas[".listFields"][] = "DESCIPCION3";
$tdatapreguntas[".listFields"][] = "ASPECTOS4";
$tdatapreguntas[".listFields"][] = "DESCRIPCION4";
$tdatapreguntas[".listFields"][] = "ASPECTOS5";
$tdatapreguntas[".listFields"][] = "DESCRIPCION5";
$tdatapreguntas[".listFields"][] = "ASPECTOS6";
$tdatapreguntas[".listFields"][] = "DESCRIPCION6";
$tdatapreguntas[".listFields"][] = "ASPECTOS7";
$tdatapreguntas[".listFields"][] = "DESCRIPCION7";
$tdatapreguntas[".listFields"][] = "ASPECTOS8";
$tdatapreguntas[".listFields"][] = "DESCRIPCION8";

$tdatapreguntas[".hideMobileList"] = array();


$tdatapreguntas[".viewFields"] = array();
$tdatapreguntas[".viewFields"][] = "ASPECTOS1";
$tdatapreguntas[".viewFields"][] = "DESCIPCION1";
$tdatapreguntas[".viewFields"][] = "ASPECTOS2";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION2";
$tdatapreguntas[".viewFields"][] = "ASPECTOS3";
$tdatapreguntas[".viewFields"][] = "DESCIPCION3";
$tdatapreguntas[".viewFields"][] = "ASPECTOS4";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION4";
$tdatapreguntas[".viewFields"][] = "ASPECTOS5";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION5";
$tdatapreguntas[".viewFields"][] = "ASPECTOS6";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION6";
$tdatapreguntas[".viewFields"][] = "ASPECTOS7";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION7";
$tdatapreguntas[".viewFields"][] = "ASPECTOS8";
$tdatapreguntas[".viewFields"][] = "DESCRIPCION8";

$tdatapreguntas[".addFields"] = array();
$tdatapreguntas[".addFields"][] = "ASPECTOS1";
$tdatapreguntas[".addFields"][] = "DESCIPCION1";
$tdatapreguntas[".addFields"][] = "ASPECTOS2";
$tdatapreguntas[".addFields"][] = "DESCRIPCION2";
$tdatapreguntas[".addFields"][] = "ASPECTOS3";
$tdatapreguntas[".addFields"][] = "DESCIPCION3";
$tdatapreguntas[".addFields"][] = "ASPECTOS4";
$tdatapreguntas[".addFields"][] = "DESCRIPCION4";
$tdatapreguntas[".addFields"][] = "ASPECTOS5";
$tdatapreguntas[".addFields"][] = "DESCRIPCION5";
$tdatapreguntas[".addFields"][] = "ASPECTOS6";
$tdatapreguntas[".addFields"][] = "DESCRIPCION6";
$tdatapreguntas[".addFields"][] = "ASPECTOS7";
$tdatapreguntas[".addFields"][] = "DESCRIPCION7";
$tdatapreguntas[".addFields"][] = "ASPECTOS8";
$tdatapreguntas[".addFields"][] = "DESCRIPCION8";

$tdatapreguntas[".masterListFields"] = array();
$tdatapreguntas[".masterListFields"][] = "ID_PREGUNTAS";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS1";
$tdatapreguntas[".masterListFields"][] = "DESCIPCION1";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS2";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION2";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS3";
$tdatapreguntas[".masterListFields"][] = "DESCIPCION3";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS4";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION4";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS5";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION5";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS6";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION6";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS7";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION7";
$tdatapreguntas[".masterListFields"][] = "ASPECTOS8";
$tdatapreguntas[".masterListFields"][] = "DESCRIPCION8";

$tdatapreguntas[".inlineAddFields"] = array();

$tdatapreguntas[".editFields"] = array();
$tdatapreguntas[".editFields"][] = "ASPECTOS1";
$tdatapreguntas[".editFields"][] = "DESCIPCION1";
$tdatapreguntas[".editFields"][] = "ASPECTOS2";
$tdatapreguntas[".editFields"][] = "DESCRIPCION2";
$tdatapreguntas[".editFields"][] = "ASPECTOS3";
$tdatapreguntas[".editFields"][] = "DESCIPCION3";
$tdatapreguntas[".editFields"][] = "ASPECTOS4";
$tdatapreguntas[".editFields"][] = "DESCRIPCION4";
$tdatapreguntas[".editFields"][] = "ASPECTOS5";
$tdatapreguntas[".editFields"][] = "DESCRIPCION5";
$tdatapreguntas[".editFields"][] = "ASPECTOS6";
$tdatapreguntas[".editFields"][] = "DESCRIPCION6";
$tdatapreguntas[".editFields"][] = "ASPECTOS7";
$tdatapreguntas[".editFields"][] = "DESCRIPCION7";
$tdatapreguntas[".editFields"][] = "ASPECTOS8";
$tdatapreguntas[".editFields"][] = "DESCRIPCION8";

$tdatapreguntas[".inlineEditFields"] = array();
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS1";
$tdatapreguntas[".inlineEditFields"][] = "DESCIPCION1";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS2";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION2";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS3";
$tdatapreguntas[".inlineEditFields"][] = "DESCIPCION3";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS4";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION4";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS5";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION5";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS6";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION6";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS7";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION7";
$tdatapreguntas[".inlineEditFields"][] = "ASPECTOS8";
$tdatapreguntas[".inlineEditFields"][] = "DESCRIPCION8";

$tdatapreguntas[".updateSelectedFields"] = array();
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS1";
$tdatapreguntas[".updateSelectedFields"][] = "DESCIPCION1";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS2";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION2";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS3";
$tdatapreguntas[".updateSelectedFields"][] = "DESCIPCION3";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS4";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION4";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS5";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION5";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS6";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION6";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS7";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION7";
$tdatapreguntas[".updateSelectedFields"][] = "ASPECTOS8";
$tdatapreguntas[".updateSelectedFields"][] = "DESCRIPCION8";


$tdatapreguntas[".exportFields"] = array();
$tdatapreguntas[".exportFields"][] = "ASPECTOS1";
$tdatapreguntas[".exportFields"][] = "DESCIPCION1";
$tdatapreguntas[".exportFields"][] = "ASPECTOS2";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION2";
$tdatapreguntas[".exportFields"][] = "ASPECTOS3";
$tdatapreguntas[".exportFields"][] = "DESCIPCION3";
$tdatapreguntas[".exportFields"][] = "ASPECTOS4";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION4";
$tdatapreguntas[".exportFields"][] = "ASPECTOS5";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION5";
$tdatapreguntas[".exportFields"][] = "ASPECTOS6";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION6";
$tdatapreguntas[".exportFields"][] = "ASPECTOS7";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION7";
$tdatapreguntas[".exportFields"][] = "ASPECTOS8";
$tdatapreguntas[".exportFields"][] = "DESCRIPCION8";

$tdatapreguntas[".importFields"] = array();
$tdatapreguntas[".importFields"][] = "ASPECTOS1";
$tdatapreguntas[".importFields"][] = "DESCIPCION1";
$tdatapreguntas[".importFields"][] = "ASPECTOS2";
$tdatapreguntas[".importFields"][] = "DESCRIPCION2";
$tdatapreguntas[".importFields"][] = "ASPECTOS3";
$tdatapreguntas[".importFields"][] = "DESCIPCION3";
$tdatapreguntas[".importFields"][] = "ASPECTOS4";
$tdatapreguntas[".importFields"][] = "DESCRIPCION4";
$tdatapreguntas[".importFields"][] = "ASPECTOS5";
$tdatapreguntas[".importFields"][] = "DESCRIPCION5";
$tdatapreguntas[".importFields"][] = "ASPECTOS6";
$tdatapreguntas[".importFields"][] = "DESCRIPCION6";
$tdatapreguntas[".importFields"][] = "ASPECTOS7";
$tdatapreguntas[".importFields"][] = "DESCRIPCION7";
$tdatapreguntas[".importFields"][] = "ASPECTOS8";
$tdatapreguntas[".importFields"][] = "DESCRIPCION8";

$tdatapreguntas[".printFields"] = array();
$tdatapreguntas[".printFields"][] = "ASPECTOS1";
$tdatapreguntas[".printFields"][] = "DESCIPCION1";
$tdatapreguntas[".printFields"][] = "ASPECTOS2";
$tdatapreguntas[".printFields"][] = "DESCRIPCION2";
$tdatapreguntas[".printFields"][] = "ASPECTOS3";
$tdatapreguntas[".printFields"][] = "DESCIPCION3";
$tdatapreguntas[".printFields"][] = "ASPECTOS4";
$tdatapreguntas[".printFields"][] = "DESCRIPCION4";
$tdatapreguntas[".printFields"][] = "ASPECTOS5";
$tdatapreguntas[".printFields"][] = "DESCRIPCION5";
$tdatapreguntas[".printFields"][] = "ASPECTOS6";
$tdatapreguntas[".printFields"][] = "DESCRIPCION6";
$tdatapreguntas[".printFields"][] = "ASPECTOS7";
$tdatapreguntas[".printFields"][] = "DESCRIPCION7";
$tdatapreguntas[".printFields"][] = "ASPECTOS8";
$tdatapreguntas[".printFields"][] = "DESCRIPCION8";


//	ID_PREGUNTAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_PREGUNTAS";
	$fdata["GoodName"] = "ID_PREGUNTAS";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ID_PREGUNTAS");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_PREGUNTAS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_PREGUNTAS";

	
	
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




	$tdatapreguntas["ID_PREGUNTAS"] = $fdata;
//	ASPECTOS1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ASPECTOS1";
	$fdata["GoodName"] = "ASPECTOS1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS1";

	
	
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




	$tdatapreguntas["ASPECTOS1"] = $fdata;
//	DESCIPCION1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCIPCION1";
	$fdata["GoodName"] = "DESCIPCION1";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCIPCION1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCIPCION1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCIPCION1";

	
	
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




	$tdatapreguntas["DESCIPCION1"] = $fdata;
//	ASPECTOS2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ASPECTOS2";
	$fdata["GoodName"] = "ASPECTOS2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS2";

	
	
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




	$tdatapreguntas["ASPECTOS2"] = $fdata;
//	DESCRIPCION2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DESCRIPCION2";
	$fdata["GoodName"] = "DESCRIPCION2";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION2";

	
	
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




	$tdatapreguntas["DESCRIPCION2"] = $fdata;
//	ASPECTOS3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ASPECTOS3";
	$fdata["GoodName"] = "ASPECTOS3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS3";

	
	
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




	$tdatapreguntas["ASPECTOS3"] = $fdata;
//	DESCIPCION3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DESCIPCION3";
	$fdata["GoodName"] = "DESCIPCION3";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCIPCION3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCIPCION3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCIPCION3";

	
	
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




	$tdatapreguntas["DESCIPCION3"] = $fdata;
//	ASPECTOS4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ASPECTOS4";
	$fdata["GoodName"] = "ASPECTOS4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS4";

	
	
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




	$tdatapreguntas["ASPECTOS4"] = $fdata;
//	DESCRIPCION4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DESCRIPCION4";
	$fdata["GoodName"] = "DESCRIPCION4";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION4";

	
	
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




	$tdatapreguntas["DESCRIPCION4"] = $fdata;
//	ASPECTOS5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ASPECTOS5";
	$fdata["GoodName"] = "ASPECTOS5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS5";

	
	
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




	$tdatapreguntas["ASPECTOS5"] = $fdata;
//	DESCRIPCION5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DESCRIPCION5";
	$fdata["GoodName"] = "DESCRIPCION5";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION5";

	
	
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




	$tdatapreguntas["DESCRIPCION5"] = $fdata;
//	ASPECTOS6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ASPECTOS6";
	$fdata["GoodName"] = "ASPECTOS6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS6";

	
	
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




	$tdatapreguntas["ASPECTOS6"] = $fdata;
//	DESCRIPCION6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DESCRIPCION6";
	$fdata["GoodName"] = "DESCRIPCION6";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION6";

	
	
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




	$tdatapreguntas["DESCRIPCION6"] = $fdata;
//	ASPECTOS7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ASPECTOS7";
	$fdata["GoodName"] = "ASPECTOS7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS7";

	
	
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




	$tdatapreguntas["ASPECTOS7"] = $fdata;
//	DESCRIPCION7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DESCRIPCION7";
	$fdata["GoodName"] = "DESCRIPCION7";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION7";

	
	
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




	$tdatapreguntas["DESCRIPCION7"] = $fdata;
//	ASPECTOS8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ASPECTOS8";
	$fdata["GoodName"] = "ASPECTOS8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","ASPECTOS8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASPECTOS8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASPECTOS8";

	
	
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




	$tdatapreguntas["ASPECTOS8"] = $fdata;
//	DESCRIPCION8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DESCRIPCION8";
	$fdata["GoodName"] = "DESCRIPCION8";
	$fdata["ownerTable"] = "preguntas";
	$fdata["Label"] = GetFieldLabel("preguntas","DESCRIPCION8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION8";

	
	
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




	$tdatapreguntas["DESCRIPCION8"] = $fdata;


$tables_data["preguntas"]=&$tdatapreguntas;
$field_labels["preguntas"] = &$fieldLabelspreguntas;
$fieldToolTips["preguntas"] = &$fieldToolTipspreguntas;
$placeHolders["preguntas"] = &$placeHolderspreguntas;
$page_titles["preguntas"] = &$pageTitlespreguntas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["preguntas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["preguntas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_preguntas()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID_PREGUNTAS,  	ASPECTOS1,  	DESCIPCION1,  	ASPECTOS2,  	DESCRIPCION2,  	ASPECTOS3,  	DESCIPCION3,  	ASPECTOS4,  	DESCRIPCION4,  	ASPECTOS5,  	DESCRIPCION5,  	ASPECTOS6,  	DESCRIPCION6,  	ASPECTOS7,  	DESCRIPCION7,  	ASPECTOS8,  	DESCRIPCION8";
$proto3["m_strFrom"] = "FROM preguntas";
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
	"m_strName" => "ID_PREGUNTAS",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto9["m_sql"] = "ID_PREGUNTAS";
$proto9["m_srcTableName"] = "preguntas";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto11["m_sql"] = "ASPECTOS1";
$proto11["m_srcTableName"] = "preguntas";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCIPCION1",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto13["m_sql"] = "DESCIPCION1";
$proto13["m_srcTableName"] = "preguntas";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto15["m_sql"] = "ASPECTOS2";
$proto15["m_srcTableName"] = "preguntas";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION2",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto17["m_sql"] = "DESCRIPCION2";
$proto17["m_srcTableName"] = "preguntas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto19["m_sql"] = "ASPECTOS3";
$proto19["m_srcTableName"] = "preguntas";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCIPCION3",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto21["m_sql"] = "DESCIPCION3";
$proto21["m_srcTableName"] = "preguntas";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto23["m_sql"] = "ASPECTOS4";
$proto23["m_srcTableName"] = "preguntas";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION4",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto25["m_sql"] = "DESCRIPCION4";
$proto25["m_srcTableName"] = "preguntas";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto27["m_sql"] = "ASPECTOS5";
$proto27["m_srcTableName"] = "preguntas";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION5",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto29["m_sql"] = "DESCRIPCION5";
$proto29["m_srcTableName"] = "preguntas";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto31["m_sql"] = "ASPECTOS6";
$proto31["m_srcTableName"] = "preguntas";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION6",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto33["m_sql"] = "DESCRIPCION6";
$proto33["m_srcTableName"] = "preguntas";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto35["m_sql"] = "ASPECTOS7";
$proto35["m_srcTableName"] = "preguntas";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto3["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION7",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto37["m_sql"] = "DESCRIPCION7";
$proto37["m_srcTableName"] = "preguntas";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto3["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "ASPECTOS8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto39["m_sql"] = "ASPECTOS8";
$proto39["m_srcTableName"] = "preguntas";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto3["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION8",
	"m_strTable" => "preguntas",
	"m_srcTableName" => "preguntas"
));

$proto41["m_sql"] = "DESCRIPCION8";
$proto41["m_srcTableName"] = "preguntas";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "preguntas";
$proto44["m_srcTableName"] = "preguntas";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "ID_PREGUNTAS";
$proto44["m_columns"][] = "ASPECTOS1";
$proto44["m_columns"][] = "DESCIPCION1";
$proto44["m_columns"][] = "ASPECTOS2";
$proto44["m_columns"][] = "DESCRIPCION2";
$proto44["m_columns"][] = "ASPECTOS3";
$proto44["m_columns"][] = "DESCIPCION3";
$proto44["m_columns"][] = "ASPECTOS4";
$proto44["m_columns"][] = "DESCRIPCION4";
$proto44["m_columns"][] = "ASPECTOS5";
$proto44["m_columns"][] = "DESCRIPCION5";
$proto44["m_columns"][] = "ASPECTOS6";
$proto44["m_columns"][] = "DESCRIPCION6";
$proto44["m_columns"][] = "ASPECTOS7";
$proto44["m_columns"][] = "DESCRIPCION7";
$proto44["m_columns"][] = "ASPECTOS8";
$proto44["m_columns"][] = "DESCRIPCION8";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "preguntas";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "preguntas";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="preguntas";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_preguntas = createSqlQuery_preguntas();


	
		;

																	

$tdatapreguntas[".sqlquery"] = $queryData_preguntas;

$tableEvents["preguntas"] = new eventsBase;
$tdatapreguntas[".hasEvents"] = false;

?>