<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausuarios = array();
	$tdatausuarios[".truncateText"] = true;
	$tdatausuarios[".NumberOfChars"] = 80;
	$tdatausuarios[".ShortName"] = "usuarios";
	$tdatausuarios[".OwnerID"] = "";
	$tdatausuarios[".OriginalTable"] = "usuarios";

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusuarios["English"] = array();
	$fieldToolTipsusuarios["English"] = array();
	$placeHoldersusuarios["English"] = array();
	$pageTitlesusuarios["English"] = array();
	$fieldLabelsusuarios["English"]["ID_USUARIOS"] = "ID USUARIOS";
	$fieldToolTipsusuarios["English"]["ID_USUARIOS"] = "";
	$placeHoldersusuarios["English"]["ID_USUARIOS"] = "";
	$fieldLabelsusuarios["English"]["USUARIO"] = "USUARIO";
	$fieldToolTipsusuarios["English"]["USUARIO"] = "";
	$placeHoldersusuarios["English"]["USUARIO"] = "";
	$fieldLabelsusuarios["English"]["CORREO"] = "CORREO";
	$fieldToolTipsusuarios["English"]["CORREO"] = "";
	$placeHoldersusuarios["English"]["CORREO"] = "";
	$fieldLabelsusuarios["English"]["PASS"] = "PASS";
	$fieldToolTipsusuarios["English"]["PASS"] = "";
	$placeHoldersusuarios["English"]["PASS"] = "";
	$fieldLabelsusuarios["English"]["FECHAREGISTRO"] = "FECHAREGISTRO";
	$fieldToolTipsusuarios["English"]["FECHAREGISTRO"] = "";
	$placeHoldersusuarios["English"]["FECHAREGISTRO"] = "";
	$fieldLabelsusuarios["English"]["ROL"] = "ROL";
	$fieldToolTipsusuarios["English"]["ROL"] = "";
	$placeHoldersusuarios["English"]["ROL"] = "";
	if (count($fieldToolTipsusuarios["English"]))
		$tdatausuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusuarios[""] = array();
	$fieldToolTipsusuarios[""] = array();
	$placeHoldersusuarios[""] = array();
	$pageTitlesusuarios[""] = array();
	$fieldLabelsusuarios[""]["ID_USUARIOS"] = "ID USUARIOS";
	$fieldToolTipsusuarios[""]["ID_USUARIOS"] = "";
	$placeHoldersusuarios[""]["ID_USUARIOS"] = "";
	$fieldLabelsusuarios[""]["USUARIO"] = "USUARIO";
	$fieldToolTipsusuarios[""]["USUARIO"] = "";
	$placeHoldersusuarios[""]["USUARIO"] = "";
	$fieldLabelsusuarios[""]["CORREO"] = "CORREO";
	$fieldToolTipsusuarios[""]["CORREO"] = "";
	$placeHoldersusuarios[""]["CORREO"] = "";
	$fieldLabelsusuarios[""]["PASS"] = "PASS";
	$fieldToolTipsusuarios[""]["PASS"] = "";
	$placeHoldersusuarios[""]["PASS"] = "";
	$fieldLabelsusuarios[""]["FECHAREGISTRO"] = "FECHAREGISTRO";
	$fieldToolTipsusuarios[""]["FECHAREGISTRO"] = "";
	$placeHoldersusuarios[""]["FECHAREGISTRO"] = "";
	$fieldLabelsusuarios[""]["ROL"] = "ROL";
	$fieldToolTipsusuarios[""]["ROL"] = "";
	$placeHoldersusuarios[""]["ROL"] = "";
	if (count($fieldToolTipsusuarios[""]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;
$tdatausuarios[".recsPerRowPrint"] = 1;
$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".moveNext"] = 1;
$tdatausuarios[".entityType"] = 0;

$tdatausuarios[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios[".fieldsForRegister"] = array();
	
$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;



$tdatausuarios[".list"] = true;

$tdatausuarios[".inlineEdit"] = true;


$tdatausuarios[".reorderRecordsByHeader"] = true;



$tdatausuarios[".inlineAdd"] = true;




$tdatausuarios[".delete"] = true;

$tdatausuarios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausuarios[".searchSaving"] = false;
//

$tdatausuarios[".showSearchPanel"] = true;
		$tdatausuarios[".flexibleSearch"] = true;

$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;





$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;





$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".allSearchFields"][] = "ID_USUARIOS";
	$tdatausuarios[".allSearchFields"][] = "USUARIO";
	$tdatausuarios[".allSearchFields"][] = "CORREO";
	$tdatausuarios[".allSearchFields"][] = "PASS";
	$tdatausuarios[".allSearchFields"][] = "FECHAREGISTRO";
	$tdatausuarios[".allSearchFields"][] = "ROL";
	

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "ID_USUARIOS";
$tdatausuarios[".googleLikeFields"][] = "USUARIO";
$tdatausuarios[".googleLikeFields"][] = "CORREO";
$tdatausuarios[".googleLikeFields"][] = "PASS";
$tdatausuarios[".googleLikeFields"][] = "FECHAREGISTRO";
$tdatausuarios[".googleLikeFields"][] = "ROL";


$tdatausuarios[".advSearchFields"] = array();
$tdatausuarios[".advSearchFields"][] = "ID_USUARIOS";
$tdatausuarios[".advSearchFields"][] = "USUARIO";
$tdatausuarios[".advSearchFields"][] = "CORREO";
$tdatausuarios[".advSearchFields"][] = "PASS";
$tdatausuarios[".advSearchFields"][] = "FECHAREGISTRO";
$tdatausuarios[".advSearchFields"][] = "ROL";

$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".nPrinterPDFSplitRecords"] = 40;



