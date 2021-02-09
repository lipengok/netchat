<?php  
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>留言管理</title>
              <link href="css/gzf.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  >
留言管理 </td>
 </tr>
            <tr class="myTRHead">
            <td   align="left">
 <tr>
    <td align="left">
           <table cellspacing="0" cellpadding="4" border="0"  style="color:#333333;width:830px;border-collapse:collapse;text-align: left">
		<tr>
       <th align="left" scope="col">留言人</th>
       <th align="left" scope="col">留言内容</th>
       <th align="left" scope="col">留言时间</th>
       <th align="left" scope="col">回复内容</th>
        <th scope="col">操作</th>

		</tr>
 <?php
 $sql="select * from tliuyan order by id DESC";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $data[username]?></td>
<td><?php echo $data[lneirong]?></td>
<td><?php echo $data[lshijian]?></td>
<td><?php echo $data[huifu]?></td>
 <td><a href=tliuyan.php?action=mod&id=<?php echo $data[id]?>&tn=tliuyan">回复</a>   <a href="del.php?id=<?php echo $data[id]?>&tn=tliuyan" onClick="return confirm('真的要删除？')">删除</a></td>
		  </tr>
		   <?php 
		    }
		      ?>
		      </table>
     </div>
</body>
</html>

