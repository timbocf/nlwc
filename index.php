<?php
global $loginError;
include 'includes/functions.php';
include 'includes/Mobile_Detect.php';

$detect = new Mobile_Detect;

// CHECK FOR MOBILE DEVICE
if($detect->isMobile() || $detect->isTablet()) {
	if (isset($_REQUEST['page'])) {
		if($_REQUEST['page'] !="") {
			if(!file_exists("pages/".$_REQUEST['page'].".php")){
				$_REQUEST['page'] = "mobile";
//				ob_start();
//				header("Location: index.php?page=mobile");
//				$page_content = ob_get_clean();
			}
		}
	}
	include("includes/mobiletpl.php");
}
// IF NOT MOBILE, CONTINUE
else{
	if (isset($_REQUEST['page'])) {
		if($_REQUEST['page'] !="") {
			if(!file_exists("pages/".$_REQUEST['page'].".php")){
				$_REQUEST['page'] = "home";
				ob_start();
				header("Location: index.php?page=home");
				ob_get_clean();
			}
		}
	}else{
		$_REQUEST['page'] = 'home';
//		ob_start();
//		header("Location: index.php?page=home");
//		ob_get_clean();
	}
	if($_REQUEST['page'] === "home") {
		$css = "sub.css";
	}else {
		$css = "subpages.css";
	}
	include "includes/tplmain.php";
}
?>