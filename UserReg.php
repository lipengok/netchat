<?php
session_start();
error_reporting(0); 
if ($_GET['action'] == 'reg') {
 
 include("conn.php");
 include("fun.php");
 $username=$_POST[username];
$pwd=$_POST[pwd];
$xingming=($_POST[xingming]);
$sex=$_POST[sex];
$tel=$_POST[tel];
$qq=$_POST[qq];
$dizhi=$_POST[dizhi];
 $exname=strtolower(substr($_FILES['file']['name'],(strrpos($_FILES['file']['name'],'.')+1)));
$uploadfile = getname($exname);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
if(trim($_FILES['file']['name']!=""))
 {
  $uploadfile=$uploadfile;
}
else
 {
  $uploadfile="";
 }
 $sql=mysql_query("select * from userinfo where username='".$username."'",$conn);
$info=mysql_fetch_array($sql);
if($info==true)
 {
 
  echo "<script>alert('用户名已经存在，请重新输入!');window.location='UserReg.php';</script>";
   
    exit;
 }
 else
 {$sql="insert into userinfo (username,pwd,xingming,sex,tel,qq,dizhi,pic) values ('$username','$pwd','$xingming','$sex','$tel','$qq','$dizhi','$uploadfile')";
    mysql_query($sql,$conn); 
	$_SESSION[username]=$username; 
   echo "<script>alert('恭喜，注册成功!');window.location='index.php';</script>";
 }
 }
 ?>
 
 
<?php 
require 'header.php';   
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		  <link href="CSS/index.css" rel="stylesheet" type="text/css" />
		  <link href="CSS/DaoHan.css" rel="stylesheet" type="text/css" />
		  <script language="javascript"  charset="utf-8"></script>
	</head>
	
  <link href="CSS/login.css" rel="stylesheet" type="text/css" />
   <div class="cls">	 </div>
 <body>
<div id="login">

	<form method="post" name="login" enctype="multipart/form-data" action="UserReg.php?action=reg">
		<dl>
			<dt></dt>
			<dd><span class="param-name">用户名：</span><input type="text" name="username" autocomplete="off" placeholder="请输入用户名"  required="required" class="text"  ></dd>
		 <dd><span class="param-name">密码：</span><input type="password" name="pwd" autocomplete="off" placeholder="请输入密码" required="required" class="text"  ></dd>
			<dd><span class="param-name">姓名：</span><input type="text" name="xingming" autocomplete="off" placeholder="请输入姓名" class="text"  ></dd>
			<dd><span class="param-name">性别：</span>	<select name="sex" class="xiala"> 
  <option value="男">男</option>
  <option value="女">女</option>
  
</select></dd>
				
				
			 
				<dd><span class="param-name">电话：</span><input type="text" name="tel" autocomplete="off" placeholder="请输入电话" class="text"  ></dd>
				<dd><span class="param-name">QQ：</span><input type="text" name="qq" autocomplete="off" placeholder="请输入QQ" class="text"  ></dd>
				<dd><span class="param-name">地址：</span><input type="text" name="dizhi" autocomplete="off" placeholder="请输入地址" class="text"  ></dd>
				<dd><span class="param-name">头像：</span><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
				<input type="file" name="file"  id="file" class="text"  ></dd>
		<dt></dt>
			<dd><input type="submit" value="注册" class="button" />  </dd>
		</dl>
	</form>
</div>
</body>