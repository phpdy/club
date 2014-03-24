<div id="mainbody">
	<div class="main_new">
	<div class="main_new_nav">
		<span><a href="index.php">首页</a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<?php if(in_array($t, array(1,2,3))){ ?>
		<span><a href="index.php?t=<?php echo $t;?>"><?php echo $title[$t];?></a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<?php } ?>
		<span><?php echo $news['title'];?></span>
	</div>
	<div class="main_content">
	<?php 
	echo $result['content'] ;
	?>
	</div>
	
	<div class="main_daily">
		<?php include 'daily.php';?>
	</div>
	</div>
	
</div>

