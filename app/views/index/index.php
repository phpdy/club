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
	<div class="mainc_img" id="img_0"></div>
	<div class="more" id="more0"><b>更多摄影作品展示</b>></div><input type="hidden" id="p0" name="p0" value=0>
	
	<div class="mainc_img" id="img_1"></div>
	<div class="more" id="more1"><b>更多过往活动花絮</b>></div><input type="hidden" id="p1" name="p1" value=0>
	
</div>
</div>

<!--main end-->

<script src="js/jquery-1.9.1.min.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript">
$(function(){
	<?php for($i=0;$i<2;$i++){?>
	$("#more<?php echo $i;?>").click(function(){
		var p = $('#p<?php echo $i;?>').val() ;
		//alert(p) ;

		$.get("./index.php",{action:"more",o:"json", t:<?php echo $i+4;?>, p:p},
			function(data){
//			alert(data) ;

			var data = eval("["+data+"]") ;
			var list = data[0]["list"] ;
			for(var i=0;i<list.length;i++){
				var item = list[i] ;
				html = "<a href='news.php?t=0&id="+item["id"]+"'>"+
				"<ul><li class='shey_img'><img src='"+item["imgurl"]+"' /></li>"+
				"<li class='shey_txt'>"+item["desc"]+" >></li>"+
				"<li>&nbsp;</li>"+
				"</ul></a>";
//				alert(html) ;
				$('#img_<?php echo $i;?>').append(html) ;
			}

//			if(data[0]["hasmore"]){
				$('#p<?php echo $i;?>').val(parseInt(p)+1) ;
//			} else {
//				$('#more<?php echo $i;?>').hide() ;
//			}
			
		});
		return true ;
	});
	
	$("#more<?php echo $i;?>").click();
	<?php }?>
});
</script>