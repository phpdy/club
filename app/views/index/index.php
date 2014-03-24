<!--main begin-->
<div id="mainbody">
	<div class="topimg">
		<div class="djimg" style="background: url(./img/0001.jpg);">
			<div class="djimg_text">
				<div class="djimg_title">2014年3月14日-16日雪花纯生古建摄影大赛专业外拍--西双版纳</div>
				<div class="djimg_info">“彩云之南，我新的方向，孔雀飞去......”3月的云南温暖宜人，让我们沿着茶马古道的青石路探访群山环绕的碧溪古镇，
				漫步在万亩茶园中品味普洱茶沧桑的历史，随着傣族少女走进凤尾竹掩映的竹楼，佛院，拍摄那神奇美丽的西双版纳</div>
			</div>
		</div>
	</div>
	<div id="mainc">
		<?php 
		for($i=1;$i<=3;$i++){
			$item = @$list[$i] ;
			$first = $item[0] ;
		?>
		<div class="fenlei">
			<ul>
				<a href="news.php?t=<?php echo $i;?>&id=<?php echo $first['id'];?>">
				<li style="background:#000;color:#fff">
					<div class="tj_img"><img src="<?php echo $first['imgurl'] ;?>"/></div>
					<div class="tj_desc"><?php echo $first['desc'] ;?></div>
				</li>
				</a>
				
				<?php 
				for($h=1;$h<=3 && $h<sizeof($item);$h++){
					$club = $item[$h] ;
				?>
				<li>
					<a href="news.php?t=<?php echo $i;?>&id=<?php echo $club['id'];?>">
					<div class="list">
						<div class="list_img"><img src="<?php echo $club['imgurl'] ;?>"/></div>
						<div class="list_text"><?php echo $club['desc'] ;?></div>
					</div>
					</a>
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
	<?php foreach ($list[4] as $item){?>
		<a href="news.php?t=0&id=<?php echo $item['id'];?>">
		<ul>
			<li class="shey_img"><img src="<?php echo $item['imgurl'] ;?>"/></li>
			<li class="shey_txt"><?php echo $item['desc'] ;?></li>
			<li>&nbsp;</li>
		</ul>
		</a>
	<?php }?>
	</div>
	<div class="more"><b>更多摄影作品展示</b>></div>
	
	<div class="mainc_img">
	<?php foreach ($list[5] as $item){?>
		<a href="news.php?t=0&id=<?php echo $item['id'];?>">
		<ul>
			<li class="shey_img"><img src="<?php echo $item['imgurl'] ;?>"/></li>
			<li class="shey_txt"><?php echo $item['desc'] ;?></li>
			<li>&nbsp;</li>
		</ul>
		</a>
	<?php }?>
	</div>
	<div class="more"><b>更多过往活动花絮</b>></div>
	
</div>
</div>

<!--main end-->
