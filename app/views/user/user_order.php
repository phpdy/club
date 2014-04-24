<link type="text/css" href="./css/style.css" rel="stylesheet">

<!--main begin-->
<div class="main">
<div class="apply_sub">我的订单</div>
<?php
include './comm/user_left.php';
?>

	<div class="rmain">
	<div class="jpk">
    <form name="form" id="form" method="post" action="user.php?action=pwdSubmit">
      <div class="apply_sheet">
	  <table class="order">
	   <?php 
		//print_r($orderlist) ;
	   foreach($orderlist as $order){?>
        <tr>
		<td><img src="<?php echo $order['hd']['thumb']; ?>" width="120" height="80"/></td>
		<td style="text-align:left;">
		<?php 
		echo "支付订单：".$order['orderid'] ."&nbsp;<br/>"
	   ."活动名称：<b>". $order['hd']['title'] ."</b>&nbsp;<br/>"
	   ."活动时间：". $order['hd']['startdate'] ."日至".  $order['hd']['closedate'] ."日&nbsp;<br/>"
	   //."支付方式：". $order['paytype'] ."&nbsp;<br/>"
	   ."活动金额：". $order['money'] ." 元&nbsp;<br/>"
	   //."状态：". $order['state'] 
	   ;
		?>
		</td>
		</tr>
		<?php } ?>
		</table>
      </div>
    </form>
    </div>
	</div>
</div>
<!--main end-->
