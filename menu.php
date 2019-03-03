<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap1", "DeliciousOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "_menu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"login" );
$layout->containers["login"] = array();
$layout->container_properties["login"] = array(  );
$layout->containers["login"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["login"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["login"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["top"][] = "center";
$page_layouts["menu"] = $layout;




require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/docente_events.php"));
$tableEvents["docente"] = new eventclass_docente;
include_once(getabspath("include/seguimiento_events.php"));
$tableEvents["seguimiento"] = new eventclass_seguimiento;
include_once(getabspath("include/admin_members_events.php"));
$tableEvents["admin_members"] = new eventclass_admin_members;
include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;

$xt = new Xtempl();

$id = postvalue("id")!=="" ? postvalue("id") : 1;

echo("<script src='https://www.gstatic.com/firebasejs/5.8.2/firebase.js'></script>");

echo(" <script
src='https://code.jquery.com/jquery-1.12.4.min.js'
integrity='sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ='
crossorigin='anonymous'></script>");


echo('<script>

var tokenUser = "";

var config = {
    apiKey: "AIzaSyCh-5-TYVNSt0E0D-PSyHAIU1pvHUa2PGQ",
    authDomain: "videocallangular.firebaseapp.com",
    databaseURL: "https://videocallangular.firebaseio.com",
    projectId: "videocallangular",
    storageBucket: "videocallangular.appspot.com",
    messagingSenderId: "612925373463"
  };
  firebase.initializeApp(config);

  const messaging = firebase.messaging();

  messaging.requestPermission().then(function() {
  console.log("Notification permission granted.");

   getRegToken();



}).catch(function(err) {
  console.log("Unable to get permission to notify.", err);
});


function getRegToken(){
  messaging.getToken()
    .then(function(currentToken) {
        tokenUser = currentToken
      if (currentToken) {
		
		$.ajax({
			type: "POST",
			url: "firebase/updateToken.php",
			data: {token: tokenUser, id: ' .$id);

echo('},
success: function(data){
	 console.log(data)
}
});

	setTokenSentToServer(true);
	console.log(currentToken)
} else {

	console.log("No Instance ID token available. Request permission to generate one.");
 setTokenSentToServer(false);
}
}).catch(function(err) {
console.log("An error occurred while retrieving token. ", err);
// showToken("Error retrieving Instance ID token. ", err);
setTokenSentToServer(false);
});}

function setTokenSentToServer(sent) {
window.localStorage.setItem("sentToServer", sent ? 1 : 0);
}
function isTokenSentToServer() {
return window.localStorage.getItem("sentToServer") == 1;
}


messaging.onMessage(function(payload) {
console.log("Message received. ", payload);

notificationTitle = payload.data.title;
notificationOptions = {
body: payload.data.body,
icon: payload.data.icon,
image:  payload.data.image
};


if(confirm("Presione aceptar para ir a la videollamada")) {
location.href = notificationOptions.body;
}

});



</script>');

//array of params for classes
$params = array();
$params["id"] = $id; 
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_MENU;
$params["templatefile"] = "menu.htm";
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();
$pageObject->commonAssign();
// button handlers file names

//	Before Process event
if($globalEvents->exists("BeforeProcessMenu"))
	$globalEvents->BeforeProcessMenu( $pageObject );

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->addCommonJs();

//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();
$pageObject->setLangParams();
$xt->assign("id", $id);
// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
$xt->assign("username", $_SESSION["UserName"]);
$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");

$xt->assign("logoutlink_attrs", 'id="logoutButton'.$id.'"');
$xt->assign("guestloginlink_attrs", 'id="loginButton'.$id.'"');

$xt->assign("loggedas_block", !isLoggedAsGuest());
$xt->assign("loggedas_message", !isLoggedAsGuest());

$xt->assign("logout_link", true);
$xt->assign("guestloginbutton", isLoggedAsGuest());
$xt->assign("logoutbutton", isSingleSign() && !isLoggedAsGuest());

if( IsAdmin() )
	$xt->assign("adminarea_link", true);

// get redirect location for menu page
$redirect = $pageObject->getRedirectForMenuPage();
if($redirect)
{
	header("Location: ".$redirect); 
	exit();
}

$xt->assign("menu_block",true);
if($globalEvents->exists("BeforeShowMenu"))
	$globalEvents->BeforeShowMenu($xt, $pageObject->templatefile, $pageObject);

$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "Runner.applyPagesData( ".my_json_encode( $pagesData )." );";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body["end"] .= "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$pageObject->display($pageObject->templatefile);
?>