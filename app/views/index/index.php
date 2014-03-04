<!--main begin-->
<div id="mainbody">
	<div class="topimg"><img src="./img/001.jpg" width="960" height="600" alt=""></div>
	<div id="mainc">
		<?php 
		for($i=0;$i<3;$i++){
		?>
		<div class="fenlei">
			<ul>
				<li style="background:#000;color:#fff">
					<img src="./img/010.jpg" width="280" />
					2014年4月23日-5月4日 “沿着亚当斯的足迹”美西摄影集训（满员，可候补）
				</li>
				
				<?php for($h=0;$h<3;$h++){
				?>
				<li>
					<div class="list">
						<span class="list_s"><img src="./img/020.jpg" /></span>
						<span class="list_s">2014年4月23日-5月4日 “沿着亚当斯的足迹”美西摄影集训（满员，可候补）</span>
					</div>
				</li>
				<?php }?>
			</ul>
		</div>
		<?php } ?>
	</div>
</div>


<div id="mainbody2">
<div id="mainc2">
	<div class="mainc_title">和我们一起探索美妙的摄影世界</div>
	<hr>
	<div class="mainc_img">
	<?php for($i=0;$i<=3;$i++){?>
		<ul>
			<li><img src="./img/03<?php echo $i;?>.jpg"/></li>
			<li>&nbsp; 纽摄中国学员优秀作品视频华丽上映！</li>
			<li>&nbsp;</li>
		</ul>
	<?php }?>
	</div>
	<div class="more"><b>更多摄影作品展示</b>></div>
	
	<div class="mainc_img">
	<?php for($i=0;$i<=3;$i++){?>
		<ul>
			<li><img src="./img/03<?php echo 3-$i;?>.jpg"/></li>
			<li>&nbsp; 2014年1月14日-19日吉林雾凇冰雪高端摄影实践花絮</li>
			<li>&nbsp;</li>
		</ul>
	<?php }?>
	</div>
	<div class="more"><b>更多过往活动花絮</b>></div>
	
</div>
</div>

<!--main end-->
<div style="clear:both;"></div>
