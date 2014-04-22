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
	   <?php 
		//print_r($orderlist) ;
	   foreach($orderlist as $order){?>
        <div class="apply_t1">
		<img src="<?php echo $order['hd']['thumb']; ?>" width="120" height="80"/>
		<?php 
		echo "订单号：".$order['orderid'] ."&nbsp;<br/>"
	   ."活动名称：". $order['hd']['title'] ."&nbsp;<br/>"
	   ."活动时间：". $order['hd']['startdate'] ."-".  $order['hd']['closedate'] ."&nbsp;<br/>"
	   ."支付方式：". $order['paytype'] ."&nbsp; 金额：". $order['money'] 
	   ."状态：". $order['state'] ;
		?>
		</div>
		<?php } ?>
      </div>
    </form>
    </div>
	</div>
</div>
<!--main end-->
