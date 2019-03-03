<?php
require_once(getabspath("classes/cipherer.php"));




$tdataestado = array();
	$tdataestado[".truncateText"] = true;
	$tdataestado[".NumberOfChars"] = 80;
	$tdataestado[".ShortName"] = "estado";
	$tdataestado[".OwnerID"] = "";
	$tdataestado[".OriginalTable"] = "estado";

//	field labels
$fieldLabelsestado = array();
$fieldToolTipsestado = array();
$pageTitlesestado = array();
$placeHoldersestado = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsestado["English"] = array();
	$fieldToolTipsestado["English"] = array();
	$placeHoldersestado["English"] = array();
	$pageTitlesestado["English"] = array();
	$fieldLabelsestado["English"]["FID_ESTADO"] = "FID ESTADO";
	$fieldToolTipsestado["English"]["FID_ESTADO"] = "";
	$placeHoldersestado["English"]["FID_ESTADO"] = "";
	$fieldLabelsestado["English"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsestado["English"]["DESCRIPCION"] = "";
	$placeHoldersestado["English"]["DESCRIPCION"] = "";
	if (count($fieldToolTipsestado["English"]))
		$tdataestado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsestado[""] = array();
	$fieldToolTipsestado[""] = array();
	$placeHoldersestado[""] = array();
	$pageTitlesestado[""] = array();
	$fieldLabelsestado[""]["FID_ESTADO"] = "FID ESTADO";
	$fieldToolTipsestado[""]["FID_ESTADO"] = "";
	$placeHoldersestado[""]["FID_ESTADO"] = "";
	$fieldLabelsestado[""]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsestado[""]["DESCRIPCION"] = "";
	$placeHoldersestado[""]["DESCRIPCION"] = "";
	if (count($fieldToolTipsestado[""]))
		$tdataestado[".isUseToolTips"] = true;
}


	$tdataestado[".NCSearch"] = true;



$tdataestado[".shortTableName"] = "estado";
$tdataestado[".nSecOptions"] = 0;
$tdataestado[".recsPerRowPrint"] = 1;
$tdataestado[".mainTableOwnerID"] = "";
$tdataestado[".moveNext"] = 1;
$tdataestado[".entityType"] = 0;

$tdataestado[".strOriginalTableName"] = "estado";

	



$tdataestado[".showAddInPopup"] = false;

$tdataestado[".showEditInPopup"] = false;

$tdataestado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataestado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataestado[".fieldsForRegister"] = array();
	
$tdataestado[".listAjax"] = false;

	$tdataestado[".audit"] = false;

	$tdataestado[".locking"] = false;



$tdataestado[".list"] = true;

$tdataestado[".inlineEdit"] = true;


$tdataestado[".reorderRecordsByHeader"] = true;


$tdataestado[".exportFormatting"] = 2;
$tdataestado[".exportDelimiter"] = ",";
		
$tdataestado[".inlineAdd"] = true;

$tdataestado[".import"] = true;

$tdataestado[".exportTo"] = true;

$tdataestado[".printFriendly"] = true;

$tdataestado[".delete"] = true;

