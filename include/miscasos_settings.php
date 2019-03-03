<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamiscasos = array();
	$tdatamiscasos[".truncateText"] = true;
	$tdatamiscasos[".NumberOfChars"] = 80;
	$tdatamiscasos[".ShortName"] = "miscasos";
	$tdatamiscasos[".OwnerID"] = "";
	$tdatamiscasos[".OriginalTable"] = "miscasos";

//	field labels
$fieldLabelsmiscasos = array();
$fieldToolTipsmiscasos = array();
$pageTitlesmiscasos = array();
$placeHoldersmiscasos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmiscasos["English"] = array();
	$fieldToolTipsmiscasos["English"] = array();
	$placeHoldersmiscasos["English"] = array();
	$pageTitlesmiscasos["English"] = array();
	$fieldLabelsmiscasos["English"]["id_miscasos"] = "ID Caso";
	$fieldToolTipsmiscasos["English"]["id_miscasos"] = "";
	$placeHoldersmiscasos["English"]["id_miscasos"] = "";
	$fieldLabelsmiscasos["English"]["fotodeprfil"] = "Foto de Perfil";
	$fieldToolTipsmiscasos["English"]["fotodeprfil"] = "";
	$placeHoldersmiscasos["English"]["fotodeprfil"] = "";
	$fieldLabelsmiscasos["English"]["docenteacargo"] = "Docente a Cargo";
	$fieldToolTipsmiscasos["English"]["docenteacargo"] = "";
	$placeHoldersmiscasos["English"]["docenteacargo"] = "";
	$fieldLabelsmiscasos["English"]["alumno"] = "Alumno";
	$fieldToolTipsmiscasos["English"]["alumno"] = "";
	$placeHoldersmiscasos["English"]["alumno"] = "";
	$fieldLabelsmiscasos["English"]["diagnostico"] = "Diagnostico";
	$fieldToolTipsmiscasos["English"]["diagnostico"] = "";
	$placeHoldersmiscasos["English"]["diagnostico"] = "";
	$fieldLabelsmiscasos["English"]["limitaciones"] = "Limitaciones";
	$fieldToolTipsmiscasos["English"]["limitaciones"] = "";
	$placeHoldersmiscasos["English"]["limitaciones"] = "";
	$fieldLabelsmiscasos["English"]["habilidades"] = "Habilidades";
	$fieldToolTipsmiscasos["English"]["habilidades"] = "";
	$placeHoldersmiscasos["English"]["habilidades"] = "";
	if (count($fieldToolTipsmiscasos["English"]))
		$tdatamiscasos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmiscasos[""] = array();
	$fieldToolTipsmiscasos[""] = array();
	$placeHoldersmiscasos[""] = array();
	$pageTitlesmiscasos[""] = array();
	$fieldLabelsmiscasos[""]["id_miscasos"] = "Id Miscasos";
	$fieldToolTipsmiscasos[""]["id_miscasos"] = "";
	$placeHoldersmiscasos[""]["id_miscasos"] = "";
	$fieldLabelsmiscasos[""]["fotodeprfil"] = "Fotodeprfil";
	$fieldToolTipsmiscasos[""]["fotodeprfil"] = "";
	$placeHoldersmiscasos[""]["fotodeprfil"] = "";
	$fieldLabelsmiscasos[""]["docenteacargo"] = "Docenteacargo";
	$fieldToolTipsmiscasos[""]["docenteacargo"] = "";
	$placeHoldersmiscasos[""]["docenteacargo"] = "";
	$fieldLabelsmiscasos[""]["alumno"] = "Alumno";
	$fieldToolTipsmiscasos[""]["alumno"] = "";
	$placeHoldersmiscasos[""]["alumno"] = "";
	$fieldLabelsmiscasos[""]["diagnostico"] = "Diagnostico";
	$fieldToolTipsmiscasos[""]["diagnostico"] = "";
	$placeHoldersmiscasos[""]["diagnostico"] = "";
	$fieldLabelsmiscasos[""]["limitaciones"] = "Limitaciones";
	$fieldToolTipsmiscasos[""]["limitaciones"] = "";
	$placeHoldersmiscasos[""]["limitaciones"] = "";
	$fieldLabelsmiscasos[""]["habilidades"] = "Habilidades";
	$fieldToolTipsmiscasos[""]["habilidades"] = "";
	$placeHoldersmiscasos[""]["habilidades"] = "";
	if (count($fieldToolTipsmiscasos[""]))
		$tdatamiscasos[".isUseToolTips"] = true;
}


	$tdatamiscasos[".NCSearch"] = true;



