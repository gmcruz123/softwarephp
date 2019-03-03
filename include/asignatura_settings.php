<?php
require_once(getabspath("classes/cipherer.php"));




$tdataasignatura = array();
	$tdataasignatura[".truncateText"] = true;
	$tdataasignatura[".NumberOfChars"] = 80;
	$tdataasignatura[".ShortName"] = "asignatura";
	$tdataasignatura[".OwnerID"] = "";
	$tdataasignatura[".OriginalTable"] = "asignatura";

//	field labels
$fieldLabelsasignatura = array();
$fieldToolTipsasignatura = array();
$pageTitlesasignatura = array();
$placeHoldersasignatura = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsasignatura["English"] = array();
	$fieldToolTipsasignatura["English"] = array();
	$placeHoldersasignatura["English"] = array();
	$pageTitlesasignatura["English"] = array();
	$fieldLabelsasignatura["English"]["ID_ASIGNATURA"] = "ID ASIGNATURA";
	$fieldToolTipsasignatura["English"]["ID_ASIGNATURA"] = "";
	$placeHoldersasignatura["English"]["ID_ASIGNATURA"] = "";
	$fieldLabelsasignatura["English"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsasignatura["English"]["DESCRIPCION"] = "";
	$placeHoldersasignatura["English"]["DESCRIPCION"] = "";
	if (count($fieldToolTipsasignatura["English"]))
		$tdataasignatura[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsasignatura[""] = array();
	$fieldToolTipsasignatura[""] = array();
	$placeHoldersasignatura[""] = array();
	$pageTitlesasignatura[""] = array();
	$fieldLabelsasignatura[""]["ID_ASIGNATURA"] = "ID ASIGNATURA";
	$fieldToolTipsasignatura[""]["ID_ASIGNATURA"] = "";
	$placeHoldersasignatura[""]["ID_ASIGNATURA"] = "";
	$fieldLabelsasignatura[""]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsasignatura[""]["DESCRIPCION"] = "";
	$placeHoldersasignatura[""]["DESCRIPCION"] = "";
	if (count($fieldToolTipsasignatura[""]))
		$tdataasignatura[".isUseToolTips"] = true;
}


	$tdataasignatura[".NCSearch"] = true;



$tdataasignatura[".shortTableName"] = "asignatura";
$tdataasignatura[".nSecOptions"] = 0;
$tdataasignatura[".recsPerRowPrint"] = 1;
$tdataasignatura[".mainTableOwnerID"] = "";
$tdataasignatura[".moveNext"] = 1;
$tdataasignatura[".entityType"] = 0;

$tdataasignatura[".strOriginalTableName"] = "asignatura";

	



$tdataasignatura[".showAddInPopup"] = false;

$tdataasignatura[".showEditInPopup"] = false;

$tdataasignatura[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataasignatura[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataasignatura[".fieldsForRegister"] = array();
	
$tdataasignatura[".listAjax"] = false;

	$tdataasignatura[".audit"] = false;

	$tdataasignatura[".locking"] = false;



$tdataasignatura[".list"] = true;

$tdataasignatura[".inlineEdit"] = true;


$tdataasignatura[".reorderRecordsByHeader"] = true;


$tdataasignatura[".exportFormatting"] = 2;
$tdataasignatura[".exportDelimiter"] = ",";
		
$tdataasignatura[".inlineAdd"] = true;

$tdataasignatura[".import"] = true;

$tdataasignatura[".exportTo"] = true;

$tdataasignatura[".printFriendly"] = true;

$tdataasignatura[".delete"] = true;

$tdataasignatura[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataasignatura[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataasignatura[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataasignatura[".searchSaving"] = false;
//

$tdataasignatura[".showSearchPanel"] = true;
		$tdataasignatura[".flexibleSearch"] = true;

$tdataasignatura[".isUseAjaxSuggest"] = true;

$tdataasignatura[".rowHighlite"] = true;





$tdataasignatura[".ajaxCodeSnippetAdded"] = false;

$tdataasignatura[".buttonsAdded"] = false;

$tdataasignatura[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasignatura[".isUseTimeForSearch"] = false;



$tdataasignatura[".badgeColor"] = "008B8B";


$tdataasignatura[".allSearchFields"] = array();
$tdataasignatura[".filterFields"] = array();
$tdataasignatura[".requiredSearchFields"] = array();

$tdataasignatura[".allSearchFields"][] = "ID_ASIGNATURA";
	$tdataasignatura[".allSearchFields"][] = "DESCRIPCION";
	

$tdataasignatura[".googleLikeFields"] = array();
$tdataasignatura[".googleLikeFields"][] = "ID_ASIGNATURA";
$tdataasignatura[".googleLikeFields"][] = "DESCRIPCION";


$tdataasignatura[".advSearchFields"] = array();
$tdataasignatura[".advSearchFields"][] = "ID_ASIGNATURA";
$tdataasignatura[".advSearchFields"][] = "DESCRIPCION";

$tdataasignatura[".tableType"] = "list";

$tdataasignatura[".printerPageOrientation"] = 0;
$tdataasignatura[".nPrinterPageScale"] = 100;

$tdataasignatura[".nPrinterSplitRecords"] = 40;

$tdataasignatura[".nPrinterPDFSplitRecords"] = 40;



$tdataasignatura[".geocodingEnabled"] = false;





$tdataasignatura[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataasignatura[".pageSize"] = 20;

$tdataasignatura[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataasignatura[".strOrderBy"] = $tstrOrderBy;

$tdataasignatura[".orderindexes"] = array();

$tdataasignatura[".sqlHead"] = "SELECT ID_ASIGNATURA,  	DESCRIPCION";
$tdataasignatura[".sqlFrom"] = "FROM asignatura";
$tdataasignatura[".sqlWhereExpr"] = "";
$tdataasignatura[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasignatura[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasignatura[".arrGroupsPerPage"] = $arrGPP;

$tdataasignatura[".highlightSearchResults"] = true;

$tableKeysasignatura = array();
$tableKeysasignatura[] = "ID_ASIGNATURA";
$tdataasignatura[".Keys"] = $tableKeysasignatura;

$tdataasignatura[".listFields"] = array();
$tdataasignatura[".listFields"][] = "DESCRIPCION";

$tdataasignatura[".hideMobileList"] = array();


$tdataasignatura[".viewFields"] = array();

$tdataasignatura[".addFields"] = array();

$tdataasignatura[".masterListFields"] = array();
$tdataasignatura[".masterListFields"][] = "ID_ASIGNATURA";
$tdataasignatura[".masterListFields"][] = "DESCRIPCION";

$tdataasignatura[".inlineAddFields"] = array();
$tdataasignatura[".inlineAddFields"][] = "DESCRIPCION";

$tdataasignatura[".editFields"] = array();

$tdataasignatura[".inlineEditFields"] = array();
$tdataasignatura[".inlineEditFields"][] = "DESCRIPCION";

$tdataasignatura[".updateSelectedFields"] = array();


$tdataasignatura[".exportFields"] = array();
$tdataasignatura[".exportFields"][] = "DESCRIPCION";

$tdataasignatura[".importFields"] = array();
$tdataasignatura[".importFields"][] = "DESCRIPCION";

$tdataasignatura[".printFields"] = array();
$tdataasignatura[".printFields"][] = "DESCRIPCION";


//	ID_ASIGNATURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_ASIGNATURA";
	$fdata["GoodName"] = "ID_ASIGNATURA";
	$fdata["ownerTable"] = "asignatura";
	$fdata["Label"] = GetFieldLabel("asignatura","ID_ASIGNATURA");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_ASIGNATURA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_ASIGNATURA";

	
	
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




	$tdataasignatura["ID_ASIGNATURA"] = $fdata;
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "asignatura";
	$fdata["Label"] = GetFieldLabel("asignatura","DESCRIPCION");
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




	$tdataasignatura["DESCRIPCION"] = $fdata;


$tables_data["asignatura"]=&$tdataasignatura;
$field_labels["asignatura"] = &$fieldLabelsasignatura;
$fieldToolTips["asignatura"] = &$fieldToolTipsasignatura;
$placeHolders["asignatura"] = &$placeHoldersasignatura;
$page_titles["asignatura"] = &$pageTitlesasignatura;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["asignatura"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["asignatura"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_asignatura()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_ASIGNATURA,  	DESCRIPCION";
$proto0["m_strFrom"] = "FROM asignatura";
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
	"m_strName" => "ID_ASIGNATURA",
	"m_strTable" => "asignatura",
	"m_srcTableName" => "asignatura"
));

$proto6["m_sql"] = "ID_ASIGNATURA";
$proto6["m_srcTableName"] = "asignatura";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "asignatura",
	"m_srcTableName" => "asignatura"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "asignatura";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "asignatura";
$proto11["m_srcTableName"] = "asignatura";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID_ASIGNATURA";
$proto11["m_columns"][] = "DESCRIPCION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "asignatura";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "asignatura";
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
$proto0["m_srcTableName"]="asignatura";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asignatura = createSqlQuery_asignatura();


	
		;

		

$tdataasignatura[".sqlquery"] = $queryData_asignatura;

$tableEvents["asignatura"] = new eventsBase;
$tdataasignatura[".hasEvents"] = false;

?>