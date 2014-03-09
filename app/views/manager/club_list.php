<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<link rel="StyleSheet" href="manager/css/style.css" type="text/css"/>
<script language="javascript" type="text/javascript" src="js/Calendar3.js" ></script>
</head>
<body>
<div class="content">
    <div id="main" class="main">
        <div id="gamefeatures"><h2><?php echo $type ;?>列表</h2></div>
        <table class="GF-listTab">
            <tbody>
            <tr id="title">
                <td>ID</td>
                <td>标题</td>
                <td>日期</td>
                <td>状态</td>
                <td>简介</td>
                <td>操作</td>
            </tr>
		<?php
		$i = 0;
		foreach ($list as $item){
			$class = $i%2==0 ? 'trstyle1' : 'trstyle2';
			$state = $item['state']==0 ? '未开始':'已结束';
			$tips="&nbsp;" ;
			if($item['state']==0){
				$tips	=	"<a href='?dir=manager&control=club&action=up2&id=$item[id]'>活动结束</a>&nbsp;-&nbsp;" ;
				$tips	.=	"<a href='?dir=manager&control=img&action=add&id=$item[id]'>图片管理</a>" ;
			}
			echo "<tr class='$class'><td>$item[id]</td><td><a href='?dir=manager&control=club&action=up&t=$t&id=$item[id]'>$item[title]</a></td>"
	."<td>$item[sdate]</td><td>$state</td><td>$item[info]</td><td>$tips</td></tr>" ;
		$i++;
		}
		?>
		</table>
	</div>
</div>
</body>
</html>