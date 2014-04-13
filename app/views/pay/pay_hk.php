<link type="text/css" href="./css/order.css" rel="stylesheet">

<div id="mainbody">
	<div class="main_new">
	<div class="main_new_nav">
		<span><a href="index.php">首页</a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span>活动报名</span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span>订单</span>
	</div>
	<div class="main_content">
	<table class="order">
		<tr><td>订单信息</td><td>&nbsp;</td></tr>
		<tr><td>订单号：</td><td><?php echo $order['orderid']; ?></td>	</tr>
		<tr><td>金额：</td><td><?php echo $order['money']; ?></td>	</tr>
		<tr><td>订单日期：</td><td><?php echo $order['paydate'] ; ?></td></tr>
		<tr><td>支付方式：</td><td><?php echo $order['paytype'] ; ?></td></tr>
	</table>
	<table class="order">
		<tr><td>您的订单已经提交，您选用的是汇款的方式付款，请尽快付款，并牢记订单号，汇款后联系客服。</td></tr>
	</table>
	</div>
	
	</div>
</div>
