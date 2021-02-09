<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
session_start();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>后台管理系统</title>
<link type="text/css" rel="stylesheet" href="css/left.css" />
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript">
function currentTime(){
var d = new Date(),str = '';
 str += d.getFullYear()+'年';
 str  += d.getMonth() + 1+'月';
 str  += d.getDate()+'日';
 str += d.getHours()+'时'; 
 str  += d.getMinutes()+'分'; 
str+= d.getSeconds()+'秒'; 
return str;
}
setInterval(function(){$('#time').html(currentTime)},1000);
  
</script>
</head>

<body>
<div class="top"></div>
<div id="header">
	<div class="logo">后台管理 <font size="2px">当前时间:<span id="time"></span></font></div>
	<div class="navigation">
		<ul>
		 	<li>欢迎您！</li>
			<li><a href="#">管理员</a></li>
			<li><a href="../logout.php" target="_top">退出</a></li>
		</ul>
	</div>
</div>