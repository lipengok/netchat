<?php  
session_start();
include("../conn.php");
header('content-type:text/html;charset=utf8');  
if ($_GET['action'] == 'login')
{
 

 $username=$_POST[name];
$pwd=$_POST[pwd];
echo  $username;
echo  $pwd;

$sql=mysql_query("select * from admin where username='".$username."' and pwd='".$pwd."'",$conn);
$info=mysql_fetch_array($sql);

if($info==true)
 {

$_SESSION[username]=$username; 
		$_SESSION[uname]=$username; 
  $_SESSION[pwd]=$pwd; 
    echo "<script>alert('恭喜，登录成功!');window.location='Index.html';</script>";
    exit;
 }
 else
 { 
 

   echo "<script>alert('用户名或者密码错误!');window.location='login.php';</script>";
 }

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>后台管理</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/jquery.js"></script>
<script src="js/cloud.js" type="text/javascript"></script>

<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  ß
</script> 

</head>

<body style="background-color:#df7611; background-image:url(images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">



    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  


<div class="logintop">    
    <span>后台管理</span>    
    <ul>
    <li><a href="#"> </a></li>
    <li><a href="#"> </a></li>
    <li><a href="#"> </a></li>
    </ul>    
    </div>
    
    <div class="loginbody">
    
    <span class="systemlogo"></span> 
       
    <div class="loginbox">
   <form method="post" name="login" action="login.php?action=login">
    <ul>
    <li><input name="name" type="text" class="loginuser" value="" onclick="JavaScript:this.value=''"/></li>
    <li><input name="pwd" type="password" class="loginpwd" value="" onclick="JavaScript:this.value=''"/></li>
	
    <li><input name="" type="submit" class="loginbtn" value="登录"    /><label><label></label></li>
    </ul>
      </form>
    
    </div>
    
    </div>
    
    
    
    <div class="loginbm"> </div>
	
    
</body>

</html>
