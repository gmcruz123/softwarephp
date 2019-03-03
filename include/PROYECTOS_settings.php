<?php
require_once(getabspath("classes/cipherer.php"));



$tdataPROYECTOS = array();
$tdataPROYECTOS[".ShortName"] = "PROYECTOS";

//	field labels
$fieldLabelsPROYECTOS = array();
$pageTitlesPROYECTOS = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPROYECTOS["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPROYECTOS[""] = array();
}

//	search fields
$tdataPROYECTOS[".searchFields"] = array();

// all search fields
$tdataPROYECTOS[".allSearchFields"] = array();

// good like search fields
$tdataPROYECTOS[".googleLikeFields"] = array();

$tdataPROYECTOS[".dashElements"] = array();


$tdataPROYECTOS[".shortTableName"] = "PROYECTOS";
$tdataPROYECTOS[".entityType"] = 4;



$tableEvents["PROYECTOS"] = new eventsBase;
$tdataPROYECTOS[".hasEvents"] = false;


$tdataPROYECTOS[".tableType"] = "dashboard";



$tdataPROYECTOS[".addPageEvents"] = false;

$tables_data["PROYECTOS"]=&$tdataPROYECTOS;
$field_labels["PROYECTOS"] = &$fieldLabelsPROYECTOS;
$page_titles["PROYECTOS"] = &$pageTitlesPROYECTOS;

?>