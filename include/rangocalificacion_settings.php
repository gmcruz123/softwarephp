<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarangocalificacion = array();
	$tdatarangocalificacion[".truncateText"] = true;
	$tdatarangocalificacion[".NumberOfChars"] = 80;
	$tdatarangocalificacion[".ShortName"] = "rangocalificacion";
	$tdatarangocalificacion[".OwnerID"] = "";
	$tdatarangocalificacion[".OriginalTable"] = "rangocalificacion";

//	field labels
$fieldLabelsrangocalificacion = array();
$fieldToolTipsrangocalificacion = array();
$pageTitlesrangocalificacion = array();
$placeHoldersrangocalificacion = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrangocalificacion["English"] = array();
	$fieldToolTipsrangocalificacion["English"] = array();
	$placeHoldersrangocalificacion["English"] = array();
	$pageTitlesrangocalificacion["English"] = array();
	$fieldLabelsrangocalificacion["English"]["ID_RC"] = "ID RC";
	$fieldToolTipsrangocalificacion["English"]["ID_RC"] = "";
	$placeHoldersrangocalificacion["English"]["ID_RC"] = "";
	$fieldLabelsrangocalificacion["English"]["RANGOCALIFICACION"] = "RANGOCALIFICACION";
	$fieldToolTipsrangocalificacion["English"]["RANGOCALIFICACION"] = "";
	$placeHoldersrangocalificacion["English"]["RANGOCALIFICACION"] = "";
	if (count($fieldToolTipsrangocalificacion["English"]))
		$tdatarangocalificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrangocalificacion[""] = array();
	$fieldToolTipsrangocalificacion[""] = array();
	$placeHoldersrangocalificacion[""] = array();
	$pageTitlesrangocalificacion[""] = array();
	$fieldLabelsrangocalificacion[""]["ID_RC"] = "ID RC";
	$fieldToolTipsrangocalificacion[""]["ID_RC"] = "";
	$placeHoldersrangocalificacion[""]["ID_RC"] = "";
	$fieldLabelsrangocalificacion[""]["RANGOCALIFICACION"] = "RANGOCALIFICACION";
	$fieldToolTipsrangocalificacion[""]["RANGOCALIFICACION"] = "";
	$placeHoldersrangocalificacion[""]["RANGOCALIFICACION"] = "";
	if (count($fieldToolTipsrangocalificacion[""]))
		$tdatarangocalificacion[".isUseToolTips"] = true;
}


	$tdatarangocalificacion[".NCSearch"] = true;



$tdatarangocalificacion[".shortTableName"] = "rangocalificacion";
$tdatarangocalificacion[".nSecOptions"] = 0;
$tdatarangocalificacion[".recsPerRowPrint"] = 1;
$tdatarangocalificacion[".mainTableOwnerID"] = "";
$tdatarangocalificacion[".moveNext"] = 1;
$tdatarangocalificacion[".entityType"] = 0;

$tdatarangocalificacion[".strOriginalTableName"] = "rangocalificacion";

	



$tdatarangocalificacion[".showAddInPopup"] = false;

$tdatarangocalificacion[".showEditInPopup"] = false;

$tdatarangocalificacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarangocalificacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarangocalificacion[".fieldsForRegister"] = array();
	
$tdatarangocalificacion[".listAjax"] = false;

	$tdatarangocalificacion[".audit"] = false;

	$tdatarangocalificacion[".locking"] = false;



$tdatarangocalificacion[".list"] = true;



$tdatarangocalificacion[".reorderRecordsByHeader"] = true;



$tdatarangocalificacion[".inlineAdd"] = true;





$tdatarangocalificacion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarangocalificacion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarangocalificacion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarangocalificacion[".searchSaving"] = false;
//

$tdatarangocalificacion[".showSearchPanel"] = true;
		$tdatarangocalificacion[".flexibleSearch"] = true;

$tdatarangocalificacion[".isUseAjaxSuggest"] = true;

$tdatarangocalificacion[".rowHighlite"] = true;





$tdatarangocalificacion[".ajaxCodeSnippetAdded"] = false;

$tdatarangocalificacion[".buttonsAdded"] = false;

$tdatarangocalificacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarangocalificacion[".isUseTimeForSearch"] = false;



$tdatarangocalificacion[".badgeColor"] = "CD5C5C";


$tdatarangocalificacion[".allSearchFields"] = array();
$tdatarangocalificacion[".filterFields"] = array();
$tdatarangocalificacion[".requiredSearchFields"] = array();

$tdatarangocalificacion[".allSearchFields"][] = "ID_RC";
	$tdatarangocalificacion[".allSearchFields"][] = "RANGOCALIFICACION";
	

$tdatarangocalificacion[".googleLikeFields"] = array();
$tdatarangocalificacion[".googleLikeFields"][] = "ID_RC";
$tdatarangocalificacion[".googleLikeFields"][] = "RANGOCALIFICACION";


