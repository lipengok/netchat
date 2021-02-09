<?php  
include("../conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>新闻公告管理</title>
              <link href="css/gzf.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
 <table class="myTab" cellpadding="4" cellspacing="1">
<tr class="myTRHead">
 <td class="myTDHead"  >
新闻公告管理 </td>
 </tr>
            <tr class="myTRHead">
            <td   align="left">
 <tr>
    <td align="left">
           <table cellspacing="0" cellpadding="4" border="0"  style="color:#333333;width:830px;border-collapse:collapse;text-align: left">
		<tr>
       <th align="left" scope="col">标题</th>
       <th align="left" scope="col">发布人</th>
 
       <th align="left" scope="col">发布时间</th>
      
        <th scope="col">操作</th>

		</tr>
 <?php
 $sql="select * from  xinwen order by id DESC";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $data[mingcheng]?></td>
<td><?php echo $data[faburen]?></td>
 
<td><?php echo $data[shijian]?></td>
 
 <td><a href=xinwen.php?action=mod&id=<?php echo $data[Id]?>&tn=xinwen">修改</a>   <a href="del.php?id=<?php echo $data[Id]?>&tn=xinwen" onClick="return confirm('真的要删除？')">删除</a></td>
		  </tr>
		   <?php 
		    }
		      ?>
		      </table>
     </div>
</body>
</html>

