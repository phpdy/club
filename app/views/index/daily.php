<style type=text/css>

TD{
text-align:center;
font-size:16px;
background-color:#E6E6E6;
border:   #FFFFFF solid 1px;
color:#198281;
height:30px;
}
TD.title{
background-color:#9a9a9a;
color:#FFFFFF;
font-weight:bold;
}
TABLE{
border-collapse:collapse;

border-color:white;
border:   #198281 solid 1px;
}
</style>

<?php
date_default_timezone_set("Asia/Shanghai");
$today = time();
$year =@ $_GET["year"];
$month = @$_GET["month"];
if($year=='') $year = date("Y",$today);
if($month=='') $month = date("m",$today);
if((int)$month==0){$year-=1;$month=12;}
$time = mktime(0,0,0,$month,1,$year);
$year = date('Y',$time);
$month = date('m',$time);
echo "<table width=260 cellspacing=0 cellpadding=0>";

echo "<tr><td colspan=7 class=title>";
$str   = "<a href=?t=$t&id=$id&year=".($year-1)."&month=".$month.">";
$str .= "&laquo;</a> ".$year."年 ";
$str .= "<a href=?t=$t&id=$id&year=".($year+1)."&month=".$month.">";
$str .= "&raquo;</a>   ";
$str .= "<a href=?t=$t&id=$id&year=".$year."&month=".($month-1).">";
$str .= "&laquo;</a> ".$month."月 ";
$str .= "<a href=?t=$t&id=$id&year=".$year."&month=".($month+1).">";
$str .= "&raquo; </a>";
echo $str;
echo "</td></tr>";

echo     "<tr>";
$str   = "<td>一</td>";
$str .= "<td>二</td>";
$str .= "<td>三</td>";
$str .= "<td>四</td>";
$str .= "<td>五</td>";
$str .= "<td>六</td>";
$str .= "<td>七</td>";
echo $str;
echo "</td>";
//这个月有多少天
$days = date('t',$time);
//第一天是星期几
$fstdw = date('N',$time);
//要输出多少行
$rows = ceil(($days + $fstdw-1)/7);
$cd = 1;
for($i=0;$i<$rows;$i++){
echo "<tr>";
    for($j=0;$j<7;$j++){
     echo "<td>";
     if($cd >= $fstdw && $cd<$days+$fstdw){
        $oday = $cd-$fstdw+1;
        if($oday==date('d',time())){
        	echo "<b><u>";
        }
        echo ($cd-$fstdw+1);
     }else{
        echo " ";
     }
     $cd++;
     echo "</td>";
    }
echo "</tr>";
}
echo "</table>";
?>