$tdatausuarios[".geocodingEnabled"] = false;





$tdatausuarios[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();

$tdatausuarios[".sqlHead"] = "SELECT ID_USUARIOS,  	USUARIO,  	CORREO,  	PASS,  	FECHAREGISTRO,  	ROL";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "ID_USUARIOS";
$tdatausuarios[".Keys"] = $tableKeysusuarios;

$tdatausuarios[".listFields"] = array();
$tdatausuarios[".listFields"][] = "USUARIO";
$tdatausuarios[".listFields"][] = "CORREO";
$tdatausuarios[".listFields"][] = "PASS";
$tdatausuarios[".listFields"][] = "FECHAREGISTRO";
$tdatausuarios[".listFields"][] = "ROL";

$tdatausuarios[".hideMobileList"] = array();


$tdatausuarios[".viewFields"] = array();

$tdatausuarios[".addFields"] = array();

$tdatausuarios[".masterListFields"] = array();
$tdatausuarios[".masterListFields"][] = "ID_USUARIOS";
$tdatausuarios[".masterListFields"][] = "USUARIO";
$tdatausuarios[".masterListFields"][] = "CORREO";
$tdatausuarios[".masterListFields"][] = "PASS";
$tdatausuarios[".masterListFields"][] = "FECHAREGISTRO";
$tdatausuarios[".masterListFields"][] = "ROL";

$tdatausuarios[".inlineAddFields"] = array();
$tdatausuarios[".inlineAddFields"][] = "USUARIO";
$tdatausuarios[".inlineAddFields"][] = "CORREO";
$tdatausuarios[".inlineAddFields"][] = "PASS";
$tdatausuarios[".inlineAddFields"][] = "FECHAREGISTRO";
$tdatausuarios[".inlineAddFields"][] = "ROL";

$tdatausuarios[".editFields"] = array();

$tdatausuarios[".inlineEditFields"] = array();
$tdatausuarios[".inlineEditFields"][] = "USUARIO";
$tdatausuarios[".inlineEditFields"][] = "CORREO";
$tdatausuarios[".inlineEditFields"][] = "PASS";
$tdatausuarios[".inlineEditFields"][] = "FECHAREGISTRO";
$tdatausuarios[".inlineEditFields"][] = "ROL";

$tdatausuarios[".updateSelectedFields"] = array();


$tdatausuarios[".exportFields"] = array();

$tdatausuarios[".importFields"] = array();

$tdatausuarios[".printFields"] = array();


//	ID_USUARIOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_USUARIOS";
	$fdata["GoodName"] = "ID_USUARIOS";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","ID_USUARIOS");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_USUARIOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_USUARIOS";

	
	
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




	$tdatausuarios["ID_USUARIOS"] = $fdata;
//	USUARIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "USUARIO";
	$fdata["GoodName"] = "USUARIO";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","USUARIO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "USUARIO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO";

	
	
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




	$tdatausuarios["USUARIO"] = $fdata;
//	CORREO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CORREO";
	$fdata["GoodName"] = "CORREO";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","CORREO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "CORREO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CORREO";

	
	
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




	$tdatausuarios["CORREO"] = $fdata;
//	PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PASS";
	$fdata["GoodName"] = "PASS";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","PASS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "PASS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PASS";

	
	
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

	$edata = array("EditFormat" => "Password");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdatausuarios["PASS"] = $fdata;
//	FECHAREGISTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FECHAREGISTRO";
	$fdata["GoodName"] = "FECHAREGISTRO";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","FECHAREGISTRO");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FECHAREGISTRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHAREGISTRO";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	
		
	


	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatausuarios["FECHAREGISTRO"] = $fdata;
//	ROL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ROL";
	$fdata["GoodName"] = "ROL";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","ROL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ROL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ROL";

	
	
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
	$edata["LookupTable"] = "roles";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID_ROLES";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ROLES";
	
	

	
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




	$tdatausuarios["ROL"] = $fdata;


$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["usuarios"] = &$placeHoldersusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_USUARIOS,  	USUARIO,  	CORREO,  	PASS,  	FECHAREGISTRO,  	ROL";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strName" => "ID_USUARIOS",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto6["m_sql"] = "ID_USUARIOS";
$proto6["m_srcTableName"] = "usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto8["m_sql"] = "USUARIO";
$proto8["m_srcTableName"] = "usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CORREO",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto10["m_sql"] = "CORREO";
$proto10["m_srcTableName"] = "usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PASS",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto12["m_sql"] = "PASS";
$proto12["m_srcTableName"] = "usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHAREGISTRO",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto14["m_sql"] = "FECHAREGISTRO";
$proto14["m_srcTableName"] = "usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ROL",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto16["m_sql"] = "ROL";
$proto16["m_srcTableName"] = "usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "usuarios";
$proto19["m_srcTableName"] = "usuarios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID_USUARIOS";
$proto19["m_columns"][] = "USUARIO";
$proto19["m_columns"][] = "CORREO";
$proto19["m_columns"][] = "PASS";
$proto19["m_columns"][] = "FECHAREGISTRO";
$proto19["m_columns"][] = "ROL";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "usuarios";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "usuarios";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

						

$tdatausuarios[".sqlquery"] = $queryData_usuarios;

$tableEvents["usuarios"] = new eventsBase;
$tdatausuarios[".hasEvents"] = false;

?>