<?php  
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>管理员管理页面</title>
              <link href="css/gzf.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  >
管理员管理 </td>
 </tr>
            <tr class="myTRHead">
            <td   align="left">
 <tr>
    <td align="left">
           <table cellspacing="0" cellpadding="4" border="0"  style="color:#333333;width:830px;border-collapse:collapse;text-align: left">
		<tr>
       <th align="left" scope="col">用户名</th>
       <th align="left" scope="col">密码</th>
        <th scope="col">操作</th>

		</tr>
 <?php
 $sql="select * from admin order by id DESC";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $data[username]?></td>
<td><?php echo $data[pwd]?></td>
 <td><a href=admin.php?action=mod&id=<?php echo $data[id]?>&tn=admin">修改</a>   <a href="del.php?id=<?php echo $data[id]?>&tn=admin" onClick="return confirm('真的要删除？')">删除</a></td>
		  </tr>
		   <?php 
		    }
		      ?>
		      </table>
     </div>
</body>
</html>

