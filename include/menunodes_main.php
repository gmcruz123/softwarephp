<?php

function getMenuNodes_main($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["main"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "UAI";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-home";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "UAI";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Quienes Somos";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Dashboard";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-heart-empty";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Quienes Somos";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "PIAR";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Dashboard";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-book";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "PIAR";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "Acompañamiento Pedagógico";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-star-empty";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Acompañamiento Pedagógico";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "Mis Docentes";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "docente";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "4";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-book";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Mis Docentes";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "Mi Perfil";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "PERFILDOCENTE";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "4";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-user";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Mi Perfil";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "Mis Casos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "ESTUDIANTESACARGO";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "4";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-user";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Mis Casos";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "seguimiento";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-eye-open";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Seguimiento";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "9";
	$menuNode["name"] = "Estadisticas";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-indent-left";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Estadisticas";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "10";
	$menuNode["name"] = "Listado de Casos";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "estudiantes";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "9";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-book";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Listado de Casos";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "11";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Dicccionario";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "Dashboard";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-text-color";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Dicccionario";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
}
?>
