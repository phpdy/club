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
        <div id="gamefeatures"><h2><?php echo $type ;?>-添加</h2></div>
        <form method="get" action="">
            <input type="hidden" value="manager" name="dir">
            <input type="hidden" value="club" name="control">
            <input type="hidden" value="submit" name="action">
            <div id="gamemain">
            <?php include 'table.php';?>
            </div>
        </form>
    </div>
</div>
</body>
</html>