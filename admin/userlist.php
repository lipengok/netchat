<?php  
session_start();
include("../conn.php");
header('content-type:text/html;charset=utf-8');   
?>


 

<!DOCTYPE html>
<html>
<head>
	<title> 注册用户管理</title>
	<link rel="stylesheet" href="css/gzf.css"> 
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	 
 
</head>

<body> 
 
 

	 
		 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  colspan="2" >
注册用户管理</td>
 </tr>
<tr >
<td  align="right"><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#ccc" align="center" style="margin-top:8px">
					              <tr align="center" bgcolor="#FAFAF1" height="22">
					                  <td>用户名</td>
					                  <td>姓名</td>
					                  <td>性别</td>
					                  <td>电话</td>
									  <td>QQ</td>
									   <td>地址</td>
					                  <td align=left>操作</td>
					              </tr>
								  <?php
					              $sql="select * from userinfo   order by id DESC";


			$result=mysql_query($sql,$conn);
			while($data=mysql_fetch_array($result))
{
?>
								  <tr align='center' bgcolor="#FFFFFF" height="22">
									  <td> <?php echo $data[username]?></a></td>
									  <td> <?php echo $data[xingming]?><br/></td>
									   <td> <?php echo $data[sex]?><br/></td>
									   
									   
									   <td> <?php echo $data[tel]?></a></td>
									  <td> <?php echo $data[qq]?><br/></td>
									   <td> <?php echo $data[dizhi]?><br/></td>
									  
									  <td align=left><a href="del.php?id=<?php echo $data[Id]?>&tn=userinfo">删除</a> </td>
								  </tr>
<?php
}
	?>
		        			</table></td>
  
 </td></tr>
 

    </table>
	</form>
 
</body>