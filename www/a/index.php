<!DOCTYPE html>
<!-- saved from url=(0029)http://www.nyipcn.com -->
<html class=" ext-strict">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">

<meta name="description" content="">
<meta name="keywords" content="">
<title>纽摄俱乐部</title>

<link type="text/css" href="./comm/common.css" rel="stylesheet">
</head>

<body>
<?php
include 'comm/title.php' ;

$t = $_GET['t'] ;
if(empty($t)){
	include "main0.php" ;
} else if($t>0 && $t<4){
	include "main1.php" ;
} else {
	
}


include 'comm/footer.php' ;