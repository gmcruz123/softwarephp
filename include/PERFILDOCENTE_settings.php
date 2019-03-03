<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPERFILDOCENTE = array();
	$tdataPERFILDOCENTE[".truncateText"] = true;
	$tdataPERFILDOCENTE[".NumberOfChars"] = 80;
	$tdataPERFILDOCENTE[".ShortName"] = "PERFILDOCENTE";
	$tdataPERFILDOCENTE[".OwnerID"] = "";
	$tdataPERFILDOCENTE[".OriginalTable"] = "docente";

//	field labels
$fieldLabelsPERFILDOCENTE = array();
$fieldToolTipsPERFILDOCENTE = array();
$pageTitlesPERFILDOCENTE = array();
$placeHoldersPERFILDOCENTE = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPERFILDOCENTE["English"] = array();
	$fieldToolTipsPERFILDOCENTE["English"] = array();
	$placeHoldersPERFILDOCENTE["English"] = array();
	$pageTitlesPERFILDOCENTE["English"] = array();
	$fieldLabelsPERFILDOCENTE["English"]["ID_DOCENTE"] = "ID DOCENTE";
	$fieldToolTipsPERFILDOCENTE["English"]["ID_DOCENTE"] = "";
	$placeHoldersPERFILDOCENTE["English"]["ID_DOCENTE"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["NOMBRES"] = "Nombre Completo";
	$fieldToolTipsPERFILDOCENTE["English"]["NOMBRES"] = "";
	$placeHoldersPERFILDOCENTE["English"]["NOMBRES"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["CELULAR"] = "Celular";
	$fieldToolTipsPERFILDOCENTE["English"]["CELULAR"] = "";
	$placeHoldersPERFILDOCENTE["English"]["CELULAR"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["CORREO"] = "Correo Electronico";
	$fieldToolTipsPERFILDOCENTE["English"]["CORREO"] = "";
	$placeHoldersPERFILDOCENTE["English"]["CORREO"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["ASIGNATURA"] = "Asignatura";
	$fieldToolTipsPERFILDOCENTE["English"]["ASIGNATURA"] = "";
	$placeHoldersPERFILDOCENTE["English"]["ASIGNATURA"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["PROFESION"] = "Profesion";
	$fieldToolTipsPERFILDOCENTE["English"]["PROFESION"] = "";
	$placeHoldersPERFILDOCENTE["English"]["PROFESION"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["FECHACUMPLEA_OS"] = "Fecha Cumpleaños";
	$fieldToolTipsPERFILDOCENTE["English"]["FECHACUMPLEA_OS"] = "";
	$placeHoldersPERFILDOCENTE["English"]["FECHACUMPLEA_OS"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["ESTADO"] = "Estado";
	$fieldToolTipsPERFILDOCENTE["English"]["ESTADO"] = "";
	$placeHoldersPERFILDOCENTE["English"]["ESTADO"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["FECHADEREGISTRO"] = "Fecha Registro";
	$fieldToolTipsPERFILDOCENTE["English"]["FECHADEREGISTRO"] = "";
	$placeHoldersPERFILDOCENTE["English"]["FECHADEREGISTRO"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["CEDULA"] = "Cedula";
	$fieldToolTipsPERFILDOCENTE["English"]["CEDULA"] = "";
	$placeHoldersPERFILDOCENTE["English"]["CEDULA"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["PASS"] = "Contraseña";
	$fieldToolTipsPERFILDOCENTE["English"]["PASS"] = "";
	$placeHoldersPERFILDOCENTE["English"]["PASS"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["FOTOPERFIL"] = "Foto de Perfil";
	$fieldToolTipsPERFILDOCENTE["English"]["FOTOPERFIL"] = "";
	$placeHoldersPERFILDOCENTE["English"]["FOTOPERFIL"] = "";
	$fieldLabelsPERFILDOCENTE["English"]["TOKEN"] = "TOKEN";
	$fieldToolTipsPERFILDOCENTE["English"]["TOKEN"] = "";
	$placeHoldersPERFILDOCENTE["English"]["TOKEN"] = "";
	if (count($fieldToolTipsPERFILDOCENTE["English"]))
		$tdataPERFILDOCENTE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPERFILDOCENTE[""] = array();
	$fieldToolTipsPERFILDOCENTE[""] = array();
	$placeHoldersPERFILDOCENTE[""] = array();
	$pageTitlesPERFILDOCENTE[""] = array();
	$fieldLabelsPERFILDOCENTE[""]["CEDULA"] = "CEDULA";
	$fieldToolTipsPERFILDOCENTE[""]["CEDULA"] = "";
	$placeHoldersPERFILDOCENTE[""]["CEDULA"] = "";
	$fieldLabelsPERFILDOCENTE[""]["PASS"] = "PASS";
	$fieldToolTipsPERFILDOCENTE[""]["PASS"] = "";
	$placeHoldersPERFILDOCENTE[""]["PASS"] = "";
	$fieldLabelsPERFILDOCENTE[""]["FOTOPERFIL"] = "FOTOPERFIL";
	$fieldToolTipsPERFILDOCENTE[""]["FOTOPERFIL"] = "";
	$placeHoldersPERFILDOCENTE[""]["FOTOPERFIL"] = "";
	$fieldLabelsPERFILDOCENTE[""]["TOKEN"] = "TOKEN";
	$fieldToolTipsPERFILDOCENTE[""]["TOKEN"] = "";
	$placeHoldersPERFILDOCENTE[""]["TOKEN"] = "";
	if (count($fieldToolTipsPERFILDOCENTE[""]))
		$tdataPERFILDOCENTE[".isUseToolTips"] = true;
}


	$tdataPERFILDOCENTE[".NCSearch"] = true;



$tdataPERFILDOCENTE[".shortTableName"] = "PERFILDOCENTE";
$tdataPERFILDOCENTE[".nSecOptions"] = 0;
$tdataPERFILDOCENTE[".recsPerRowPrint"] = 1;
$tdataPERFILDOCENTE[".mainTableOwnerID"] = "";
$tdataPERFILDOCENTE[".moveNext"] = 1;
$tdataPERFILDOCENTE[".entityType"] = 1;

$tdataPERFILDOCENTE[".strOriginalTableName"] = "docente";

	



$tdataPERFILDOCENTE[".showAddInPopup"] = true;

$tdataPERFILDOCENTE[".showEditInPopup"] = true;

$tdataPERFILDOCENTE[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
			;
$popupPagesLayoutNames["add"] = "view_bootstrap_2col";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdataPERFILDOCENTE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPERFILDOCENTE[".fieldsForRegister"] = array();
	
$tdataPERFILDOCENTE[".listAjax"] = false;

	$tdataPERFILDOCENTE[".audit"] = false;

	$tdataPERFILDOCENTE[".locking"] = false;

$tdataPERFILDOCENTE[".edit"] = true;
$tdataPERFILDOCENTE[".afterEditAction"] = 1;
$tdataPERFILDOCENTE[".closePopupAfterEdit"] = 1;
$tdataPERFILDOCENTE[".afterEditActionDetTable"] = "";


$tdataPERFILDOCENTE[".list"] = true;



$tdataPERFILDOCENTE[".reorderRecordsByHeader"] = true;



$tdataPERFILDOCENTE[".view"] = true;





$tdataPERFILDOCENTE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPERFILDOCENTE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPERFILDOCENTE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPERFILDOCENTE[".searchSaving"] = false;
//

	$tdataPERFILDOCENTE[".showSearchPanel"] = false;

$tdataPERFILDOCENTE[".isUseAjaxSuggest"] = true;

$tdataPERFILDOCENTE[".rowHighlite"] = true;





$tdataPERFILDOCENTE[".ajaxCodeSnippetAdded"] = false;

$tdataPERFILDOCENTE[".buttonsAdded"] = false;

$tdataPERFILDOCENTE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPERFILDOCENTE[".isUseTimeForSearch"] = false;



$tdataPERFILDOCENTE[".badgeColor"] = "E07878";


$tdataPERFILDOCENTE[".allSearchFields"] = array();
$tdataPERFILDOCENTE[".filterFields"] = array();
$tdataPERFILDOCENTE[".requiredSearchFields"] = array();

$tdataPERFILDOCENTE[".allSearchFields"][] = "ID_DOCENTE";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "NOMBRES";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "CELULAR";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "CORREO";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "ASIGNATURA";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "PROFESION";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "FECHACUMPLEAÑOS";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "ESTADO";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "FECHADEREGISTRO";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "CEDULA";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "PASS";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "FOTOPERFIL";
	$tdataPERFILDOCENTE[".allSearchFields"][] = "TOKEN";
	

$tdataPERFILDOCENTE[".googleLikeFields"] = array();
$tdataPERFILDOCENTE[".googleLikeFields"][] = "ID_DOCENTE";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "CORREO";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "FECHACUMPLEAÑOS";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "FECHADEREGISTRO";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "PASS";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "FOTOPERFIL";
$tdataPERFILDOCENTE[".googleLikeFields"][] = "TOKEN";


$tdataPERFILDOCENTE[".advSearchFields"] = array();
$tdataPERFILDOCENTE[".advSearchFields"][] = "ID_DOCENTE";
$tdataPERFILDOCENTE[".advSearchFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".advSearchFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".advSearchFields"][] = "CORREO";
$tdataPERFILDOCENTE[".advSearchFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".advSearchFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".advSearchFields"][] = "FECHACUMPLEAÑOS";
$tdataPERFILDOCENTE[".advSearchFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".advSearchFields"][] = "FECHADEREGISTRO";
$tdataPERFILDOCENTE[".advSearchFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".advSearchFields"][] = "PASS";
$tdataPERFILDOCENTE[".advSearchFields"][] = "FOTOPERFIL";
$tdataPERFILDOCENTE[".advSearchFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".tableType"] = "list";

$tdataPERFILDOCENTE[".printerPageOrientation"] = 0;
$tdataPERFILDOCENTE[".nPrinterPageScale"] = 100;

$tdataPERFILDOCENTE[".nPrinterSplitRecords"] = 40;

$tdataPERFILDOCENTE[".nPrinterPDFSplitRecords"] = 40;



$tdataPERFILDOCENTE[".geocodingEnabled"] = false;





$tdataPERFILDOCENTE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataPERFILDOCENTE[".pageSize"] = 20;

$tdataPERFILDOCENTE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPERFILDOCENTE[".strOrderBy"] = $tstrOrderBy;

$tdataPERFILDOCENTE[".orderindexes"] = array();

$tdataPERFILDOCENTE[".sqlHead"] = "SELECT ID_DOCENTE,  	NOMBRES,  	CELULAR,  	CORREO,  	ASIGNATURA,  	PROFESION,  	`FECHACUMPLEAÑOS`,  	ESTADO,  	FECHADEREGISTRO,  	CEDULA,  	PASS,  	FOTOPERFIL,  	TOKEN";
$tdataPERFILDOCENTE[".sqlFrom"] = "FROM docente";
$tdataPERFILDOCENTE[".sqlWhereExpr"] = "";
$tdataPERFILDOCENTE[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPERFILDOCENTE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPERFILDOCENTE[".arrGroupsPerPage"] = $arrGPP;

$tdataPERFILDOCENTE[".highlightSearchResults"] = true;

$tableKeysPERFILDOCENTE = array();
$tableKeysPERFILDOCENTE[] = "ID_DOCENTE";
$tdataPERFILDOCENTE[".Keys"] = $tableKeysPERFILDOCENTE;

$tdataPERFILDOCENTE[".listFields"] = array();
$tdataPERFILDOCENTE[".listFields"][] = "TOKEN";
$tdataPERFILDOCENTE[".listFields"][] = "FOTOPERFIL";
$tdataPERFILDOCENTE[".listFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".listFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".listFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".listFields"][] = "FECHADEREGISTRO";
$tdataPERFILDOCENTE[".listFields"][] = "ESTADO";

$tdataPERFILDOCENTE[".hideMobileList"] = array();


$tdataPERFILDOCENTE[".viewFields"] = array();
$tdataPERFILDOCENTE[".viewFields"][] = "TOKEN";
$tdataPERFILDOCENTE[".viewFields"][] = "FOTOPERFIL";
$tdataPERFILDOCENTE[".viewFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".viewFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".viewFields"][] = "CORREO";
$tdataPERFILDOCENTE[".viewFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".viewFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".viewFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".viewFields"][] = "FECHADEREGISTRO";
$tdataPERFILDOCENTE[".viewFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".viewFields"][] = "FECHACUMPLEAÑOS";

$tdataPERFILDOCENTE[".addFields"] = array();
$tdataPERFILDOCENTE[".addFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".masterListFields"] = array();
$tdataPERFILDOCENTE[".masterListFields"][] = "ID_DOCENTE";
$tdataPERFILDOCENTE[".masterListFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".masterListFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".masterListFields"][] = "CORREO";
$tdataPERFILDOCENTE[".masterListFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".masterListFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".masterListFields"][] = "FECHACUMPLEAÑOS";
$tdataPERFILDOCENTE[".masterListFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".masterListFields"][] = "FECHADEREGISTRO";
$tdataPERFILDOCENTE[".masterListFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".masterListFields"][] = "PASS";
$tdataPERFILDOCENTE[".masterListFields"][] = "FOTOPERFIL";
$tdataPERFILDOCENTE[".masterListFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".inlineAddFields"] = array();
$tdataPERFILDOCENTE[".inlineAddFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".editFields"] = array();
$tdataPERFILDOCENTE[".editFields"][] = "TOKEN";
$tdataPERFILDOCENTE[".editFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".editFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".editFields"][] = "CORREO";
$tdataPERFILDOCENTE[".editFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".editFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".editFields"][] = "FECHACUMPLEAÑOS";
$tdataPERFILDOCENTE[".editFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".editFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".editFields"][] = "PASS";
$tdataPERFILDOCENTE[".editFields"][] = "FOTOPERFIL";

$tdataPERFILDOCENTE[".inlineEditFields"] = array();
$tdataPERFILDOCENTE[".inlineEditFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".updateSelectedFields"] = array();
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "TOKEN";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "NOMBRES";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "CELULAR";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "CORREO";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "ASIGNATURA";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "PROFESION";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "FECHACUMPLEAÑOS";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "ESTADO";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "CEDULA";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "PASS";
$tdataPERFILDOCENTE[".updateSelectedFields"][] = "FOTOPERFIL";


$tdataPERFILDOCENTE[".exportFields"] = array();
$tdataPERFILDOCENTE[".exportFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".importFields"] = array();
$tdataPERFILDOCENTE[".importFields"][] = "TOKEN";

$tdataPERFILDOCENTE[".printFields"] = array();
$tdataPERFILDOCENTE[".printFields"][] = "TOKEN";


//	ID_DOCENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_DOCENTE";
	$fdata["GoodName"] = "ID_DOCENTE";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","ID_DOCENTE");
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




	$tdataPERFILDOCENTE["ID_DOCENTE"] = $fdata;
//	NOMBRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOMBRES";
	$fdata["GoodName"] = "NOMBRES";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","NOMBRES");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["NOMBRES"] = $fdata;
//	CELULAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CELULAR";
	$fdata["GoodName"] = "CELULAR";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","CELULAR");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["CELULAR"] = $fdata;
//	CORREO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CORREO";
	$fdata["GoodName"] = "CORREO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","CORREO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

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




	$tdataPERFILDOCENTE["CORREO"] = $fdata;
//	ASIGNATURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ASIGNATURA";
	$fdata["GoodName"] = "ASIGNATURA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","ASIGNATURA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["ASIGNATURA"] = $fdata;
//	PROFESION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "PROFESION";
	$fdata["GoodName"] = "PROFESION";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","PROFESION");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["PROFESION"] = $fdata;
//	FECHACUMPLEAÑOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FECHACUMPLEAÑOS";
	$fdata["GoodName"] = "FECHACUMPLEA_OS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","FECHACUMPLEA_OS");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["FECHACUMPLEAÑOS"] = $fdata;
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","ESTADO");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["ESTADO"] = $fdata;
//	FECHADEREGISTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FECHADEREGISTRO";
	$fdata["GoodName"] = "FECHADEREGISTRO";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","FECHADEREGISTRO");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["FECHADEREGISTRO"] = $fdata;
//	CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CEDULA";
	$fdata["GoodName"] = "CEDULA";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","CEDULA");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataPERFILDOCENTE["CEDULA"] = $fdata;
//	PASS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PASS";
	$fdata["GoodName"] = "PASS";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","PASS");
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




	$tdataPERFILDOCENTE["PASS"] = $fdata;
//	FOTOPERFIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FOTOPERFIL";
	$fdata["GoodName"] = "FOTOPERFIL";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","FOTOPERFIL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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
	$vdata["ThumbHeight"] = 230;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 260;
			$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["list"] = $vdata;
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPERFILDOCENTE["FOTOPERFIL"] = $fdata;
//	TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TOKEN";
	$fdata["GoodName"] = "TOKEN";
	$fdata["ownerTable"] = "docente";
	$fdata["Label"] = GetFieldLabel("PERFILDOCENTE","TOKEN");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataPERFILDOCENTE["TOKEN"] = $fdata;


$tables_data["PERFILDOCENTE"]=&$tdataPERFILDOCENTE;
$field_labels["PERFILDOCENTE"] = &$fieldLabelsPERFILDOCENTE;
$fieldToolTips["PERFILDOCENTE"] = &$fieldToolTipsPERFILDOCENTE;
$placeHolders["PERFILDOCENTE"] = &$placeHoldersPERFILDOCENTE;
$page_titles["PERFILDOCENTE"] = &$pageTitlesPERFILDOCENTE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PERFILDOCENTE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PERFILDOCENTE"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PERFILDOCENTE()
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
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto9["m_sql"] = "ID_DOCENTE";
$proto9["m_srcTableName"] = "PERFILDOCENTE";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRES",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto11["m_sql"] = "NOMBRES";
$proto11["m_srcTableName"] = "PERFILDOCENTE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CELULAR",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto13["m_sql"] = "CELULAR";
$proto13["m_srcTableName"] = "PERFILDOCENTE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CORREO",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto15["m_sql"] = "CORREO";
$proto15["m_srcTableName"] = "PERFILDOCENTE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ASIGNATURA",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto17["m_sql"] = "ASIGNATURA";
$proto17["m_srcTableName"] = "PERFILDOCENTE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "PROFESION",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto19["m_sql"] = "PROFESION";
$proto19["m_srcTableName"] = "PERFILDOCENTE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHACUMPLEAÑOS",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto21["m_sql"] = "`FECHACUMPLEAÑOS`";
$proto21["m_srcTableName"] = "PERFILDOCENTE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto23["m_sql"] = "ESTADO";
$proto23["m_srcTableName"] = "PERFILDOCENTE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto3["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHADEREGISTRO",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto25["m_sql"] = "FECHADEREGISTRO";
$proto25["m_srcTableName"] = "PERFILDOCENTE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto3["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CEDULA",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto27["m_sql"] = "CEDULA";
$proto27["m_srcTableName"] = "PERFILDOCENTE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto3["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "PASS",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto29["m_sql"] = "PASS";
$proto29["m_srcTableName"] = "PERFILDOCENTE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto3["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "FOTOPERFIL",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto31["m_sql"] = "FOTOPERFIL";
$proto31["m_srcTableName"] = "PERFILDOCENTE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto3["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "TOKEN",
	"m_strTable" => "docente",
	"m_srcTableName" => "PERFILDOCENTE"
));

$proto33["m_sql"] = "TOKEN";
$proto33["m_srcTableName"] = "PERFILDOCENTE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "docente";
$proto36["m_srcTableName"] = "PERFILDOCENTE";
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
$proto35["m_srcTableName"] = "PERFILDOCENTE";
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
$proto3["m_srcTableName"]="PERFILDOCENTE";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_PERFILDOCENTE = createSqlQuery_PERFILDOCENTE();


	
		;

													

$tdataPERFILDOCENTE[".sqlquery"] = $queryData_PERFILDOCENTE;

$tableEvents["PERFILDOCENTE"] = new eventsBase;
$tdataPERFILDOCENTE[".hasEvents"] = false;

?>