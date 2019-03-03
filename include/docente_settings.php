<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadocente = array();
	$tdatadocente[".truncateText"] = true;
	$tdatadocente[".NumberOfChars"] = 80;
	$tdatadocente[".ShortName"] = "docente";
	$tdatadocente[".OwnerID"] = "";
	$tdatadocente[".OriginalTable"] = "docente";

//	field labels
$fieldLabelsdocente = array();
$fieldToolTipsdocente = array();
$pageTitlesdocente = array();
$placeHoldersdocente = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdocente["English"] = array();
	$fieldToolTipsdocente["English"] = array();
	$placeHoldersdocente["English"] = array();
	$pageTitlesdocente["English"] = array();
	$fieldLabelsdocente["English"]["ID_DOCENTE"] = "ID DOCENTE";
	$fieldToolTipsdocente["English"]["ID_DOCENTE"] = "";
	$placeHoldersdocente["English"]["ID_DOCENTE"] = "";
	$fieldLabelsdocente["English"]["NOMBRES"] = "Nombre Completo";
	$fieldToolTipsdocente["English"]["NOMBRES"] = "";
	$placeHoldersdocente["English"]["NOMBRES"] = "";
	$fieldLabelsdocente["English"]["CELULAR"] = "Celular";
	$fieldToolTipsdocente["English"]["CELULAR"] = "";
	$placeHoldersdocente["English"]["CELULAR"] = "";
	$fieldLabelsdocente["English"]["CORREO"] = "Correo Electronico";
	$fieldToolTipsdocente["English"]["CORREO"] = "";
	$placeHoldersdocente["English"]["CORREO"] = "";
	$fieldLabelsdocente["English"]["ASIGNATURA"] = "Asignatura";
	$fieldToolTipsdocente["English"]["ASIGNATURA"] = "";
	$placeHoldersdocente["English"]["ASIGNATURA"] = "";
	$fieldLabelsdocente["English"]["PROFESION"] = "Profesion";
	$fieldToolTipsdocente["English"]["PROFESION"] = "";
	$placeHoldersdocente["English"]["PROFESION"] = "";
	$fieldLabelsdocente["English"]["FECHACUMPLEA_OS"] = "Fecha Cumpleaños";
	$fieldToolTipsdocente["English"]["FECHACUMPLEA_OS"] = "";
	$placeHoldersdocente["English"]["FECHACUMPLEA_OS"] = "";
	$fieldLabelsdocente["English"]["ESTADO"] = "Estado";
	$fieldToolTipsdocente["English"]["ESTADO"] = "";
	$placeHoldersdocente["English"]["ESTADO"] = "";
	$fieldLabelsdocente["English"]["FECHADEREGISTRO"] = "Fecha Registro";
	$fieldToolTipsdocente["English"]["FECHADEREGISTRO"] = "";
	$placeHoldersdocente["English"]["FECHADEREGISTRO"] = "";
	$fieldLabelsdocente["English"]["CEDULA"] = "Cedula";
	$fieldToolTipsdocente["English"]["CEDULA"] = "";
	$placeHoldersdocente["English"]["CEDULA"] = "";
	$fieldLabelsdocente["English"]["PASS"] = "Contraseña";
	$fieldToolTipsdocente["English"]["PASS"] = "";
	$placeHoldersdocente["English"]["PASS"] = "";
	$fieldLabelsdocente["English"]["FOTOPERFIL"] = "Foto de Perfil";
	$fieldToolTipsdocente["English"]["FOTOPERFIL"] = "";
	$placeHoldersdocente["English"]["FOTOPERFIL"] = "";
	$fieldLabelsdocente["English"]["TOKEN"] = "TOKEN";
	$fieldToolTipsdocente["English"]["TOKEN"] = "";
	$placeHoldersdocente["English"]["TOKEN"] = "";
	$pageTitlesdocente["English"]["add"] = "Docente, Agregar Nuevo";
	$pageTitlesdocente["English"]["edit"] = "Docente, Editar [{%NOMBRES}]";
	$pageTitlesdocente["English"]["view"] = "Docente [{%NOMBRES}]";
	if (count($fieldToolTipsdocente["English"]))
		$tdatadocente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdocente[""] = array();
	$fieldToolTipsdocente[""] = array();
	$placeHoldersdocente[""] = array();
	$pageTitlesdocente[""] = array();
	$fieldLabelsdocente[""]["CEDULA"] = "CEDULA";
	$fieldToolTipsdocente[""]["CEDULA"] = "";
	$placeHoldersdocente[""]["CEDULA"] = "";
	$fieldLabelsdocente[""]["PASS"] = "PASS";
	$fieldToolTipsdocente[""]["PASS"] = "";
	$placeHoldersdocente[""]["PASS"] = "";
	$fieldLabelsdocente[""]["FOTOPERFIL"] = "FOTOPERFIL";
	$fieldToolTipsdocente[""]["FOTOPERFIL"] = "";
	$placeHoldersdocente[""]["FOTOPERFIL"] = "";
	$fieldLabelsdocente[""]["TOKEN"] = "TOKEN";
	$fieldToolTipsdocente[""]["TOKEN"] = "";
	$placeHoldersdocente[""]["TOKEN"] = "";
	if (count($fieldToolTipsdocente[""]))
		$tdatadocente[".isUseToolTips"] = true;
}


	$tdatadocente[".NCSearch"] = true;



