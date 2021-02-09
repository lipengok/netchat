<?php 
require 'header.php';
include("conn.php");
$lx=$_GET[lx];
$bt="";
 
	$sql="select * from  xinwen  order by id desc";
 
$result=mysql_query($sql,$conn);
?>
 <!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <link href="css/Maste.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/BK.css" type="text/css"></link>
		 
	</head>
	
  <body>
   <div class="cls">	 </div>
<div class="box"> 
     <div class="newcontain">
 
  <div class="listr  ">
  <div class="BiaoTi"><h2> 
新闻公告 </h2></div>
      
	
	<ul>
   
   <?php
 
		
while($data=mysql_fetch_array($result))
{
   ?>
	
    <li>    <a  href='xinwend.php?id=<?php echo $data[Id]?>'><span>[<?php echo $data[shijian]?>]</span><?php echo $data[mingcheng]?> </a></li>
  
   
	
	   <?php 
	  }
	  ?>
	 </ul>
	
        
   
  </div>
</div>
  </div>
	</body>