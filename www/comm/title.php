<!DOCTYPE html>
<!-- saved from url=(0029)http://www.nyipcn.com -->
<html class=" ext-strict">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Pragma" content="no-cache">

<meta name="description" content="纽摄教育在线学院隶属于北京纽摄教育科技有限公司，是中国摄影网络教育领导者。 北京纽摄教育科技有限公司旗下的“纽约摄影学院中国学员班”成立于2005年，目的在于共同向更多中国摄影师推广纽约摄影学院著名的远程互动式摄影课程。纽约摄影学院名誉院长唐·谢夫作为纽约摄影学院专业摄影课程的主要作者，亲自负责监督这套专业摄影课程的汉化和发布。 纽约摄影学院的同仁在纽约摄影学院主任查克·德莱尼的领导下，正在与唐·">
<meta name="keywords" content="北京纽摄教育科技有限公司,网校,远程教育,网络教育,其他,摄影">
<title>纽摄教育在线学院——专业摄影网络课程领跑者</title>
<link type="text/css" href="../css/style.css" rel="stylesheet">
<link type="image/x-icon" href="http://www.nyipcn.com/wp-content/themes/nyip/images/favicon.ico" rel="shortcut icon"></head>

<style>
.user{
	z-index:10; 
	position:absolute; 
	top:80px; 
	right:50px; 
	width:500px; 
	height:30px; 
	border:0px;
	text-align:right; 
	color:#fff; 
	font:800 14px/36px arial;
}
.user a {color:#aaa; background:none;}
.user a:hover{color:#fff;  background:none;}

.floatleft{float:left;height:30px;line-height:24px; width:auto; padding:0 30px; font-size:14px; text-align:center;  background:none; color:#Fff;position:relative}
.title_c{float:left;height:30px;line-height:24px; width:auto; padding:0 3px; font-size:14px; text-align:center;background-color: #000;; color:#fff;position:relative}
.title_c a {color:#fff; background-color: #000;}
.title_c a:hover{color:#fff; background-image:url(../images/btn.gif);}
</style>
<body>
<div class="baseDiv newWidth">
  <div id="customServiceID" class="user">
  <?php 
  @session_start ();
  $userinfo = @$_SESSION [FinalClass::$_session_user] ;
  if(empty($userinfo)){
  	echo '<a href="login.php">[登录]</a> <a href="reg.php">[注册]</a>' ;
  } else {
  	$username = $userinfo['username'] ;
  	if(empty($username)){
  		$username = $userinfo['name'] ;
  	}
  	echo '您好，'.$username.'！<a href="login.php?action=loginout">[退出]</a>' ;
  }
  ?>
  </div>
  <img style="display:block;border-bottom:0px #CDCDCD solid" src="../images/top.jpg" class="" width="1004" height="80">
</div>
<!--nav begin-->
<?php
  $nav[0] = array("首页","index.php",0);
  $nav[1] = array("摄影之旅","club.php",10);
  $nav[2] = array("摄影课程","club.php",20);
  $nav[3] = array("公益活动","club.php",15);
  $nav[4] = array("关于我们","club.php",17);
  $nav[5] = array("会员中心","club.php",0);
?>
<div id="orgTab" name="orgTab" class="org_bg" style="display: block;">
<?php
$arr = $nav;
foreach ($arr as $value) {
?>
    <div class="floatleft">
    	<div class="title_c"><a href="<?php echo $value[1];?>"><?php echo $value[0];?></a></div>
    </div>
<?php
}
?>
</div>
<!--nav end-->
