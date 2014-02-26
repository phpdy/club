<div id="header">

<div id="navbox">
	<div>
<!--	<img style="display:block;border-bottom:1px #CDCDCD solid" src="./images/top.jpg" class="" width="960" height="80">-->
	<img src="./images/top.jpg" class="" width="960" height="75">
	</div>
	<span class="topbar">
	<a href="#">登录</a> | <a href="#">注册</a>
	</span>
	<?php 
		$title = array(
			0	=> '首页' ,
			1	=> '摄影之旅' ,
			2	=> '摄影课程' ,
			3	=> '公益活动' ,
			4	=> '关于我们' ,
			5	=> '会员中心' ,
		) ;
	?>
	<ul class="mainnav">
		<?php 
		$t = $_GET['t'] ;
		$t = empty($t)?0:$t ;
		foreach ($title as $key=>$value){
			if ($t==$key){
				echo "<li>$value</li>" ;
			} else {
				echo "<li><a href=\"index.php?t=$key\">$value</a></li>" ;
			}
		}
		?>
	<!-- 
		<li>摄影课程</li>
		<li><a href="index.php?t=2">公益活动</a></li>
		<li><a href="index.php?t=3">关于我们</a></li>
		<li><a href="index.php?t=4">会员中心</a></li>
	 -->
	</ul>
</div>
</div>