$tdataestado[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataestado[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataestado[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataestado[".searchSaving"] = false;
//

$tdataestado[".showSearchPanel"] = true;
		$tdataestado[".flexibleSearch"] = true;

$tdataestado[".isUseAjaxSuggest"] = true;

$tdataestado[".rowHighlite"] = true;





$tdataestado[".ajaxCodeSnippetAdded"] = false;

$tdataestado[".buttonsAdded"] = false;

$tdataestado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestado[".isUseTimeForSearch"] = false;



$tdataestado[".badgeColor"] = "6493EA";


$tdataestado[".allSearchFields"] = array();
$tdataestado[".filterFields"] = array();
$tdataestado[".requiredSearchFields"] = array();

$tdataestado[".allSearchFields"][] = "FID_ESTADO";
	$tdataestado[".allSearchFields"][] = "DESCRIPCION";
	

$tdataestado[".googleLikeFields"] = array();
$tdataestado[".googleLikeFields"][] = "FID_ESTADO";
$tdataestado[".googleLikeFields"][] = "DESCRIPCION";


$tdataestado[".advSearchFields"] = array();
$tdataestado[".advSearchFields"][] = "FID_ESTADO";
$tdataestado[".advSearchFields"][] = "DESCRIPCION";

$tdataestado[".tableType"] = "list";

$tdataestado[".printerPageOrientation"] = 0;
$tdataestado[".nPrinterPageScale"] = 100;

$tdataestado[".nPrinterSplitRecords"] = 40;

$tdataestado[".nPrinterPDFSplitRecords"] = 40;



$tdataestado[".geocodingEnabled"] = false;





$tdataestado[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataestado[".pageSize"] = 20;

$tdataestado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataestado[".strOrderBy"] = $tstrOrderBy;

$tdataestado[".orderindexes"] = array();

$tdataestado[".sqlHead"] = "SELECT FID_ESTADO,  	DESCRIPCION";
$tdataestado[".sqlFrom"] = "FROM estado";
$tdataestado[".sqlWhereExpr"] = "";
$tdataestado[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestado[".arrGroupsPerPage"] = $arrGPP;

$tdataestado[".highlightSearchResults"] = true;

$tableKeysestado = array();
$tableKeysestado[] = "FID_ESTADO";
$tdataestado[".Keys"] = $tableKeysestado;

$tdataestado[".listFields"] = array();
$tdataestado[".listFields"][] = "DESCRIPCION";

$tdataestado[".hideMobileList"] = array();


$tdataestado[".viewFields"] = array();

$tdataestado[".addFields"] = array();

$tdataestado[".masterListFields"] = array();
$tdataestado[".masterListFields"][] = "FID_ESTADO";
$tdataestado[".masterListFields"][] = "DESCRIPCION";

$tdataestado[".inlineAddFields"] = array();
$tdataestado[".inlineAddFields"][] = "DESCRIPCION";

$tdataestado[".editFields"] = array();

$tdataestado[".inlineEditFields"] = array();
$tdataestado[".inlineEditFields"][] = "DESCRIPCION";

$tdataestado[".updateSelectedFields"] = array();


$tdataestado[".exportFields"] = array();
$tdataestado[".exportFields"][] = "DESCRIPCION";

$tdataestado[".importFields"] = array();
$tdataestado[".importFields"][] = "DESCRIPCION";

$tdataestado[".printFields"] = array();
$tdataestado[".printFields"][] = "DESCRIPCION";


//	FID_ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FID_ESTADO";
	$fdata["GoodName"] = "FID_ESTADO";
	$fdata["ownerTable"] = "estado";
	$fdata["Label"] = GetFieldLabel("estado","FID_ESTADO");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FID_ESTADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FID_ESTADO";

	
	
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




	$tdataestado["FID_ESTADO"] = $fdata;
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "estado";
	$fdata["Label"] = GetFieldLabel("estado","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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




	$tdataestado["DESCRIPCION"] = $fdata;


$tables_data["estado"]=&$tdataestado;
$field_labels["estado"] = &$fieldLabelsestado;
$fieldToolTips["estado"] = &$fieldToolTipsestado;
$placeHolders["estado"] = &$placeHoldersestado;
$page_titles["estado"] = &$pageTitlesestado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["estado"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["estado"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "FID_ESTADO,  	DESCRIPCION";
$proto0["m_strFrom"] = "FROM estado";
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
	"m_strName" => "FID_ESTADO",
	"m_strTable" => "estado",
	"m_srcTableName" => "estado"
));

$proto6["m_sql"] = "FID_ESTADO";
$proto6["m_srcTableName"] = "estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "estado",
	"m_srcTableName" => "estado"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "estado";
$proto11["m_srcTableName"] = "estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "FID_ESTADO";
$proto11["m_columns"][] = "DESCRIPCION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "estado";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "estado";
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
$proto0["m_srcTableName"]="estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estado = createSqlQuery_estado();


	
		;

		

$tdataestado[".sqlquery"] = $queryData_estado;

$tableEvents["estado"] = new eventsBase;
$tdataestado[".hasEvents"] = false;

?>