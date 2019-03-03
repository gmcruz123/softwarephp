<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahabilidades = array();
	$tdatahabilidades[".truncateText"] = true;
	$tdatahabilidades[".NumberOfChars"] = 80;
	$tdatahabilidades[".ShortName"] = "habilidades";
	$tdatahabilidades[".OwnerID"] = "";
	$tdatahabilidades[".OriginalTable"] = "habilidades";

//	field labels
$fieldLabelshabilidades = array();
$fieldToolTipshabilidades = array();
$pageTitleshabilidades = array();
$placeHoldershabilidades = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshabilidades["English"] = array();
	$fieldToolTipshabilidades["English"] = array();
	$placeHoldershabilidades["English"] = array();
	$pageTitleshabilidades["English"] = array();
	$fieldLabelshabilidades["English"]["ID_HABILIDADES"] = "ID HABILIDADES";
	$fieldToolTipshabilidades["English"]["ID_HABILIDADES"] = "";
	$placeHoldershabilidades["English"]["ID_HABILIDADES"] = "";
	$fieldLabelshabilidades["English"]["TITULO"] = "TITULO";
	$fieldToolTipshabilidades["English"]["TITULO"] = "";
	$placeHoldershabilidades["English"]["TITULO"] = "";
	$fieldLabelshabilidades["English"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipshabilidades["English"]["DESCRIPCION"] = "";
	$placeHoldershabilidades["English"]["DESCRIPCION"] = "";
	if (count($fieldToolTipshabilidades["English"]))
		$tdatahabilidades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshabilidades[""] = array();
	$fieldToolTipshabilidades[""] = array();
	$placeHoldershabilidades[""] = array();
	$pageTitleshabilidades[""] = array();
	$fieldLabelshabilidades[""]["ID_HABILIDADES"] = "ID HABILIDADES";
	$fieldToolTipshabilidades[""]["ID_HABILIDADES"] = "";
	$placeHoldershabilidades[""]["ID_HABILIDADES"] = "";
	$fieldLabelshabilidades[""]["TITULO"] = "TITULO";
	$fieldToolTipshabilidades[""]["TITULO"] = "";
	$placeHoldershabilidades[""]["TITULO"] = "";
	$fieldLabelshabilidades[""]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipshabilidades[""]["DESCRIPCION"] = "";
	$placeHoldershabilidades[""]["DESCRIPCION"] = "";
	if (count($fieldToolTipshabilidades[""]))
		$tdatahabilidades[".isUseToolTips"] = true;
}


	$tdatahabilidades[".NCSearch"] = true;



$tdatahabilidades[".shortTableName"] = "habilidades";
$tdatahabilidades[".nSecOptions"] = 0;
$tdatahabilidades[".recsPerRowPrint"] = 1;
$tdatahabilidades[".mainTableOwnerID"] = "";
$tdatahabilidades[".moveNext"] = 1;
$tdatahabilidades[".entityType"] = 0;

$tdatahabilidades[".strOriginalTableName"] = "habilidades";

	



$tdatahabilidades[".showAddInPopup"] = false;

$tdatahabilidades[".showEditInPopup"] = false;

$tdatahabilidades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahabilidades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahabilidades[".fieldsForRegister"] = array();
	
$tdatahabilidades[".listAjax"] = false;

	$tdatahabilidades[".audit"] = false;

	$tdatahabilidades[".locking"] = false;

$tdatahabilidades[".edit"] = true;
$tdatahabilidades[".afterEditAction"] = 1;
$tdatahabilidades[".closePopupAfterEdit"] = 1;
$tdatahabilidades[".afterEditActionDetTable"] = "";

$tdatahabilidades[".add"] = true;
$tdatahabilidades[".afterAddAction"] = 1;
$tdatahabilidades[".closePopupAfterAdd"] = 1;
$tdatahabilidades[".afterAddActionDetTable"] = "";

$tdatahabilidades[".list"] = true;



