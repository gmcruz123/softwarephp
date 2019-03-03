<?php
require_once(getabspath("classes/cipherer.php"));



$tdataQuienes_Somos = array();
$tdataQuienes_Somos[".ShortName"] = "Quienes_Somos";

//	field labels
$fieldLabelsQuienes_Somos = array();
$pageTitlesQuienes_Somos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsQuienes_Somos["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsQuienes_Somos[""] = array();
}

//	search fields
$tdataQuienes_Somos[".searchFields"] = array();

// all search fields
$tdataQuienes_Somos[".allSearchFields"] = array();

// good like search fields
$tdataQuienes_Somos[".googleLikeFields"] = array();

$tdataQuienes_Somos[".dashElements"] = array();


$tdataQuienes_Somos[".shortTableName"] = "Quienes_Somos";
$tdataQuienes_Somos[".entityType"] = 4;



$tableEvents["Quienes Somos"] = new eventsBase;
$tdataQuienes_Somos[".hasEvents"] = false;


$tdataQuienes_Somos[".tableType"] = "dashboard";



$tdataQuienes_Somos[".addPageEvents"] = false;

$tables_data["Quienes Somos"]=&$tdataQuienes_Somos;
$field_labels["Quienes_Somos"] = &$fieldLabelsQuienes_Somos;
$page_titles["Quienes_Somos"] = &$pageTitlesQuienes_Somos;

?>