$tdatadocente[".shortTableName"] = "docente";
$tdatadocente[".nSecOptions"] = 0;
$tdatadocente[".recsPerRowPrint"] = 1;
$tdatadocente[".mainTableOwnerID"] = "";
$tdatadocente[".moveNext"] = 1;
$tdatadocente[".entityType"] = 0;

$tdatadocente[".strOriginalTableName"] = "docente";

	



$tdatadocente[".showAddInPopup"] = true;

$tdatadocente[".showEditInPopup"] = true;

$tdatadocente[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add_bootstrap_2col";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatadocente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadocente[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatadocente[".fieldsForRegister"] = array();
$tdatadocente[".fieldsForRegister"][] = "CEDULA";
			$tdatadocente[".fieldsForRegister"][] = "PASS";
			$tdatadocente[".fieldsForRegister"][] = "NOMBRES";
			$tdatadocente[".fieldsForRegister"][] = "CORREO";
/*
$tdatadocente[".PasswordField"] = "PASS";
$tdatadocente[".UserNameField"] = "CEDULA";
*/
//End register settings

$tdatadocente[".listAjax"] = false;

	$tdatadocente[".audit"] = false;

	$tdatadocente[".locking"] = false;

$tdatadocente[".edit"] = true;
$tdatadocente[".afterEditAction"] = 1;
$tdatadocente[".closePopupAfterEdit"] = 1;
$tdatadocente[".afterEditActionDetTable"] = "";

$tdatadocente[".add"] = true;
$tdatadocente[".afterAddAction"] = 1;
$tdatadocente[".closePopupAfterAdd"] = 1;
$tdatadocente[".afterAddActionDetTable"] = "";

$tdatadocente[".list"] = true;



$tdatadocente[".reorderRecordsByHeader"] = true;


$tdatadocente[".exportFormatting"] = 2;
$tdatadocente[".exportDelimiter"] = ",";
		
$tdatadocente[".view"] = true;


$tdatadocente[".exportTo"] = true;


$tdatadocente[".delete"] = true;

$tdatadocente[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatadocente[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatadocente[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatadocente[".searchSaving"] = false;
//

$tdatadocente[".showSearchPanel"] = true;
		$tdatadocente[".flexibleSearch"] = true;

$tdatadocente[".isUseAjaxSuggest"] = true;

$tdatadocente[".rowHighlite"] = true;





$tdatadocente[".ajaxCodeSnippetAdded"] = false;

$tdatadocente[".buttonsAdded"] = false;

$tdatadocente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadocente[".isUseTimeForSearch"] = false;



$tdatadocente[".badgeColor"] = "5F9EA0";


$tdatadocente[".allSearchFields"] = array();
$tdatadocente[".filterFields"] = array();
$tdatadocente[".requiredSearchFields"] = array();

$tdatadocente[".allSearchFields"][] = "ID_DOCENTE";
	$tdatadocente[".allSearchFields"][] = "NOMBRES";
	$tdatadocente[".allSearchFields"][] = "CELULAR";
	$tdatadocente[".allSearchFields"][] = "CORREO";
	$tdatadocente[".allSearchFields"][] = "ASIGNATURA";
	$tdatadocente[".allSearchFields"][] = "PROFESION";
	$tdatadocente[".allSearchFields"][] = "FECHACUMPLEAÑOS";
	$tdatadocente[".allSearchFields"][] = "ESTADO";
	$tdatadocente[".allSearchFields"][] = "FECHADEREGISTRO";
	$tdatadocente[".allSearchFields"][] = "CEDULA";
	$tdatadocente[".allSearchFields"][] = "PASS";
	$tdatadocente[".allSearchFields"][] = "FOTOPERFIL";
	$tdatadocente[".allSearchFields"][] = "TOKEN";
	

$tdatadocente[".googleLikeFields"] = array();
$tdatadocente[".googleLikeFields"][] = "ID_DOCENTE";
$tdatadocente[".googleLikeFields"][] = "NOMBRES";
$tdatadocente[".googleLikeFields"][] = "CELULAR";
$tdatadocente[".googleLikeFields"][] = "CORREO";
$tdatadocente[".googleLikeFields"][] = "ASIGNATURA";
$tdatadocente[".googleLikeFields"][] = "PROFESION";
$tdatadocente[".googleLikeFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".googleLikeFields"][] = "ESTADO";
$tdatadocente[".googleLikeFields"][] = "FECHADEREGISTRO";
$tdatadocente[".googleLikeFields"][] = "CEDULA";
$tdatadocente[".googleLikeFields"][] = "PASS";
$tdatadocente[".googleLikeFields"][] = "FOTOPERFIL";
$tdatadocente[".googleLikeFields"][] = "TOKEN";


$tdatadocente[".advSearchFields"] = array();
$tdatadocente[".advSearchFields"][] = "ID_DOCENTE";
$tdatadocente[".advSearchFields"][] = "NOMBRES";
$tdatadocente[".advSearchFields"][] = "CELULAR";
$tdatadocente[".advSearchFields"][] = "CORREO";
$tdatadocente[".advSearchFields"][] = "ASIGNATURA";
$tdatadocente[".advSearchFields"][] = "PROFESION";
$tdatadocente[".advSearchFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".advSearchFields"][] = "ESTADO";
$tdatadocente[".advSearchFields"][] = "FECHADEREGISTRO";
$tdatadocente[".advSearchFields"][] = "CEDULA";
$tdatadocente[".advSearchFields"][] = "PASS";
$tdatadocente[".advSearchFields"][] = "FOTOPERFIL";
$tdatadocente[".advSearchFields"][] = "TOKEN";

$tdatadocente[".tableType"] = "list";

$tdatadocente[".printerPageOrientation"] = 0;
$tdatadocente[".nPrinterPageScale"] = 100;

$tdatadocente[".nPrinterSplitRecords"] = 40;

$tdatadocente[".nPrinterPDFSplitRecords"] = 40;



$tdatadocente[".geocodingEnabled"] = false;





$tdatadocente[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatadocente[".pageSize"] = 20;

$tdatadocente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadocente[".strOrderBy"] = $tstrOrderBy;

$tdatadocente[".orderindexes"] = array();

$tdatadocente[".sqlHead"] = "SELECT ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$tdatadocente[".sqlFrom"] = "FROM docente";
$tdatadocente[".sqlWhereExpr"] = "";
$tdatadocente[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadocente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadocente[".arrGroupsPerPage"] = $arrGPP;

$tdatadocente[".highlightSearchResults"] = true;

$tableKeysdocente = array();
$tableKeysdocente[] = "ID_DOCENTE";
$tdatadocente[".Keys"] = $tableKeysdocente;

$tdatadocente[".listFields"] = array();
$tdatadocente[".listFields"][] = "FOTOPERFIL";
$tdatadocente[".listFields"][] = "NOMBRES";
$tdatadocente[".listFields"][] = "CORREO";
$tdatadocente[".listFields"][] = "PROFESION";
$tdatadocente[".listFields"][] = "ESTADO";
$tdatadocente[".listFields"][] = "FECHADEREGISTRO";
$tdatadocente[".listFields"][] = "CEDULA";

$tdatadocente[".hideMobileList"] = array();


$tdatadocente[".viewFields"] = array();
$tdatadocente[".viewFields"][] = "TOKEN";
$tdatadocente[".viewFields"][] = "FOTOPERFIL";
$tdatadocente[".viewFields"][] = "CEDULA";
$tdatadocente[".viewFields"][] = "NOMBRES";
$tdatadocente[".viewFields"][] = "CELULAR";
$tdatadocente[".viewFields"][] = "ASIGNATURA";
$tdatadocente[".viewFields"][] = "CORREO";
$tdatadocente[".viewFields"][] = "PROFESION";
$tdatadocente[".viewFields"][] = "FECHADEREGISTRO";
$tdatadocente[".viewFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".viewFields"][] = "ESTADO";

$tdatadocente[".addFields"] = array();
$tdatadocente[".addFields"][] = "TOKEN";
$tdatadocente[".addFields"][] = "NOMBRES";
$tdatadocente[".addFields"][] = "CELULAR";
$tdatadocente[".addFields"][] = "CORREO";
$tdatadocente[".addFields"][] = "ASIGNATURA";
$tdatadocente[".addFields"][] = "PROFESION";
$tdatadocente[".addFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".addFields"][] = "ESTADO";
$tdatadocente[".addFields"][] = "CEDULA";
$tdatadocente[".addFields"][] = "FOTOPERFIL";

$tdatadocente[".masterListFields"] = array();
$tdatadocente[".masterListFields"][] = "ID_DOCENTE";
$tdatadocente[".masterListFields"][] = "NOMBRES";
$tdatadocente[".masterListFields"][] = "CELULAR";
$tdatadocente[".masterListFields"][] = "CORREO";
$tdatadocente[".masterListFields"][] = "ASIGNATURA";
$tdatadocente[".masterListFields"][] = "PROFESION";
$tdatadocente[".masterListFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".masterListFields"][] = "ESTADO";
$tdatadocente[".masterListFields"][] = "FECHADEREGISTRO";
$tdatadocente[".masterListFields"][] = "CEDULA";
$tdatadocente[".masterListFields"][] = "PASS";
$tdatadocente[".masterListFields"][] = "FOTOPERFIL";
$tdatadocente[".masterListFields"][] = "TOKEN";

$tdatadocente[".inlineAddFields"] = array();

$tdatadocente[".editFields"] = array();
$tdatadocente[".editFields"][] = "TOKEN";
$tdatadocente[".editFields"][] = "NOMBRES";
$tdatadocente[".editFields"][] = "CELULAR";
$tdatadocente[".editFields"][] = "CORREO";
$tdatadocente[".editFields"][] = "ASIGNATURA";
$tdatadocente[".editFields"][] = "PROFESION";
$tdatadocente[".editFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".editFields"][] = "ESTADO";
$tdatadocente[".editFields"][] = "CEDULA";
$tdatadocente[".editFields"][] = "PASS";
$tdatadocente[".editFields"][] = "FOTOPERFIL";

$tdatadocente[".inlineEditFields"] = array();

$tdatadocente[".updateSelectedFields"] = array();
$tdatadocente[".updateSelectedFields"][] = "TOKEN";
$tdatadocente[".updateSelectedFields"][] = "NOMBRES";
$tdatadocente[".updateSelectedFields"][] = "CELULAR";
$tdatadocente[".updateSelectedFields"][] = "CORREO";
$tdatadocente[".updateSelectedFields"][] = "ASIGNATURA";
$tdatadocente[".updateSelectedFields"][] = "PROFESION";
$tdatadocente[".updateSelectedFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".updateSelectedFields"][] = "ESTADO";
$tdatadocente[".updateSelectedFields"][] = "CEDULA";
$tdatadocente[".updateSelectedFields"][] = "PASS";
$tdatadocente[".updateSelectedFields"][] = "FOTOPERFIL";


$tdatadocente[".exportFields"] = array();
$tdatadocente[".exportFields"][] = "NOMBRES";
$tdatadocente[".exportFields"][] = "CELULAR";
$tdatadocente[".exportFields"][] = "CORREO";
$tdatadocente[".exportFields"][] = "ASIGNATURA";
$tdatadocente[".exportFields"][] = "PROFESION";
$tdatadocente[".exportFields"][] = "FECHACUMPLEAÑOS";
$tdatadocente[".exportFields"][] = "ESTADO";
$tdatadocente[".exportFields"][] = "FECHADEREGISTRO";
$tdatadocente[".exportFields"][] = "CEDULA";
$tdatadocente[".exportFields"][] = "FOTOPERFIL";
$tdatadocente[".exportFields"][] = "TOKEN";

$tdatadocente[".importFields"] = array();

$tdatadocente[".printFields"] = array();


//	ID_DOCENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_DOCENTE";
	$fdata["GoodName"] = "ID_DOCENTE";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","ID_DOCENTE");
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




	$tdatadocente["ID_DOCENTE"] = $fdata;
//	NOMBRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRES";
	$fdata["GoodName"] = "NOMBRES";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","NOMBRES");
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




	$tdatadocente["NOMBRES"] = $fdata;
//	CELULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CELULAR";
	$fdata["GoodName"] = "CELULAR";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","CELULAR");
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




	$tdatadocente["CELULAR"] = $fdata;
//	CORREO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CORREO";
	$fdata["GoodName"] = "CORREO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","CORREO");
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




	$tdatadocente["CORREO"] = $fdata;
//	ASIGNATURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASIGNATURA";
	$fdata["GoodName"] = "ASIGNATURA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","ASIGNATURA");
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




	$tdatadocente["ASIGNATURA"] = $fdata;
//	PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROFESION";
	$fdata["GoodName"] = "PROFESION";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","PROFESION");
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




	$tdatadocente["PROFESION"] = $fdata;
//	FECHACUMPLEAÑOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FECHACUMPLEAÑOS";
	$fdata["GoodName"] = "FECHACUMPLEA_OS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","FECHACUMPLEA_OS");
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




	$tdatadocente["FECHACUMPLEAÑOS"] = $fdata;
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","ESTADO");
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




	$tdatadocente["ESTADO"] = $fdata;
//	FECHADEREGISTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FECHADEREGISTRO";
	$fdata["GoodName"] = "FECHADEREGISTRO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","FECHADEREGISTRO");
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




	$tdatadocente["FECHADEREGISTRO"] = $fdata;
//	CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CEDULA";
	$fdata["GoodName"] = "CEDULA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","CEDULA");
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
							
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadocente["CEDULA"] = $fdata;
//	PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PASS";
	$fdata["GoodName"] = "PASS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","PASS");
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
	
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatadocente["PASS"] = $fdata;
//	FOTOPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FOTOPERFIL";
	$fdata["GoodName"] = "FOTOPERFIL";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","FOTOPERFIL");
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




	$tdatadocente["FOTOPERFIL"] = $fdata;
//	TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TOKEN";
	$fdata["GoodName"] = "TOKEN";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("docente","TOKEN");
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




	$tdatadocente["TOKEN"] = $fdata;


$tables_data["docente"]=&$tdatadocente;
$field_labels["docente"] = &$fieldLabelsdocente;
$fieldToolTips["docente"] = &$fieldToolTipsdocente;
$placeHolders["docente"] = &$placeHoldersdocente;
$page_titles["docente"] = &$pageTitlesdocente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["docente"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["docente"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_docente()
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
	"m_srcTableName" => "docente"
));

$proto9["m_sql"] = "ID_DOCENTE";
$proto9["m_srcTableName"] = "docente";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRES",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto11["m_sql"] = "NOMBRES";
$proto11["m_srcTableName"] = "docente";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CELULAR",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto13["m_sql"] = "CELULAR";
$proto13["m_srcTableName"] = "docente";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CORREO",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto15["m_sql"] = "CORREO";
$proto15["m_srcTableName"] = "docente";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ASIGNATURA",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto17["m_sql"] = "ASIGNATURA";
$proto17["m_srcTableName"] = "docente";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "PROFESION",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto19["m_sql"] = "PROFESION";
$proto19["m_srcTableName"] = "docente";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHACUMPLEAÑOS",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto21["m_sql"] = "`FECHACUMPLEAÑOS`";
$proto21["m_srcTableName"] = "docente";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto23["m_sql"] = "ESTADO";
$proto23["m_srcTableName"] = "docente";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHADEREGISTRO",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto25["m_sql"] = "FECHADEREGISTRO";
$proto25["m_srcTableName"] = "docente";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CEDULA",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto27["m_sql"] = "CEDULA";
$proto27["m_srcTableName"] = "docente";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "PASS",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto29["m_sql"] = "PASS";
$proto29["m_srcTableName"] = "docente";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTOPERFIL",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto31["m_sql"] = "FOTOPERFIL";
$proto31["m_srcTableName"] = "docente";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "TOKEN",
	"m_strTable" => "docente",
	"m_srcTableName" => "docente"
));

$proto33["m_sql"] = "TOKEN";
$proto33["m_srcTableName"] = "docente";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "docente";
$proto36["m_srcTableName"] = "docente";
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
$proto35["m_srcTableName"] = "docente";
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
$proto3["m_srcTableName"]="docente";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_docente = createSqlQuery_docente();


	
		;

													

$tdatadocente[".sqlquery"] = $queryData_docente;

include_once(getabspath("include/docente_events.php"));
$tableEvents["docente"] = new eventclass_docente;
$tdatadocente[".hasEvents"] = true;

?>