<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "docente";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$placeHoldersadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["ID_DOCENTE"] = "ID DOCENTE";
	$fieldToolTipsadmin_users["English"]["ID_DOCENTE"] = "";
	$placeHoldersadmin_users["English"]["ID_DOCENTE"] = "";
	$fieldLabelsadmin_users["English"]["NOMBRES"] = "Nombre Completo";
	$fieldToolTipsadmin_users["English"]["NOMBRES"] = "";
	$placeHoldersadmin_users["English"]["NOMBRES"] = "";
	$fieldLabelsadmin_users["English"]["CELULAR"] = "Celular";
	$fieldToolTipsadmin_users["English"]["CELULAR"] = "";
	$placeHoldersadmin_users["English"]["CELULAR"] = "";
	$fieldLabelsadmin_users["English"]["CORREO"] = "Correo Electronico";
	$fieldToolTipsadmin_users["English"]["CORREO"] = "";
	$placeHoldersadmin_users["English"]["CORREO"] = "";
	$fieldLabelsadmin_users["English"]["ASIGNATURA"] = "Asignatura";
	$fieldToolTipsadmin_users["English"]["ASIGNATURA"] = "";
	$placeHoldersadmin_users["English"]["ASIGNATURA"] = "";
	$fieldLabelsadmin_users["English"]["PROFESION"] = "Profesion";
	$fieldToolTipsadmin_users["English"]["PROFESION"] = "";
	$placeHoldersadmin_users["English"]["PROFESION"] = "";
	$fieldLabelsadmin_users["English"]["FECHACUMPLEA_OS"] = "Fecha Cumpleaños";
	$fieldToolTipsadmin_users["English"]["FECHACUMPLEA_OS"] = "";
	$placeHoldersadmin_users["English"]["FECHACUMPLEA_OS"] = "";
	$fieldLabelsadmin_users["English"]["ESTADO"] = "Estado";
	$fieldToolTipsadmin_users["English"]["ESTADO"] = "";
	$placeHoldersadmin_users["English"]["ESTADO"] = "";
	$fieldLabelsadmin_users["English"]["FECHADEREGISTRO"] = "Fecha Registro";
	$fieldToolTipsadmin_users["English"]["FECHADEREGISTRO"] = "";
	$placeHoldersadmin_users["English"]["FECHADEREGISTRO"] = "";
	$fieldLabelsadmin_users["English"]["CEDULA"] = "Cedula";
	$fieldToolTipsadmin_users["English"]["CEDULA"] = "";
	$placeHoldersadmin_users["English"]["CEDULA"] = "";
	$fieldLabelsadmin_users["English"]["PASS"] = "Contraseña";
	$fieldToolTipsadmin_users["English"]["PASS"] = "";
	$placeHoldersadmin_users["English"]["PASS"] = "";
	$fieldLabelsadmin_users["English"]["FOTOPERFIL"] = "Foto de Perfil";
	$fieldToolTipsadmin_users["English"]["FOTOPERFIL"] = "";
	$placeHoldersadmin_users["English"]["FOTOPERFIL"] = "";
	$fieldLabelsadmin_users["English"]["TOKEN"] = "TOKEN";
	$fieldToolTipsadmin_users["English"]["TOKEN"] = "";
	$placeHoldersadmin_users["English"]["TOKEN"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$placeHoldersadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	$fieldLabelsadmin_users[""]["CEDULA"] = "CEDULA";
	$fieldToolTipsadmin_users[""]["CEDULA"] = "";
	$placeHoldersadmin_users[""]["CEDULA"] = "";
	$fieldLabelsadmin_users[""]["PASS"] = "PASS";
	$fieldToolTipsadmin_users[""]["PASS"] = "";
	$placeHoldersadmin_users[""]["PASS"] = "";
	$fieldLabelsadmin_users[""]["FOTOPERFIL"] = "FOTOPERFIL";
	$fieldToolTipsadmin_users[""]["FOTOPERFIL"] = "";
	$placeHoldersadmin_users[""]["FOTOPERFIL"] = "";
	$fieldLabelsadmin_users[""]["TOKEN"] = "TOKEN";
	$fieldToolTipsadmin_users[""]["TOKEN"] = "";
	$placeHoldersadmin_users[""]["TOKEN"] = "";
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "docente";

	



$tdataadmin_users[".showAddInPopup"] = true;

$tdataadmin_users[".showEditInPopup"] = true;

$tdataadmin_users[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap_2col";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
			;
$popupPagesLayoutNames["view"] = "edit_bootstrap_4col";
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();
	
$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;

$tdataadmin_users[".edit"] = true;
$tdataadmin_users[".afterEditAction"] = 1;
$tdataadmin_users[".closePopupAfterEdit"] = 1;
$tdataadmin_users[".afterEditActionDetTable"] = "";

$tdataadmin_users[".add"] = true;
$tdataadmin_users[".afterAddAction"] = 1;
$tdataadmin_users[".closePopupAfterAdd"] = 1;
$tdataadmin_users[".afterAddActionDetTable"] = "";

$tdataadmin_users[".list"] = true;



$tdataadmin_users[".reorderRecordsByHeader"] = true;


$tdataadmin_users[".exportFormatting"] = 2;
$tdataadmin_users[".exportDelimiter"] = ",";
		


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;





$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;



$tdataadmin_users[".badgeColor"] = "5F9EA0";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "ID_DOCENTE";
	$tdataadmin_users[".allSearchFields"][] = "NOMBRES";
	$tdataadmin_users[".allSearchFields"][] = "CELULAR";
	$tdataadmin_users[".allSearchFields"][] = "CORREO";
	$tdataadmin_users[".allSearchFields"][] = "ASIGNATURA";
	$tdataadmin_users[".allSearchFields"][] = "PROFESION";
	$tdataadmin_users[".allSearchFields"][] = "FECHACUMPLEAÑOS";
	$tdataadmin_users[".allSearchFields"][] = "ESTADO";
	$tdataadmin_users[".allSearchFields"][] = "FECHADEREGISTRO";
	$tdataadmin_users[".allSearchFields"][] = "CEDULA";
	$tdataadmin_users[".allSearchFields"][] = "PASS";
	$tdataadmin_users[".allSearchFields"][] = "FOTOPERFIL";
	$tdataadmin_users[".allSearchFields"][] = "TOKEN";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "ID_DOCENTE";
$tdataadmin_users[".googleLikeFields"][] = "NOMBRES";
$tdataadmin_users[".googleLikeFields"][] = "CELULAR";
$tdataadmin_users[".googleLikeFields"][] = "CORREO";
$tdataadmin_users[".googleLikeFields"][] = "ASIGNATURA";
$tdataadmin_users[".googleLikeFields"][] = "PROFESION";
$tdataadmin_users[".googleLikeFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".googleLikeFields"][] = "ESTADO";
$tdataadmin_users[".googleLikeFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".googleLikeFields"][] = "CEDULA";
$tdataadmin_users[".googleLikeFields"][] = "PASS";
$tdataadmin_users[".googleLikeFields"][] = "FOTOPERFIL";
$tdataadmin_users[".googleLikeFields"][] = "TOKEN";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "ID_DOCENTE";
$tdataadmin_users[".advSearchFields"][] = "NOMBRES";
$tdataadmin_users[".advSearchFields"][] = "CELULAR";
$tdataadmin_users[".advSearchFields"][] = "CORREO";
$tdataadmin_users[".advSearchFields"][] = "ASIGNATURA";
$tdataadmin_users[".advSearchFields"][] = "PROFESION";
$tdataadmin_users[".advSearchFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".advSearchFields"][] = "ESTADO";
$tdataadmin_users[".advSearchFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".advSearchFields"][] = "CEDULA";
$tdataadmin_users[".advSearchFields"][] = "PASS";
$tdataadmin_users[".advSearchFields"][] = "FOTOPERFIL";
$tdataadmin_users[".advSearchFields"][] = "TOKEN";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$tdataadmin_users[".sqlFrom"] = "FROM docente";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "ID_DOCENTE";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "FOTOPERFIL";
$tdataadmin_users[".listFields"][] = "NOMBRES";
$tdataadmin_users[".listFields"][] = "CORREO";
$tdataadmin_users[".listFields"][] = "PROFESION";
$tdataadmin_users[".listFields"][] = "ESTADO";
$tdataadmin_users[".listFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".listFields"][] = "CEDULA";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();
$tdataadmin_users[".viewFields"][] = "TOKEN";
$tdataadmin_users[".viewFields"][] = "FOTOPERFIL";
$tdataadmin_users[".viewFields"][] = "CEDULA";
$tdataadmin_users[".viewFields"][] = "NOMBRES";
$tdataadmin_users[".viewFields"][] = "CELULAR";
$tdataadmin_users[".viewFields"][] = "ASIGNATURA";
$tdataadmin_users[".viewFields"][] = "CORREO";
$tdataadmin_users[".viewFields"][] = "PROFESION";
$tdataadmin_users[".viewFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".viewFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".viewFields"][] = "ESTADO";

$tdataadmin_users[".addFields"] = array();
$tdataadmin_users[".addFields"][] = "TOKEN";
$tdataadmin_users[".addFields"][] = "NOMBRES";
$tdataadmin_users[".addFields"][] = "CELULAR";
$tdataadmin_users[".addFields"][] = "CORREO";
$tdataadmin_users[".addFields"][] = "ASIGNATURA";
$tdataadmin_users[".addFields"][] = "PROFESION";
$tdataadmin_users[".addFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".addFields"][] = "ESTADO";
$tdataadmin_users[".addFields"][] = "CEDULA";
$tdataadmin_users[".addFields"][] = "FOTOPERFIL";

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "ID_DOCENTE";
$tdataadmin_users[".masterListFields"][] = "NOMBRES";
$tdataadmin_users[".masterListFields"][] = "CELULAR";
$tdataadmin_users[".masterListFields"][] = "CORREO";
$tdataadmin_users[".masterListFields"][] = "ASIGNATURA";
$tdataadmin_users[".masterListFields"][] = "PROFESION";
$tdataadmin_users[".masterListFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".masterListFields"][] = "ESTADO";
$tdataadmin_users[".masterListFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".masterListFields"][] = "CEDULA";
$tdataadmin_users[".masterListFields"][] = "PASS";
$tdataadmin_users[".masterListFields"][] = "FOTOPERFIL";
$tdataadmin_users[".masterListFields"][] = "TOKEN";

$tdataadmin_users[".inlineAddFields"] = array();

$tdataadmin_users[".editFields"] = array();
$tdataadmin_users[".editFields"][] = "TOKEN";
$tdataadmin_users[".editFields"][] = "NOMBRES";
$tdataadmin_users[".editFields"][] = "CELULAR";
$tdataadmin_users[".editFields"][] = "CORREO";
$tdataadmin_users[".editFields"][] = "ASIGNATURA";
$tdataadmin_users[".editFields"][] = "PROFESION";
$tdataadmin_users[".editFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".editFields"][] = "ESTADO";
$tdataadmin_users[".editFields"][] = "CEDULA";
$tdataadmin_users[".editFields"][] = "PASS";
$tdataadmin_users[".editFields"][] = "FOTOPERFIL";

$tdataadmin_users[".inlineEditFields"] = array();

$tdataadmin_users[".updateSelectedFields"] = array();
$tdataadmin_users[".updateSelectedFields"][] = "TOKEN";
$tdataadmin_users[".updateSelectedFields"][] = "NOMBRES";
$tdataadmin_users[".updateSelectedFields"][] = "CELULAR";
$tdataadmin_users[".updateSelectedFields"][] = "CORREO";
$tdataadmin_users[".updateSelectedFields"][] = "ASIGNATURA";
$tdataadmin_users[".updateSelectedFields"][] = "PROFESION";
$tdataadmin_users[".updateSelectedFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".updateSelectedFields"][] = "ESTADO";
$tdataadmin_users[".updateSelectedFields"][] = "CEDULA";
$tdataadmin_users[".updateSelectedFields"][] = "PASS";
$tdataadmin_users[".updateSelectedFields"][] = "FOTOPERFIL";


$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "NOMBRES";
$tdataadmin_users[".exportFields"][] = "CELULAR";
$tdataadmin_users[".exportFields"][] = "CORREO";
$tdataadmin_users[".exportFields"][] = "ASIGNATURA";
$tdataadmin_users[".exportFields"][] = "PROFESION";
$tdataadmin_users[".exportFields"][] = "FECHACUMPLEAÑOS";
$tdataadmin_users[".exportFields"][] = "ESTADO";
$tdataadmin_users[".exportFields"][] = "FECHADEREGISTRO";
$tdataadmin_users[".exportFields"][] = "CEDULA";
$tdataadmin_users[".exportFields"][] = "FOTOPERFIL";
$tdataadmin_users[".exportFields"][] = "TOKEN";

$tdataadmin_users[".importFields"] = array();

$tdataadmin_users[".printFields"] = array();


//	ID_DOCENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_DOCENTE";
	$fdata["GoodName"] = "ID_DOCENTE";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","ID_DOCENTE");
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




	$tdataadmin_users["ID_DOCENTE"] = $fdata;
//	NOMBRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRES";
	$fdata["GoodName"] = "NOMBRES";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","NOMBRES");
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




	$tdataadmin_users["NOMBRES"] = $fdata;
//	CELULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CELULAR";
	$fdata["GoodName"] = "CELULAR";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","CELULAR");
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




	$tdataadmin_users["CELULAR"] = $fdata;
//	CORREO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CORREO";
	$fdata["GoodName"] = "CORREO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","CORREO");
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




	$tdataadmin_users["CORREO"] = $fdata;
//	ASIGNATURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASIGNATURA";
	$fdata["GoodName"] = "ASIGNATURA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","ASIGNATURA");
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




	$tdataadmin_users["ASIGNATURA"] = $fdata;
//	PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROFESION";
	$fdata["GoodName"] = "PROFESION";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","PROFESION");
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




	$tdataadmin_users["PROFESION"] = $fdata;
//	FECHACUMPLEAÑOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FECHACUMPLEAÑOS";
	$fdata["GoodName"] = "FECHACUMPLEA_OS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","FECHACUMPLEA_OS");
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




	$tdataadmin_users["FECHACUMPLEAÑOS"] = $fdata;
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","ESTADO");
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




	$tdataadmin_users["ESTADO"] = $fdata;
//	FECHADEREGISTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FECHADEREGISTRO";
	$fdata["GoodName"] = "FECHADEREGISTRO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","FECHADEREGISTRO");
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




	$tdataadmin_users["FECHADEREGISTRO"] = $fdata;
//	CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CEDULA";
	$fdata["GoodName"] = "CEDULA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","CEDULA");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["CEDULA"] = $fdata;
//	PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PASS";
	$fdata["GoodName"] = "PASS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","PASS");
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




	$tdataadmin_users["PASS"] = $fdata;
//	FOTOPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FOTOPERFIL";
	$fdata["GoodName"] = "FOTOPERFIL";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","FOTOPERFIL");
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




	$tdataadmin_users["FOTOPERFIL"] = $fdata;
//	TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TOKEN";
	$fdata["GoodName"] = "TOKEN";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("admin_users","TOKEN");
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




	$tdataadmin_users["TOKEN"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$proto3["m_strFrom"] = "FROM docente";
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
	"m_strName" => "ID_DOCENTE",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto9["m_sql"] = "ID_DOCENTE";
$proto9["m_srcTableName"] = "admin_users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRES",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto11["m_sql"] = "NOMBRES";
$proto11["m_srcTableName"] = "admin_users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CELULAR",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto13["m_sql"] = "CELULAR";
$proto13["m_srcTableName"] = "admin_users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CORREO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto15["m_sql"] = "CORREO";
$proto15["m_srcTableName"] = "admin_users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ASIGNATURA",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto17["m_sql"] = "ASIGNATURA";
$proto17["m_srcTableName"] = "admin_users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "PROFESION",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto19["m_sql"] = "PROFESION";
$proto19["m_srcTableName"] = "admin_users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHACUMPLEAÑOS",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto21["m_sql"] = "`FECHACUMPLEAÑOS`";
$proto21["m_srcTableName"] = "admin_users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto23["m_sql"] = "ESTADO";
$proto23["m_srcTableName"] = "admin_users";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHADEREGISTRO",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto25["m_sql"] = "FECHADEREGISTRO";
$proto25["m_srcTableName"] = "admin_users";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CEDULA",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto27["m_sql"] = "CEDULA";
$proto27["m_srcTableName"] = "admin_users";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "PASS",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto29["m_sql"] = "PASS";
$proto29["m_srcTableName"] = "admin_users";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTOPERFIL",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto31["m_sql"] = "FOTOPERFIL";
$proto31["m_srcTableName"] = "admin_users";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "TOKEN",
	"m_strTable" => "docente",
	"m_srcTableName" => "admin_users"
));

$proto33["m_sql"] = "TOKEN";
$proto33["m_srcTableName"] = "admin_users";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "docente";
$proto36["m_srcTableName"] = "admin_users";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "ID_DOCENTE";
$proto36["m_columns"][] = "NOMBRES";
$proto36["m_columns"][] = "CELULAR";
$proto36["m_columns"][] = "CORREO";
$proto36["m_columns"][] = "ASIGNATURA";
$proto36["m_columns"][] = "PROFESION";
$proto36["m_columns"][] = "FECHACUMPLEAÑOS";
$proto36["m_columns"][] = "ESTADO";
$proto36["m_columns"][] = "FECHADEREGISTRO";
$proto36["m_columns"][] = "CEDULA";
$proto36["m_columns"][] = "PASS";
$proto36["m_columns"][] = "FOTOPERFIL";
$proto36["m_columns"][] = "TOKEN";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "docente";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "admin_users";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																																							

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
$tdataadmin_users[".hasEvents"] = true;

?>