$tdatamiscasos[".shortTableName"] = "miscasos";
$tdatamiscasos[".nSecOptions"] = 0;
$tdatamiscasos[".recsPerRowPrint"] = 1;
$tdatamiscasos[".mainTableOwnerID"] = "";
$tdatamiscasos[".moveNext"] = 1;
$tdatamiscasos[".entityType"] = 0;

$tdatamiscasos[".strOriginalTableName"] = "miscasos";

	



$tdatamiscasos[".showAddInPopup"] = true;

$tdatamiscasos[".showEditInPopup"] = true;

$tdatamiscasos[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
					
;
$popupPagesLayoutNames["add"] = "add";
						
	;
$popupPagesLayoutNames["edit"] = "edit_bootstrap_4col";
						
	;
$popupPagesLayoutNames["view"] = "view_bootstrap_2col";
$tdatamiscasos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamiscasos[".fieldsForRegister"] = array();
	
$tdatamiscasos[".listAjax"] = false;

	$tdatamiscasos[".audit"] = false;

	$tdatamiscasos[".locking"] = false;

$tdatamiscasos[".edit"] = true;
$tdatamiscasos[".afterEditAction"] = 1;
$tdatamiscasos[".closePopupAfterEdit"] = 1;
$tdatamiscasos[".afterEditActionDetTable"] = "";


$tdatamiscasos[".list"] = true;



$tdatamiscasos[".reorderRecordsByHeader"] = true;


$tdatamiscasos[".exportFormatting"] = 2;
$tdatamiscasos[".exportDelimiter"] = ",";
		
$tdatamiscasos[".view"] = true;

$tdatamiscasos[".import"] = true;

$tdatamiscasos[".exportTo"] = true;

$tdatamiscasos[".printFriendly"] = true;


$tdatamiscasos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamiscasos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamiscasos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamiscasos[".searchSaving"] = false;
//

	$tdatamiscasos[".showSearchPanel"] = false;

$tdatamiscasos[".isUseAjaxSuggest"] = true;

$tdatamiscasos[".rowHighlite"] = true;





$tdatamiscasos[".ajaxCodeSnippetAdded"] = false;

$tdatamiscasos[".buttonsAdded"] = false;

$tdatamiscasos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamiscasos[".isUseTimeForSearch"] = false;



$tdatamiscasos[".badgeColor"] = "008B8B";


$tdatamiscasos[".allSearchFields"] = array();
$tdatamiscasos[".filterFields"] = array();
$tdatamiscasos[".requiredSearchFields"] = array();

$tdatamiscasos[".allSearchFields"][] = "id_miscasos";
	$tdatamiscasos[".allSearchFields"][] = "fotodeprfil";
	$tdatamiscasos[".allSearchFields"][] = "docenteacargo";
	$tdatamiscasos[".allSearchFields"][] = "alumno";
	$tdatamiscasos[".allSearchFields"][] = "diagnostico";
	$tdatamiscasos[".allSearchFields"][] = "limitaciones";
	$tdatamiscasos[".allSearchFields"][] = "habilidades";
	

$tdatamiscasos[".googleLikeFields"] = array();
$tdatamiscasos[".googleLikeFields"][] = "id_miscasos";
$tdatamiscasos[".googleLikeFields"][] = "fotodeprfil";
$tdatamiscasos[".googleLikeFields"][] = "docenteacargo";
$tdatamiscasos[".googleLikeFields"][] = "alumno";
$tdatamiscasos[".googleLikeFields"][] = "diagnostico";
$tdatamiscasos[".googleLikeFields"][] = "limitaciones";
$tdatamiscasos[".googleLikeFields"][] = "habilidades";


$tdatamiscasos[".advSearchFields"] = array();
$tdatamiscasos[".advSearchFields"][] = "id_miscasos";
$tdatamiscasos[".advSearchFields"][] = "fotodeprfil";
$tdatamiscasos[".advSearchFields"][] = "docenteacargo";
$tdatamiscasos[".advSearchFields"][] = "alumno";
$tdatamiscasos[".advSearchFields"][] = "diagnostico";
$tdatamiscasos[".advSearchFields"][] = "limitaciones";
$tdatamiscasos[".advSearchFields"][] = "habilidades";

$tdatamiscasos[".tableType"] = "list";

$tdatamiscasos[".printerPageOrientation"] = 0;
$tdatamiscasos[".nPrinterPageScale"] = 100;

$tdatamiscasos[".nPrinterSplitRecords"] = 40;

$tdatamiscasos[".nPrinterPDFSplitRecords"] = 40;



$tdatamiscasos[".geocodingEnabled"] = false;





$tdatamiscasos[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamiscasos[".pageSize"] = 20;

$tdatamiscasos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamiscasos[".strOrderBy"] = $tstrOrderBy;

$tdatamiscasos[".orderindexes"] = array();

$tdatamiscasos[".sqlHead"] = "SELECT id_miscasos,  	fotodeprfil,  	docenteacargo,  	alumno,  	diagnostico,  	limitaciones,  	habilidades";
$tdatamiscasos[".sqlFrom"] = "FROM miscasos";
$tdatamiscasos[".sqlWhereExpr"] = "";
$tdatamiscasos[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamiscasos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamiscasos[".arrGroupsPerPage"] = $arrGPP;

$tdatamiscasos[".highlightSearchResults"] = true;

$tableKeysmiscasos = array();
$tableKeysmiscasos[] = "id_miscasos";
$tdatamiscasos[".Keys"] = $tableKeysmiscasos;

$tdatamiscasos[".listFields"] = array();
$tdatamiscasos[".listFields"][] = "id_miscasos";
$tdatamiscasos[".listFields"][] = "fotodeprfil";
$tdatamiscasos[".listFields"][] = "docenteacargo";
$tdatamiscasos[".listFields"][] = "alumno";
$tdatamiscasos[".listFields"][] = "diagnostico";
$tdatamiscasos[".listFields"][] = "limitaciones";
$tdatamiscasos[".listFields"][] = "habilidades";

$tdatamiscasos[".hideMobileList"] = array();


$tdatamiscasos[".viewFields"] = array();
$tdatamiscasos[".viewFields"][] = "id_miscasos";
$tdatamiscasos[".viewFields"][] = "fotodeprfil";
$tdatamiscasos[".viewFields"][] = "docenteacargo";
$tdatamiscasos[".viewFields"][] = "alumno";
$tdatamiscasos[".viewFields"][] = "diagnostico";
$tdatamiscasos[".viewFields"][] = "limitaciones";
$tdatamiscasos[".viewFields"][] = "habilidades";

$tdatamiscasos[".addFields"] = array();

$tdatamiscasos[".masterListFields"] = array();
$tdatamiscasos[".masterListFields"][] = "id_miscasos";
$tdatamiscasos[".masterListFields"][] = "fotodeprfil";
$tdatamiscasos[".masterListFields"][] = "docenteacargo";
$tdatamiscasos[".masterListFields"][] = "alumno";
$tdatamiscasos[".masterListFields"][] = "diagnostico";
$tdatamiscasos[".masterListFields"][] = "limitaciones";
$tdatamiscasos[".masterListFields"][] = "habilidades";

$tdatamiscasos[".inlineAddFields"] = array();

$tdatamiscasos[".editFields"] = array();
$tdatamiscasos[".editFields"][] = "fotodeprfil";
$tdatamiscasos[".editFields"][] = "docenteacargo";
$tdatamiscasos[".editFields"][] = "alumno";
$tdatamiscasos[".editFields"][] = "diagnostico";
$tdatamiscasos[".editFields"][] = "limitaciones";
$tdatamiscasos[".editFields"][] = "habilidades";

$tdatamiscasos[".inlineEditFields"] = array();

$tdatamiscasos[".updateSelectedFields"] = array();
$tdatamiscasos[".updateSelectedFields"][] = "fotodeprfil";
$tdatamiscasos[".updateSelectedFields"][] = "docenteacargo";
$tdatamiscasos[".updateSelectedFields"][] = "alumno";
$tdatamiscasos[".updateSelectedFields"][] = "diagnostico";
$tdatamiscasos[".updateSelectedFields"][] = "limitaciones";
$tdatamiscasos[".updateSelectedFields"][] = "habilidades";


$tdatamiscasos[".exportFields"] = array();
$tdatamiscasos[".exportFields"][] = "id_miscasos";
$tdatamiscasos[".exportFields"][] = "fotodeprfil";
$tdatamiscasos[".exportFields"][] = "docenteacargo";
$tdatamiscasos[".exportFields"][] = "alumno";
$tdatamiscasos[".exportFields"][] = "diagnostico";
$tdatamiscasos[".exportFields"][] = "limitaciones";
$tdatamiscasos[".exportFields"][] = "habilidades";

$tdatamiscasos[".importFields"] = array();
$tdatamiscasos[".importFields"][] = "id_miscasos";
$tdatamiscasos[".importFields"][] = "fotodeprfil";
$tdatamiscasos[".importFields"][] = "docenteacargo";
$tdatamiscasos[".importFields"][] = "alumno";
$tdatamiscasos[".importFields"][] = "diagnostico";
$tdatamiscasos[".importFields"][] = "limitaciones";
$tdatamiscasos[".importFields"][] = "habilidades";

$tdatamiscasos[".printFields"] = array();
$tdatamiscasos[".printFields"][] = "id_miscasos";
$tdatamiscasos[".printFields"][] = "fotodeprfil";
$tdatamiscasos[".printFields"][] = "docenteacargo";
$tdatamiscasos[".printFields"][] = "alumno";
$tdatamiscasos[".printFields"][] = "diagnostico";
$tdatamiscasos[".printFields"][] = "limitaciones";
$tdatamiscasos[".printFields"][] = "habilidades";


//	id_miscasos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_miscasos";
	$fdata["GoodName"] = "id_miscasos";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","id_miscasos");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_miscasos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_miscasos";

	
	
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




	$tdatamiscasos["id_miscasos"] = $fdata;
//	fotodeprfil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fotodeprfil";
	$fdata["GoodName"] = "fotodeprfil";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","fotodeprfil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fotodeprfil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fotodeprfil";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 72;
	$vdata["ThumbHeight"] = 72;
			$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

	
	
	
	
	
	
	
	
	
	
		
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
			$edata["ThumbnailSize"] = 150;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamiscasos["fotodeprfil"] = $fdata;
//	docenteacargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "docenteacargo";
	$fdata["GoodName"] = "docenteacargo";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","docenteacargo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "docenteacargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "docenteacargo";

	
	
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




	$tdatamiscasos["docenteacargo"] = $fdata;
//	alumno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "alumno";
	$fdata["GoodName"] = "alumno";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","alumno");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "alumno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alumno";

	
	
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




	$tdatamiscasos["alumno"] = $fdata;
//	diagnostico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "diagnostico";
	$fdata["GoodName"] = "diagnostico";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","diagnostico");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "diagnostico";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnostico";

	
	
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




	$tdatamiscasos["diagnostico"] = $fdata;
//	limitaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "limitaciones";
	$fdata["GoodName"] = "limitaciones";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","limitaciones");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "limitaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "limitaciones";

	
	
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




	$tdatamiscasos["limitaciones"] = $fdata;
//	habilidades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "habilidades";
	$fdata["GoodName"] = "habilidades";
	$fdata["ownerTable"] = "miscasos";
	$fdata["Label"] = GetFieldLabel("miscasos","habilidades");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "habilidades";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilidades";

	
	
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




	$tdatamiscasos["habilidades"] = $fdata;


$tables_data["miscasos"]=&$tdatamiscasos;
$field_labels["miscasos"] = &$fieldLabelsmiscasos;
$fieldToolTips["miscasos"] = &$fieldToolTipsmiscasos;
$placeHolders["miscasos"] = &$placeHoldersmiscasos;
$page_titles["miscasos"] = &$pageTitlesmiscasos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["miscasos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["miscasos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_miscasos()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "id_miscasos,  	fotodeprfil,  	docenteacargo,  	alumno,  	diagnostico,  	limitaciones,  	habilidades";
$proto3["m_strFrom"] = "FROM miscasos";
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
	"m_strName" => "id_miscasos",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto9["m_sql"] = "id_miscasos";
$proto9["m_srcTableName"] = "miscasos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto3["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fotodeprfil",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto11["m_sql"] = "fotodeprfil";
$proto11["m_srcTableName"] = "miscasos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto3["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "docenteacargo",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto13["m_sql"] = "docenteacargo";
$proto13["m_srcTableName"] = "miscasos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto3["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "alumno",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto15["m_sql"] = "alumno";
$proto15["m_srcTableName"] = "miscasos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto3["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostico",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto17["m_sql"] = "diagnostico";
$proto17["m_srcTableName"] = "miscasos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto3["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "limitaciones",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto19["m_sql"] = "limitaciones";
$proto19["m_srcTableName"] = "miscasos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto3["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "habilidades",
	"m_strTable" => "miscasos",
	"m_srcTableName" => "miscasos"
));

$proto21["m_sql"] = "habilidades";
$proto21["m_srcTableName"] = "miscasos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "miscasos";
$proto24["m_srcTableName"] = "miscasos";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id_miscasos";
$proto24["m_columns"][] = "fotodeprfil";
$proto24["m_columns"][] = "docenteacargo";
$proto24["m_columns"][] = "alumno";
$proto24["m_columns"][] = "diagnostico";
$proto24["m_columns"][] = "limitaciones";
$proto24["m_columns"][] = "habilidades";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "miscasos";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "miscasos";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="miscasos";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_miscasos = createSqlQuery_miscasos();


	
		;

							

$tdatamiscasos[".sqlquery"] = $queryData_miscasos;

$tableEvents["miscasos"] = new eventsBase;
$tdatamiscasos[".hasEvents"] = false;

?>