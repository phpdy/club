
<div id="mainbody">
	<div class="topimg"><img src="<?php echo $bigimg; ?>" width="960" height="440" alt=""></div>
	<div id="mainc">
		<div>
			<div class="main-left">
				<h3><?php echo $hd['title']; ?></h3>
				<hr>
				<?php echo $hd['info']; ?>
			</div>
			<div class="main-right">
				<img src="<?php echo $hd['img']; ?>">
			</div>
		</div>
	</div>
</div>

<?php 

foreach ($list as $title=>$newslist){
	?>
	<div id="mainbody2">
		<div id="mainc2">
			<div class="mainc_title"><?php echo $title ; ?></div>
			<hr>
			<div class="mainc_img">
			<?php 
			foreach ($newslist as $news){
				$id		= $news['id'] ;
				$imgurl	= $news['imgurl'] ;
				$info 	= $news['title'] ;
				$times 	= $news['date'] ;
				?>
				<ul>
					<li><img src="<?php echo $imgurl ;?>" width=230 /></li>
					<li>&nbsp; <?php echo $info ;?> >></li>
					<li>&nbsp;</li>
					<li>&nbsp; <?php echo $times ;?></li>
				</ul>
			<?php }?>
			</div>
		</div>
	</div>
	
<?php }?>
