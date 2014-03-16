<div id="mainbody">
	<div class="main_new">
	<div class="main_new_nav">
		<span><a href="index.php">首页</a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span><a href="index.php?t=<?php echo $t;?>"><?php echo $title[$t];?></a></span>&nbsp;&nbsp;>>&nbsp;&nbsp;
		<span><?php echo $news['title'];?></span>
	</div>
	<?php 
	//print_r($result) ;
	echo $result['content'] ;
	?>
	</div>
</div>

