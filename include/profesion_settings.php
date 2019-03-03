<?php
require_once(getabspath("classes/cipherer.php"));




$tdataprofesion = array();
	$tdataprofesion[".truncateText"] = true;
	$tdataprofesion[".NumberOfChars"] = 80;
	$tdataprofesion[".ShortName"] = "profesion";
	$tdataprofesion[".OwnerID"] = "";
	$tdataprofesion[".OriginalTable"] = "profesion";

//	field labels
$fieldLabelsprofesion = array();
$fieldToolTipsprofesion = array();
$pageTitlesprofesion = array();
$placeHoldersprofesion = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprofesion["English"] = array();
	$fieldToolTipsprofesion["English"] = array();
	$placeHoldersprofesion["English"] = array();
	$pageTitlesprofesion["English"] = array();
	$fieldLabelsprofesion["English"]["ID_PROFESION"] = "ID PROFESION";
	$fieldToolTipsprofesion["English"]["ID_PROFESION"] = "";
	$placeHoldersprofesion["English"]["ID_PROFESION"] = "";
	$fieldLabelsprofesion["English"]["PROFESION"] = "PROFESION";
	$fieldToolTipsprofesion["English"]["PROFESION"] = "";
	$placeHoldersprofesion["English"]["PROFESION"] = "";
	if (count($fieldToolTipsprofesion["English"]))
		$tdataprofesion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsprofesion[""] = array();
	$fieldToolTipsprofesion[""] = array();
	$placeHoldersprofesion[""] = array();
	$pageTitlesprofesion[""] = array();
	$fieldLabelsprofesion[""]["ID_PROFESION"] = "ID PROFESION";
	$fieldToolTipsprofesion[""]["ID_PROFESION"] = "";
	$placeHoldersprofesion[""]["ID_PROFESION"] = "";
	$fieldLabelsprofesion[""]["PROFESION"] = "PROFESION";
	$fieldToolTipsprofesion[""]["PROFESION"] = "";
	$placeHoldersprofesion[""]["PROFESION"] = "";
	if (count($fieldToolTipsprofesion[""]))
		$tdataprofesion[".isUseToolTips"] = true;
}


	$tdataprofesion[".NCSearch"] = true;



$tdataprofesion[".shortTableName"] = "profesion";
$tdataprofesion[".nSecOptions"] = 0;
$tdataprofesion[".recsPerRowPrint"] = 1;
$tdataprofesion[".mainTableOwnerID"] = "";
$tdataprofesion[".moveNext"] = 1;
$tdataprofesion[".entityType"] = 0;

$tdataprofesion[".strOriginalTableName"] = "profesion";

	



$tdataprofesion[".showAddInPopup"] = false;

$tdataprofesion[".showEditInPopup"] = false;

$tdataprofesion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataprofesion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataprofesion[".fieldsForRegister"] = array();
	
$tdataprofesion[".listAjax"] = false;

	$tdataprofesion[".audit"] = false;

	$tdataprofesion[".locking"] = false;



$tdataprofesion[".list"] = true;

$tdataprofesion[".inlineEdit"] = true;


$tdataprofesion[".reorderRecordsByHeader"] = true;


$tdataprofesion[".exportFormatting"] = 2;
$tdataprofesion[".exportDelimiter"] = ",";
		
$tdataprofesion[".inlineAdd"] = true;
$tdataprofesion[".view"] = true;

$tdataprofesion[".import"] = true;

$tdataprofesion[".exportTo"] = true;

$tdataprofesion[".printFriendly"] = true;

$tdataprofesion[".delete"] = true;

$tdataprofesion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataprofesion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataprofesion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataprofesion[".searchSaving"] = false;
//

$tdataprofesion[".showSearchPanel"] = true;
		$tdataprofesion[".flexibleSearch"] = true;

$tdataprofesion[".isUseAjaxSuggest"] = true;

$tdataprofesion[".rowHighlite"] = true;





$tdataprofesion[".ajaxCodeSnippetAdded"] = false;

$tdataprofesion[".buttonsAdded"] = false;

$tdataprofesion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprofesion[".isUseTimeForSearch"] = false;





$tdataprofesion[".allSearchFields"] = array();
$tdataprofesion[".filterFields"] = array();
$tdataprofesion[".requiredSearchFields"] = array();

$tdataprofesion[".allSearchFields"][] = "ID_PROFESION";
	$tdataprofesion[".allSearchFields"][] = "PROFESION";
	

$tdataprofesion[".googleLikeFields"] = array();
$tdataprofesion[".googleLikeFields"][] = "ID_PROFESION";
$tdataprofesion[".googleLikeFields"][] = "PROFESION";