$tdatahabilidades[".reorderRecordsByHeader"] = true;


$tdatahabilidades[".exportFormatting"] = 2;
$tdatahabilidades[".exportDelimiter"] = ",";
		
$tdatahabilidades[".view"] = true;

$tdatahabilidades[".import"] = true;

$tdatahabilidades[".exportTo"] = true;

$tdatahabilidades[".printFriendly"] = true;

$tdatahabilidades[".delete"] = true;

$tdatahabilidades[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahabilidades[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahabilidades[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahabilidades[".searchSaving"] = false;
//

$tdatahabilidades[".showSearchPanel"] = true;
		$tdatahabilidades[".flexibleSearch"] = true;

$tdatahabilidades[".isUseAjaxSuggest"] = true;

$tdatahabilidades[".rowHighlite"] = true;





$tdatahabilidades[".ajaxCodeSnippetAdded"] = false;

$tdatahabilidades[".buttonsAdded"] = false;

$tdatahabilidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahabilidades[".isUseTimeForSearch"] = false;





$tdatahabilidades[".allSearchFields"] = array();
$tdatahabilidades[".filterFields"] = array();
$tdatahabilidades[".requiredSearchFields"] = array();

$tdatahabilidades[".allSearchFields"][] = "ID_HABILIDADES";
	$tdatahabilidades[".allSearchFields"][] = "TITULO";
	$tdatahabilidades[".allSearchFields"][] = "DESCRIPCION";
	

$tdatahabilidades[".googleLikeFields"] = array();
$tdatahabilidades[".googleLikeFields"][] = "ID_HABILIDADES";
$tdatahabilidades[".googleLikeFields"][] = "TITULO";
$tdatahabilidades[".googleLikeFields"][] = "DESCRIPCION";


$tdatahabilidades[".advSearchFields"] = array();
$tdatahabilidades[".advSearchFields"][] = "ID_HABILIDADES";
$tdatahabilidades[".advSearchFields"][] = "TITULO";
$tdatahabilidades[".advSearchFields"][] = "DESCRIPCION";

$tdatahabilidades[".tableType"] = "list";

$tdatahabilidades[".printerPageOrientation"] = 0;
$tdatahabilidades[".nPrinterPageScale"] = 100;

$tdatahabilidades[".nPrinterSplitRecords"] = 40;

$tdatahabilidades[".nPrinterPDFSplitRecords"] = 40;



$tdatahabilidades[".geocodingEnabled"] = false;





$tdatahabilidades[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatahabilidades[".pageSize"] = 20;

$tdatahabilidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahabilidades[".strOrderBy"] = $tstrOrderBy;

$tdatahabilidades[".orderindexes"] = array();

$tdatahabilidades[".sqlHead"] = "SELECT ID_HABILIDADES,  	TITULO,  	DESCRIPCION";
$tdatahabilidades[".sqlFrom"] = "FROM habilidades";
$tdatahabilidades[".sqlWhereExpr"] = "";
$tdatahabilidades[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahabilidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahabilidades[".arrGroupsPerPage"] = $arrGPP;

$tdatahabilidades[".highlightSearchResults"] = true;

$tableKeyshabilidades = array();
$tableKeyshabilidades[] = "ID_HABILIDADES";
$tdatahabilidades[".Keys"] = $tableKeyshabilidades;

$tdatahabilidades[".listFields"] = array();
$tdatahabilidades[".listFields"][] = "TITULO";
$tdatahabilidades[".listFields"][] = "DESCRIPCION";

$tdatahabilidades[".hideMobileList"] = array();


$tdatahabilidades[".viewFields"] = array();
$tdatahabilidades[".viewFields"][] = "TITULO";
$tdatahabilidades[".viewFields"][] = "DESCRIPCION";

$tdatahabilidades[".addFields"] = array();
$tdatahabilidades[".addFields"][] = "TITULO";
$tdatahabilidades[".addFields"][] = "DESCRIPCION";

$tdatahabilidades[".masterListFields"] = array();
$tdatahabilidades[".masterListFields"][] = "ID_HABILIDADES";
$tdatahabilidades[".masterListFields"][] = "TITULO";
$tdatahabilidades[".masterListFields"][] = "DESCRIPCION";

$tdatahabilidades[".inlineAddFields"] = array();

$tdatahabilidades[".editFields"] = array();
$tdatahabilidades[".editFields"][] = "TITULO";
$tdatahabilidades[".editFields"][] = "DESCRIPCION";

$tdatahabilidades[".inlineEditFields"] = array();

$tdatahabilidades[".updateSelectedFields"] = array();
$tdatahabilidades[".updateSelectedFields"][] = "TITULO";
$tdatahabilidades[".updateSelectedFields"][] = "DESCRIPCION";


$tdatahabilidades[".exportFields"] = array();
$tdatahabilidades[".exportFields"][] = "TITULO";
$tdatahabilidades[".exportFields"][] = "DESCRIPCION";

$tdatahabilidades[".importFields"] = array();
$tdatahabilidades[".importFields"][] = "TITULO";
$tdatahabilidades[".importFields"][] = "DESCRIPCION";

$tdatahabilidades[".printFields"] = array();
$tdatahabilidades[".printFields"][] = "TITULO";
$tdatahabilidades[".printFields"][] = "DESCRIPCION";


//	ID_HABILIDADES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_HABILIDADES";
	$fdata["GoodName"] = "ID_HABILIDADES";
	$fdata["ownerTable"] = "habilidades";
	$fdata["Label"] = GetFieldLabel("habilidades","ID_HABILIDADES");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_HABILIDADES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_HABILIDADES";

	
	
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




	$tdatahabilidades["ID_HABILIDADES"] = $fdata;
//	TITULO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TITULO";
	$fdata["GoodName"] = "TITULO";
	$fdata["ownerTable"] = "habilidades";
	$fdata["Label"] = GetFieldLabel("habilidades","TITULO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TITULO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TITULO";

	
	
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




	$tdatahabilidades["TITULO"] = $fdata;
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "habilidades";
	$fdata["Label"] = GetFieldLabel("habilidades","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdatahabilidades["DESCRIPCION"] = $fdata;


$tables_data["habilidades"]=&$tdatahabilidades;
$field_labels["habilidades"] = &$fieldLabelshabilidades;
$fieldToolTips["habilidades"] = &$fieldToolTipshabilidades;
$placeHolders["habilidades"] = &$placeHoldershabilidades;
$page_titles["habilidades"] = &$pageTitleshabilidades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["habilidades"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["habilidades"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_habilidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_HABILIDADES,  	TITULO,  	DESCRIPCION";
$proto0["m_strFrom"] = "FROM habilidades";
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
	"m_strName" => "ID_HABILIDADES",
	"m_strTable" => "habilidades",
	"m_srcTableName" => "habilidades"
));

$proto6["m_sql"] = "ID_HABILIDADES";
$proto6["m_srcTableName"] = "habilidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TITULO",
	"m_strTable" => "habilidades",
	"m_srcTableName" => "habilidades"
));

$proto8["m_sql"] = "TITULO";
$proto8["m_srcTableName"] = "habilidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "habilidades",
	"m_srcTableName" => "habilidades"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "habilidades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "habilidades";
$proto13["m_srcTableName"] = "habilidades";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID_HABILIDADES";
$proto13["m_columns"][] = "TITULO";
$proto13["m_columns"][] = "DESCRIPCION";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "habilidades";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "habilidades";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="habilidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_habilidades = createSqlQuery_habilidades();


	
		;

			

$tdatahabilidades[".sqlquery"] = $queryData_habilidades;

$tableEvents["habilidades"] = new eventsBase;
$tdatahabilidades[".hasEvents"] = false;

?>