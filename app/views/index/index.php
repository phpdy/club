<!--main begin-->
<div id="mainbody">
	<div class="topimg"><img src="./img/001.jpg" width="960" height="600" alt=""></div>
	<div id="mainc">
		<?php 
		for($i=1;$i<=3;$i++){
			$item = $list[$i] ;
			$first = $item[0] ;
		?>
		<div class="fenlei">
			<ul>
				<li style="background:#000;color:#fff">
					<img src="<?php echo $first['imgurl'] ;?>" width="280" />
					<?php echo $first['desc'] ;?>
				</li>
				
				<?php 
				for($h=1;$h<=3 && $h<sizeof($item);$h++){
					$club = $item[$h] ;
				?>
				<li>
					<div class="list">
						<span class="list_s"><img src="<?php echo $club['imgurl'] ;?>" width=126 /></span>
						<span class="list_s"><?php echo $club['desc'] ;?></span>
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
	<?php foreach ($list[4] as $item){?>
		<ul>
			<li><img src="<?php echo $item['imgurl'] ;?>" width=230/></li>
			<li>&nbsp; <?php echo $item['desc'] ;?></li>
			<li>&nbsp;</li>
		</ul>
	<?php }?>
	</div>
	<div class="more"><b>更多摄影作品展示</b>></div>
	
	<div class="mainc_img">
	<?php foreach ($list[5] as $item){?>
		<ul>
			<li><img src="<?php echo $item['imgurl'] ;?>" width=230/></li>
			<li>&nbsp; <?php echo $item['desc'] ;?></li>
			<li>&nbsp;</li>
		</ul>
	<?php }?>
	</div>
	<div class="more"><b>更多过往活动花絮</b>></div>
	
</div>
</div>

<!--main end-->
