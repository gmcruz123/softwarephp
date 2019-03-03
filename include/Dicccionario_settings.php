<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDicccionario = array();
$tdataDicccionario[".ShortName"] = "Dicccionario";

//	field labels
$fieldLabelsDicccionario = array();
$pageTitlesDicccionario = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDicccionario["English"] = array();
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDicccionario[""] = array();
}

//	search fields
$tdataDicccionario[".searchFields"] = array();

// all search fields
$tdataDicccionario[".allSearchFields"] = array();

// good like search fields
$tdataDicccionario[".googleLikeFields"] = array();

$tdataDicccionario[".dashElements"] = array();


$tdataDicccionario[".shortTableName"] = "Dicccionario";
$tdataDicccionario[".entityType"] = 4;



$tableEvents["Dicccionario"] = new eventsBase;
$tdataDicccionario[".hasEvents"] = false;


$tdataDicccionario[".tableType"] = "dashboard";



$tdataDicccionario[".addPageEvents"] = false;

$tables_data["Dicccionario"]=&$tdataDicccionario;
$field_labels["Dicccionario"] = &$fieldLabelsDicccionario;
$page_titles["Dicccionario"] = &$pageTitlesDicccionario;

?>