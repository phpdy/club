<link type="text/css" href="./css/order.css" rel="stylesheet">

<div id="mainbody">
	<div class="main_new">
	<div class="main_new_nav">
		<span><a href="index.php">首页</a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span>活动报名</span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span><?php echo $news['title'];?></span>
	</div>
	<div class="main_content">
	<table class="order">
		<form action="">
		<tr><td>会员信息</td><td>&nbsp;</td></tr>
		<tr><td>姓名：</td><td><?php echo $user['username']; ?></td>	</tr>
		<tr><td>性别：</td><td><?php echo $user['sex']==0?'女':'男'; ?></td>	</tr>
		<tr><td>地址：</td><td><?php echo $user['province'].' '.$user['city'].' '.$user['address']; ?></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td>活动信息</td><td>&nbsp;</td></tr>
		<tr><td>活动：</td><td><?php echo $news['title']; ?></td></tr>
		<tr><td>&nbsp;</td><td><img src="<?php echo $news['thumb']; ?>" width=120 /></td></tr>
		<tr><td>活动日期：</td><td><?php echo $news['startdate']." - ".$news['closedate'] ; ?></td></tr>
		<tr><td>活动费用：</td><td><?php echo $news['fee']; ?></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="确认报名"></td></tr>
		<input type=hidden name="id" value="<?php echo $id;?>"/>
		<input type=hidden name="t" value="<?php echo $_GET['t'];?>"/>
		</form>
	</table>
	<?php 
//	print_r($news) ;
	?>
	</div>
	
	<div class="main_daily">
		<div style="background:#999; font-size:16px;">活动排期</div>
		<?php include 'daily.php';?>
	</div>
	</div>
</div>