<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "docente";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["ID_DOCENTE"] = "ID DOCENTE";
	$fieldToolTipsadmin_members["English"]["ID_DOCENTE"] = "";
	$placeHoldersadmin_members["English"]["ID_DOCENTE"] = "";
	$fieldLabelsadmin_members["English"]["NOMBRES"] = "Nombre Completo";
	$fieldToolTipsadmin_members["English"]["NOMBRES"] = "";
	$placeHoldersadmin_members["English"]["NOMBRES"] = "";
	$fieldLabelsadmin_members["English"]["CELULAR"] = "Celular";
	$fieldToolTipsadmin_members["English"]["CELULAR"] = "";
	$placeHoldersadmin_members["English"]["CELULAR"] = "";
	$fieldLabelsadmin_members["English"]["CORREO"] = "Correo Electronico";
	$fieldToolTipsadmin_members["English"]["CORREO"] = "";
	$placeHoldersadmin_members["English"]["CORREO"] = "";
	$fieldLabelsadmin_members["English"]["ASIGNATURA"] = "Asignatura";
	$fieldToolTipsadmin_members["English"]["ASIGNATURA"] = "";
	$placeHoldersadmin_members["English"]["ASIGNATURA"] = "";
	$fieldLabelsadmin_members["English"]["PROFESION"] = "Profesion";
	$fieldToolTipsadmin_members["English"]["PROFESION"] = "";
	$placeHoldersadmin_members["English"]["PROFESION"] = "";
	$fieldLabelsadmin_members["English"]["FECHACUMPLEA_OS"] = "Fecha Cumpleaños";
	$fieldToolTipsadmin_members["English"]["FECHACUMPLEA_OS"] = "";
	$placeHoldersadmin_members["English"]["FECHACUMPLEA_OS"] = "";
	$fieldLabelsadmin_members["English"]["ESTADO"] = "Estado";
	$fieldToolTipsadmin_members["English"]["ESTADO"] = "";
	$placeHoldersadmin_members["English"]["ESTADO"] = "";
	$fieldLabelsadmin_members["English"]["FECHADEREGISTRO"] = "Fecha Registro";
	$fieldToolTipsadmin_members["English"]["FECHADEREGISTRO"] = "";
	$placeHoldersadmin_members["English"]["FECHADEREGISTRO"] = "";
	$fieldLabelsadmin_members["English"]["CEDULA"] = "Cedula";
	$fieldToolTipsadmin_members["English"]["CEDULA"] = "";
	$placeHoldersadmin_members["English"]["CEDULA"] = "";
	$fieldLabelsadmin_members["English"]["PASS"] = "Contraseña";
	$fieldToolTipsadmin_members["English"]["PASS"] = "";
	$placeHoldersadmin_members["English"]["PASS"] = "";
	$fieldLabelsadmin_members["English"]["FOTOPERFIL"] = "Foto de Perfil";
	$fieldToolTipsadmin_members["English"]["FOTOPERFIL"] = "";
	$placeHoldersadmin_members["English"]["FOTOPERFIL"] = "";
	$fieldLabelsadmin_members["English"]["TOKEN"] = "TOKEN";
	$fieldToolTipsadmin_members["English"]["TOKEN"] = "";
	$placeHoldersadmin_members["English"]["TOKEN"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	$fieldLabelsadmin_members[""]["CEDULA"] = "CEDULA";
	$fieldToolTipsadmin_members[""]["CEDULA"] = "";
	$placeHoldersadmin_members[""]["CEDULA"] = "";
	$fieldLabelsadmin_members[""]["PASS"] = "PASS";
	$fieldToolTipsadmin_members[""]["PASS"] = "";
	$placeHoldersadmin_members[""]["PASS"] = "";
	$fieldLabelsadmin_members[""]["FOTOPERFIL"] = "FOTOPERFIL";
	$fieldToolTipsadmin_members[""]["FOTOPERFIL"] = "";
	$placeHoldersadmin_members[""]["FOTOPERFIL"] = "";
	$fieldLabelsadmin_members[""]["TOKEN"] = "TOKEN";
	$fieldToolTipsadmin_members[""]["TOKEN"] = "";
	$placeHoldersadmin_members[""]["TOKEN"] = "";
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "docente";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();
	
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;






$tdataadmin_members[".reorderRecordsByHeader"] = true;








$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;





$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;



$tdataadmin_members[".badgeColor"] = "5F9EA0";


$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "ID_DOCENTE";
	$tdataadmin_members[".allSearchFields"][] = "NOMBRES";
	$tdataadmin_members[".allSearchFields"][] = "CELULAR";
	$tdataadmin_members[".allSearchFields"][] = "CORREO";
	$tdataadmin_members[".allSearchFields"][] = "ASIGNATURA";
	$tdataadmin_members[".allSearchFields"][] = "PROFESION";
	$tdataadmin_members[".allSearchFields"][] = "FECHACUMPLEAÑOS";
	$tdataadmin_members[".allSearchFields"][] = "ESTADO";
	$tdataadmin_members[".allSearchFields"][] = "FECHADEREGISTRO";
	$tdataadmin_members[".allSearchFields"][] = "CEDULA";
	$tdataadmin_members[".allSearchFields"][] = "PASS";
	$tdataadmin_members[".allSearchFields"][] = "FOTOPERFIL";
	$tdataadmin_members[".allSearchFields"][] = "TOKEN";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "ID_DOCENTE";
$tdataadmin_members[".googleLikeFields"][] = "NOMBRES";
$tdataadmin_members[".googleLikeFields"][] = "CELULAR";
$tdataadmin_members[".googleLikeFields"][] = "CORREO";
$tdataadmin_members[".googleLikeFields"][] = "ASIGNATURA";
$tdataadmin_members[".googleLikeFields"][] = "PROFESION";
$tdataadmin_members[".googleLikeFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".googleLikeFields"][] = "ESTADO";
$tdataadmin_members[".googleLikeFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".googleLikeFields"][] = "CEDULA";
$tdataadmin_members[".googleLikeFields"][] = "PASS";
$tdataadmin_members[".googleLikeFields"][] = "FOTOPERFIL";
$tdataadmin_members[".googleLikeFields"][] = "TOKEN";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "ID_DOCENTE";
$tdataadmin_members[".advSearchFields"][] = "NOMBRES";
$tdataadmin_members[".advSearchFields"][] = "CELULAR";
$tdataadmin_members[".advSearchFields"][] = "CORREO";
$tdataadmin_members[".advSearchFields"][] = "ASIGNATURA";
$tdataadmin_members[".advSearchFields"][] = "PROFESION";
$tdataadmin_members[".advSearchFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".advSearchFields"][] = "ESTADO";
$tdataadmin_members[".advSearchFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".advSearchFields"][] = "CEDULA";
$tdataadmin_members[".advSearchFields"][] = "PASS";
$tdataadmin_members[".advSearchFields"][] = "FOTOPERFIL";
$tdataadmin_members[".advSearchFields"][] = "TOKEN";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$tdataadmin_members[".sqlFrom"] = "FROM docente";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "ID_DOCENTE";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "FOTOPERFIL";
$tdataadmin_members[".listFields"][] = "NOMBRES";
$tdataadmin_members[".listFields"][] = "CORREO";
$tdataadmin_members[".listFields"][] = "PROFESION";
$tdataadmin_members[".listFields"][] = "ESTADO";
$tdataadmin_members[".listFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".listFields"][] = "CEDULA";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "TOKEN";
$tdataadmin_members[".viewFields"][] = "FOTOPERFIL";
$tdataadmin_members[".viewFields"][] = "CEDULA";
$tdataadmin_members[".viewFields"][] = "NOMBRES";
$tdataadmin_members[".viewFields"][] = "CELULAR";
$tdataadmin_members[".viewFields"][] = "ASIGNATURA";
$tdataadmin_members[".viewFields"][] = "CORREO";
$tdataadmin_members[".viewFields"][] = "PROFESION";
$tdataadmin_members[".viewFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".viewFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".viewFields"][] = "ESTADO";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "TOKEN";
$tdataadmin_members[".addFields"][] = "NOMBRES";
$tdataadmin_members[".addFields"][] = "CELULAR";
$tdataadmin_members[".addFields"][] = "CORREO";
$tdataadmin_members[".addFields"][] = "ASIGNATURA";
$tdataadmin_members[".addFields"][] = "PROFESION";
$tdataadmin_members[".addFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".addFields"][] = "ESTADO";
$tdataadmin_members[".addFields"][] = "CEDULA";
$tdataadmin_members[".addFields"][] = "FOTOPERFIL";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "ID_DOCENTE";
$tdataadmin_members[".masterListFields"][] = "NOMBRES";
$tdataadmin_members[".masterListFields"][] = "CELULAR";
$tdataadmin_members[".masterListFields"][] = "CORREO";
$tdataadmin_members[".masterListFields"][] = "ASIGNATURA";
$tdataadmin_members[".masterListFields"][] = "PROFESION";
$tdataadmin_members[".masterListFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".masterListFields"][] = "ESTADO";
$tdataadmin_members[".masterListFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".masterListFields"][] = "CEDULA";
$tdataadmin_members[".masterListFields"][] = "PASS";
$tdataadmin_members[".masterListFields"][] = "FOTOPERFIL";
$tdataadmin_members[".masterListFields"][] = "TOKEN";

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "TOKEN";
$tdataadmin_members[".editFields"][] = "NOMBRES";
$tdataadmin_members[".editFields"][] = "CELULAR";
$tdataadmin_members[".editFields"][] = "CORREO";
$tdataadmin_members[".editFields"][] = "ASIGNATURA";
$tdataadmin_members[".editFields"][] = "PROFESION";
$tdataadmin_members[".editFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".editFields"][] = "ESTADO";
$tdataadmin_members[".editFields"][] = "CEDULA";
$tdataadmin_members[".editFields"][] = "PASS";
$tdataadmin_members[".editFields"][] = "FOTOPERFIL";

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "TOKEN";
$tdataadmin_members[".updateSelectedFields"][] = "NOMBRES";
$tdataadmin_members[".updateSelectedFields"][] = "CELULAR";
$tdataadmin_members[".updateSelectedFields"][] = "CORREO";
$tdataadmin_members[".updateSelectedFields"][] = "ASIGNATURA";
$tdataadmin_members[".updateSelectedFields"][] = "PROFESION";
$tdataadmin_members[".updateSelectedFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".updateSelectedFields"][] = "ESTADO";
$tdataadmin_members[".updateSelectedFields"][] = "CEDULA";
$tdataadmin_members[".updateSelectedFields"][] = "PASS";
$tdataadmin_members[".updateSelectedFields"][] = "FOTOPERFIL";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "NOMBRES";
$tdataadmin_members[".exportFields"][] = "CELULAR";
$tdataadmin_members[".exportFields"][] = "CORREO";
$tdataadmin_members[".exportFields"][] = "ASIGNATURA";
$tdataadmin_members[".exportFields"][] = "PROFESION";
$tdataadmin_members[".exportFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_members[".exportFields"][] = "ESTADO";
$tdataadmin_members[".exportFields"][] = "FECHADEREGISTRO";
$tdataadmin_members[".exportFields"][] = "CEDULA";
$tdataadmin_members[".exportFields"][] = "FOTOPERFIL";
$tdataadmin_members[".exportFields"][] = "TOKEN";

$tdataadmin_members[".importFields"] = array();

$tdataadmin_members[".printFields"] = array();


//	ID_DOCENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_DOCENTE";
	$fdata["GoodName"] = "ID_DOCENTE";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","ID_DOCENTE");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ID_DOCENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_DOCENTE";

	
	
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




	$tdataadmin_members["ID_DOCENTE"] = $fdata;
//	NOMBRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRES";
	$fdata["GoodName"] = "NOMBRES";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","NOMBRES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NOMBRES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRES";

	
	
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




	$tdataadmin_members["NOMBRES"] = $fdata;
//	CELULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CELULAR";
	$fdata["GoodName"] = "CELULAR";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","CELULAR");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CELULAR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CELULAR";

	
	
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




	$tdataadmin_members["CELULAR"] = $fdata;
//	CORREO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CORREO";
	$fdata["GoodName"] = "CORREO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","CORREO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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




	$tdataadmin_members["CORREO"] = $fdata;
//	ASIGNATURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASIGNATURA";
	$fdata["GoodName"] = "ASIGNATURA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","ASIGNATURA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ASIGNATURA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ASIGNATURA";

	
	
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
	$edata["LookupTable"] = "asignatura";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DESCRIPCION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DESCRIPCION";
	
	

	
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




	$tdataadmin_members["ASIGNATURA"] = $fdata;
//	PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROFESION";
	$fdata["GoodName"] = "PROFESION";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","PROFESION");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "profesion";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PROFESION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PROFESION";
	
	

	
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




	$tdataadmin_members["PROFESION"] = $fdata;
//	FECHACUMPLEAÑOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FECHACUMPLEAÑOS";
	$fdata["GoodName"] = "FECHACUMPLEA_OS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","FECHACUMPLEA_OS");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FECHACUMPLEAÑOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`FECHACUMPLEAÑOS`";

	
	
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
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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




	$tdataadmin_members["FECHACUMPLEAÑOS"] = $fdata;
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","ESTADO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ESTADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO";

	
	
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
	$edata["LookupTable"] = "estado";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "DESCRIPCION";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DESCRIPCION";
	
	

	
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




	$tdataadmin_members["ESTADO"] = $fdata;
//	FECHADEREGISTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FECHADEREGISTRO";
	$fdata["GoodName"] = "FECHADEREGISTRO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","FECHADEREGISTRO");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FECHADEREGISTRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHADEREGISTRO";

	
	
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




	$tdataadmin_members["FECHADEREGISTRO"] = $fdata;
//	CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CEDULA";
	$fdata["GoodName"] = "CEDULA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CEDULA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CEDULA";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["CEDULA"] = $fdata;
//	PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PASS";
	$fdata["GoodName"] = "PASS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","PASS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdataadmin_members["PASS"] = $fdata;
//	FOTOPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FOTOPERFIL";
	$fdata["GoodName"] = "FOTOPERFIL";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","FOTOPERFIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FOTOPERFIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FOTOPERFIL";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 170;
	$vdata["ThumbHeight"] = 220;
			$vdata["ImageWidth"] = 50;
	$vdata["ImageHeight"] = 220;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 100;
			$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 100;
	$vdata["ThumbHeight"] = 100;
			$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["FOTOPERFIL"] = $fdata;
//	TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TOKEN";
	$fdata["GoodName"] = "TOKEN";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_members","TOKEN");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TOKEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TOKEN";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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




	$tdataadmin_members["TOKEN"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$proto0["m_strFrom"] = "FROM docente";
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
	"m_strName" => "ID_DOCENTE",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "ID_DOCENTE";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRES",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "NOMBRES";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CELULAR",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "CELULAR";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CORREO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "CORREO";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ASIGNATURA",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "ASIGNATURA";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "PROFESION",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "PROFESION";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHACUMPLEAÑOS",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "`FECHACUMPLEAÑOS`";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "ESTADO";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHADEREGISTRO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "FECHADEREGISTRO";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CEDULA",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "CEDULA";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PASS",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "PASS";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTOPERFIL",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "FOTOPERFIL";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TOKEN",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "TOKEN";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "docente";
$proto33["m_srcTableName"] = "admin_members";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "ID_DOCENTE";
$proto33["m_columns"][] = "NOMBRES";
$proto33["m_columns"][] = "CELULAR";
$proto33["m_columns"][] = "CORREO";
$proto33["m_columns"][] = "ASIGNATURA";
$proto33["m_columns"][] = "PROFESION";
$proto33["m_columns"][] = "FECHACUMPLEAÑOS";
$proto33["m_columns"][] = "ESTADO";
$proto33["m_columns"][] = "FECHADEREGISTRO";
$proto33["m_columns"][] = "CEDULA";
$proto33["m_columns"][] = "PASS";
$proto33["m_columns"][] = "FOTOPERFIL";
$proto33["m_columns"][] = "TOKEN";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "docente";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "admin_members";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

													

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

include_once(getabspath("include/admin_members_events.php"));
$tableEvents["admin_members"] = new eventclass_admin_members;
$tdataadmin_members[".hasEvents"] = true;

?>