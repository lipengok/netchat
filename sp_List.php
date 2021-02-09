<?php  
session_start();
require 'header.php';
date_default_timezone_set("PRC");
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<html>
  <head>
    <base href="<%=basePath%>">
   <title>视频管理页面</title>
             <style type="text/css"> 
       .table 
       {
           width: 1000px;;
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        .table thead tr th,
        .table tbody tr td {
            padding: 8px 12px;
          
            color: #333;
            border: 1px solid #ddd;
            border-collapse: collapse;
            background-color: #fff;
			font-size: 14pt;
        }
            .style5
            {
                font-size: 14pt;
            }
            .style6
            {
                width: 100%;
            }
			.text
  { width: 250px;
 height: 25px;
}
    </style> 
	 <link href="css/Maste.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

  <div class="newcontain">
      <div class="blank"></div>
  
  <div class="BiaoTi"><h2> 课程信息</h2></div>
 
           <table cellspacing="0" cellpadding="4" border="0"  class="table">
		<tr>
       <td>视频名称</td>
     
       <td>发布人</td>
 
       <td>发布时间</td>
 
         <td>操作</td>

		</tr>
 <?php
 $sql="select * from shiping where faburen='".$_SESSION[username]."'";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
?>
		<tr>
<td><?php echo $data[mingcheng]?></td>
 
<td><?php echo $data[faburen]?></td> 
<td><?php echo $data[shijian]?></td>

<td><a href=sp.php?action=mod&id=<?php echo $data[id]?>&tn=shiping">修改</a>   <a href="del.php?id=<?php echo $data[id]?>&tn=shiping" onClick="return confirm('真的要删除？')">删除</a></td>
		  </tr>
		   <?php 
		    }
		      ?>
		      </table>
     </div>
</body>
</html>