$tdatarangocalificacion[".advSearchFields"] = array();
$tdatarangocalificacion[".advSearchFields"][] = "ID_RC";
$tdatarangocalificacion[".advSearchFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".tableType"] = "list";

$tdatarangocalificacion[".printerPageOrientation"] = 0;
$tdatarangocalificacion[".nPrinterPageScale"] = 100;

$tdatarangocalificacion[".nPrinterSplitRecords"] = 40;

$tdatarangocalificacion[".nPrinterPDFSplitRecords"] = 40;



$tdatarangocalificacion[".geocodingEnabled"] = false;





$tdatarangocalificacion[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatarangocalificacion[".pageSize"] = 20;

$tdatarangocalificacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarangocalificacion[".strOrderBy"] = $tstrOrderBy;

$tdatarangocalificacion[".orderindexes"] = array();

$tdatarangocalificacion[".sqlHead"] = "SELECT ID_RC,  	RANGOCALIFICACION";
$tdatarangocalificacion[".sqlFrom"] = "FROM RANGOCALIFICACION";
$tdatarangocalificacion[".sqlWhereExpr"] = "";
$tdatarangocalificacion[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarangocalificacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarangocalificacion[".arrGroupsPerPage"] = $arrGPP;

$tdatarangocalificacion[".highlightSearchResults"] = true;

$tableKeysrangocalificacion = array();
$tableKeysrangocalificacion[] = "ID_RC";
$tdatarangocalificacion[".Keys"] = $tableKeysrangocalificacion;

$tdatarangocalificacion[".listFields"] = array();
$tdatarangocalificacion[".listFields"][] = "ID_RC";
$tdatarangocalificacion[".listFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".hideMobileList"] = array();


$tdatarangocalificacion[".viewFields"] = array();
$tdatarangocalificacion[".viewFields"][] = "ID_RC";
$tdatarangocalificacion[".viewFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".addFields"] = array();
$tdatarangocalificacion[".addFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".masterListFields"] = array();
$tdatarangocalificacion[".masterListFields"][] = "ID_RC";
$tdatarangocalificacion[".masterListFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".inlineAddFields"] = array();
$tdatarangocalificacion[".inlineAddFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".editFields"] = array();
$tdatarangocalificacion[".editFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".inlineEditFields"] = array();
$tdatarangocalificacion[".inlineEditFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".updateSelectedFields"] = array();
$tdatarangocalificacion[".updateSelectedFields"][] = "RANGOCALIFICACION";


$tdatarangocalificacion[".exportFields"] = array();
$tdatarangocalificacion[".exportFields"][] = "ID_RC";
$tdatarangocalificacion[".exportFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".importFields"] = array();
$tdatarangocalificacion[".importFields"][] = "ID_RC";
$tdatarangocalificacion[".importFields"][] = "RANGOCALIFICACION";

$tdatarangocalificacion[".printFields"] = array();
$tdatarangocalificacion[".printFields"][] = "ID_RC";
$tdatarangocalificacion[".printFields"][] = "RANGOCALIFICACION";


//	ID_RC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_RC";
	$fdata["GoodName"] = "ID_RC";
	$fdata["ownerTable"] = "rangocalificacion";
	$fdata["Label"] = GetFieldLabel("rangocalificacion","ID_RC");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID_RC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_RC";

	
	
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




	$tdatarangocalificacion["ID_RC"] = $fdata;
//	RANGOCALIFICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RANGOCALIFICACION";
	$fdata["GoodName"] = "RANGOCALIFICACION";
	$fdata["ownerTable"] = "rangocalificacion";
	$fdata["Label"] = GetFieldLabel("rangocalificacion","RANGOCALIFICACION");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "RANGOCALIFICACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RANGOCALIFICACION";

	
	
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




	$tdatarangocalificacion["RANGOCALIFICACION"] = $fdata;


$tables_data["rangocalificacion"]=&$tdatarangocalificacion;
$field_labels["rangocalificacion"] = &$fieldLabelsrangocalificacion;
$fieldToolTips["rangocalificacion"] = &$fieldToolTipsrangocalificacion;
$placeHolders["rangocalificacion"] = &$placeHoldersrangocalificacion;
$page_titles["rangocalificacion"] = &$pageTitlesrangocalificacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rangocalificacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["rangocalificacion"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_rangocalificacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_RC,  	RANGOCALIFICACION";
$proto0["m_strFrom"] = "FROM RANGOCALIFICACION";
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
	"m_strName" => "ID_RC",
	"m_strTable" => "rangocalificacion",
	"m_srcTableName" => "rangocalificacion"
));

$proto6["m_sql"] = "ID_RC";
$proto6["m_srcTableName"] = "rangocalificacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "RANGOCALIFICACION",
	"m_strTable" => "rangocalificacion",
	"m_srcTableName" => "rangocalificacion"
));

$proto8["m_sql"] = "RANGOCALIFICACION";
$proto8["m_srcTableName"] = "rangocalificacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rangocalificacion";
$proto11["m_srcTableName"] = "rangocalificacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID_RC";
$proto11["m_columns"][] = "RANGOCALIFICACION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "RANGOCALIFICACION";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rangocalificacion";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rangocalificacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rangocalificacion = createSqlQuery_rangocalificacion();


	
		;

		

$tdatarangocalificacion[".sqlquery"] = $queryData_rangocalificacion;

$tableEvents["rangocalificacion"] = new eventsBase;
$tdatarangocalificacion[".hasEvents"] = false;

?>