<?php  
session_start();
include("../conn.php");
header('content-type:text/html;charset=utf-8');  
if ($_GET['action'] == 'pwd')
{
 

 $pwd1=$_POST[pwd1];
$pwd2=$_POST[pwd2];
 
$pwd3=$_POST[pwd3];

if( $pwd1==$_SESSION[pwd])
{
		if( $pwd2==$pwd3)
		{
		  $SQL="update admin set  pwd='".$pwd3."' where username='".$_SESSION[username]."'"; 
			$sql=mysql_query( $SQL,$conn);
		 
		
		   $_SESSION[pwd]=$pwd3; 
		  
			echo "<script>alert('恭喜，操作成功!');</script>";
			exit;
		 }
 
 
		else
		{ echo "<script>alert('两次输入的新密码不同!');</script>";
		
		}

}
else
{  echo "<script>alert('旧密码错误!');</script>";

}
}



 
?>


 

<!DOCTYPE html>
<html>
<head>
	<title> 修改密码</title>
	<link rel="stylesheet" href="css/gzf.css">

 
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	 
 
</head>

<body> 
 
 

	<form method="post" name="login" action="PWD.php?action=pwd">
		 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  colspan="2" >
修改密码</td>
 </tr>
<tr >
<td  align="right">旧密码:</td>
    <td align="left" ><input type="password" name="pwd1" autocomplete="off"     class="text"  >
 </td></tr>
<tr >
<td  align="right">新密码:</td>
    <td align="left" ><input type="password" name="pwd2" autocomplete="off"      class="text"  >
 </td></tr>
 
 
 <tr >
<td  align="right">重复新密码:</td>
    <td align="left" ><input type="password" name="pwd3" autocomplete="off"     class="text"  >
 </td></tr>
 
 
<tr  >
    <td   align="right"></td>
    <td align="left">
                 <input type="submit" value="修改" class="button" /> 
 </td>
     </tr>

    </table>
	</form>
 
</body>