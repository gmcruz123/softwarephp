<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPIAR = array();
$tdataPIAR[".ShortName"] = "PIAR";

//	field labels
$fieldLabelsPIAR = array();
$pageTitlesPIAR = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPIAR["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPIAR[""] = array();
}

//	search fields
$tdataPIAR[".searchFields"] = array();

// all search fields
$tdataPIAR[".allSearchFields"] = array();

// good like search fields
$tdataPIAR[".googleLikeFields"] = array();

$tdataPIAR[".dashElements"] = array();


$tdataPIAR[".shortTableName"] = "PIAR";
$tdataPIAR[".entityType"] = 4;



$tableEvents["PIAR"] = new eventsBase;
$tdataPIAR[".hasEvents"] = false;


$tdataPIAR[".tableType"] = "dashboard";



$tdataPIAR[".addPageEvents"] = false;

$tables_data["PIAR"]=&$tdataPIAR;
$field_labels["PIAR"] = &$fieldLabelsPIAR;
$page_titles["PIAR"] = &$pageTitlesPIAR;

?>