
<div id="mainbody">
	<div class="topimg">
		<div class="topimg_text" style="background: url(<?php echo $hd['bigimg']; ?>)"><?php echo $hd['text']; ?></div>
	</div>
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
					<a href="news.php?t=<?php echo $t;?>&id=<?php echo $id;?>">
					<li class="shey_img"><img src="<?php echo $imgurl ;?>" /></li>
					<li class="shey_txt"><?php echo $info ;?> >></li>
					</a>
					<li>&nbsp; <?php echo $times ;?></li>
				</ul>
			<?php }?>
			</div>
		</div>
	</div>
	
<?php }?>
