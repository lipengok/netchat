<?php  
session_start();
require 'header.php';   

 if ($_GET['action'] == 'login')
 {
 
 include("conn.php");
 $username=$_POST[username];
$pwd=$_POST[pwd];
$sql=mysql_query("select * from userinfo where username='".$username."' and pwd='".$pwd."'",$conn);
$info=mysql_fetch_array($sql);

if($info==true)
 {

$_SESSION[username]=$username; 
  
    echo "<script>alert('恭喜，登录成功!');window.location='index.php';</script>";
    exit;
 }
 else
 { 
 

   echo "<script>alert('用户名或者密码错误!');window.location='UserLogin.php';</script>";
 }

}
?>
<body> 
  <link href="CSS/login.css" rel="stylesheet" type="text/css" />
   <div class="cls">	 </div>
 
<div id="login">

	<form method="post" name="login" action="UserLogin.php?action=login">
		<dl>
			<dt></dt>
			<dd><input type="text" name="username" autocomplete="off" placeholder="请输入用户名"  required="required"class="text"  ></dd>
		<dd><input type="password" name="pwd" autocomplete="off" placeholder="请输入密码"  required="required" class="text"  ></dd>
		<dt></dt>
			<dd><input type="submit" value="登录" class="button" />  </dd>
		</dl>
	</form>
</div>
</body>