<?php
session_start();
error_reporting(0); 
  include("fun.php");
   mysql_query('set names utf8');
 include("conn.php");
  $SQL="select * from userinfo where username='".$_SESSION[username]."'";
  
   $sql=mysql_query($SQL,$conn);
   
$info=mysql_fetch_array($sql);
 
 
$username=$info[username];
$pwd=$info[pwd];
$xingming=$info[xingming];
$sex=$info[sex];
$tel=$info[tel];
$qq=$info[qq];
$dizhi=$info[dizhi];

$yuanbao=$info[yuanbao];



 $pic=$info[pic];
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
 if ($_GET['action'] == 'mod') 
 { 
 $username=$_POST[username];
$pwd=$_POST[pwd];
$xingming=($_POST[xingming]);
$sex=$_POST[sex];
$tel=$_POST[tel];
$qq=$_POST[qq];
$dizhi=$_POST[dizhi];
 
	$_SESSION[username]=$username; 
   echo "<script>alert('恭喜，操作成功!');window.location='UserInfo.php';</script>";

 }
 
 echo    $uploadfile;
 ?>
<body>
 
<?php 
require 'header.php';   
?>

  <link href="CSS/login.css" rel="stylesheet" type="text/css" />
   <div class="cls">	 </div>
 
<div id="login">

	<form method="post" name="login" enctype="multipart/form-data"  action="UserInfo.php?action=mod">
		<dl>
			<dt></dt>
			 <center>
				<img   src="<?php echo $pic?>" height="100" width="100" style="border-radius:50px 50px 50px 50px"> 
			 </center>
			 
			
			
			<dd><span class="param-name">用户名：</span><input type="text" name="username" autocomplete="off" value= <?php echo $username;?>  readonly class="text"  ></dd>
		  <dd><span class="param-name">密码：</span><input type="password" name="pwd" autocomplete="off" value= <?php echo $pwd;?>   class="text"  ></dd>
			<dd><span class="param-name">姓名：</span><input type="text" name="xingming" autocomplete="off" value= <?php echo $xingming;?>  class="text"  ></dd>
				<dd><span class="param-name">性别：</span><select name="sex" class="xiala"> 
  <option value="男">男</option>
  <option value="女">女</option>
  
</select></dd>
				
				
			 
				<dd><span class="param-name">电话：</span><input type="text" name="tel" autocomplete="off"  value= <?php echo $tel;?> class="text"  ></dd>
				<dd><span class="param-name">QQ：</span><input type="text" name="qq" autocomplete="off"  value= <?php echo $qq;?> class="text"  ></dd>
				<dd><span class="param-name">地址：</span><input type="text" name="dizhi" autocomplete="off" value= <?php echo $dizhi;?> class="text"  ></dd>
				<dd><span class="param-name">头像：</span><input type="hidden" name="MAX_FILE_SIZE" value="2000000">
				<input type="file" name="file"  id="file" class="text"  ></dd>
		<dt></dt>
			<dd><input type="submit" value="修改" class="button" />  </dd>
		</dl>
	</form>
</div>
</body>