$tdataprofesion[".advSearchFields"] = array();
$tdataprofesion[".advSearchFields"][] = "ID_PROFESION";
$tdataprofesion[".advSearchFields"][] = "PROFESION";

$tdataprofesion[".tableType"] = "list";

$tdataprofesion[".printerPageOrientation"] = 0;
$tdataprofesion[".nPrinterPageScale"] = 100;

$tdataprofesion[".nPrinterSplitRecords"] = 40;

$tdataprofesion[".nPrinterPDFSplitRecords"] = 40;



$tdataprofesion[".geocodingEnabled"] = false;





$tdataprofesion[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataprofesion[".pageSize"] = 20;

$tdataprofesion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprofesion[".strOrderBy"] = $tstrOrderBy;

$tdataprofesion[".orderindexes"] = array();

$tdataprofesion[".sqlHead"] = "SELECT ID_PROFESION,  	PROFESION";
$tdataprofesion[".sqlFrom"] = "FROM profesion";
$tdataprofesion[".sqlWhereExpr"] = "";
$tdataprofesion[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprofesion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprofesion[".arrGroupsPerPage"] = $arrGPP;

$tdataprofesion[".highlightSearchResults"] = true;

$tableKeysprofesion = array();
$tableKeysprofesion[] = "ID_PROFESION";
$tdataprofesion[".Keys"] = $tableKeysprofesion;

$tdataprofesion[".listFields"] = array();
$tdataprofesion[".listFields"][] = "PROFESION";

$tdataprofesion[".hideMobileList"] = array();


$tdataprofesion[".viewFields"] = array();
$tdataprofesion[".viewFields"][] = "PROFESION";

$tdataprofesion[".addFields"] = array();

$tdataprofesion[".masterListFields"] = array();
$tdataprofesion[".masterListFields"][] = "ID_PROFESION";
$tdataprofesion[".masterListFields"][] = "PROFESION";

$tdataprofesion[".inlineAddFields"] = array();
$tdataprofesion[".inlineAddFields"][] = "PROFESION";

$tdataprofesion[".editFields"] = array();

$tdataprofesion[".inlineEditFields"] = array();
$tdataprofesion[".inlineEditFields"][] = "PROFESION";

$tdataprofesion[".updateSelectedFields"] = array();


$tdataprofesion[".exportFields"] = array();
$tdataprofesion[".exportFields"][] = "PROFESION";

$tdataprofesion[".importFields"] = array();
$tdataprofesion[".importFields"][] = "PROFESION";

$tdataprofesion[".printFields"] = array();
$tdataprofesion[".printFields"][] = "PROFESION";


//	ID_PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_PROFESION";
	$fdata["GoodName"] = "ID_PROFESION";
	$fdata["ownerTable"] = "profesion";
	$fdata["Label"] = GetFieldLabel("profesion","ID_PROFESION");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_PROFESION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_PROFESION";

	
	
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




	$tdataprofesion["ID_PROFESION"] = $fdata;
//	PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROFESION";
	$fdata["GoodName"] = "PROFESION";
	$fdata["ownerTable"] = "profesion";
	$fdata["Label"] = GetFieldLabel("profesion","PROFESION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PROFESION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROFESION";

	
	
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




	$tdataprofesion["PROFESION"] = $fdata;


$tables_data["profesion"]=&$tdataprofesion;
$field_labels["profesion"] = &$fieldLabelsprofesion;
$fieldToolTips["profesion"] = &$fieldToolTipsprofesion;
$placeHolders["profesion"] = &$placeHoldersprofesion;
$page_titles["profesion"] = &$pageTitlesprofesion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["profesion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["profesion"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_profesion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_PROFESION,  	PROFESION";
$proto0["m_strFrom"] = "FROM profesion";
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
	"m_strName" => "ID_PROFESION",
	"m_strTable" => "profesion",
	"m_srcTableName" => "profesion"
));

$proto6["m_sql"] = "ID_PROFESION";
$proto6["m_srcTableName"] = "profesion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PROFESION",
	"m_strTable" => "profesion",
	"m_srcTableName" => "profesion"
));

$proto8["m_sql"] = "PROFESION";
$proto8["m_srcTableName"] = "profesion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "profesion";
$proto11["m_srcTableName"] = "profesion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID_PROFESION";
$proto11["m_columns"][] = "PROFESION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "profesion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "profesion";
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
$proto0["m_srcTableName"]="profesion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_profesion = createSqlQuery_profesion();


	
		;

		

$tdataprofesion[".sqlquery"] = $queryData_profesion;

$tableEvents["profesion"] = new eventsBase;
$tdataprofesion[".hasEvents"] = false;

?>