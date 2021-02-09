<?php 
require 'header.php';
include("conn.php");
$lx=$_POST[skey];
$bt="查询结果";
 
	
$sql="select * from  shiping  where mingcheng like'%".$lx."%' order by id desc";
 
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
    <div class="box">
    
      <div class="blank"></div>


  
        
 

  <div class="BiaoTi"><h2> 
     查询结果 </h2></div>
      <center>
     <div class="tit1">
      <ul> 

       
    <?php
    
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
    ?>  
          <li class=Licss><a href='play2.php?id=<?php echo $data[id]?>'><img src='<?php echo $data[pic]?>' style="height: 270px; width: 220px" /></a>
     <span class="TCspan"><?php echo $data[mingcheng]?>
      
     
          </li> 
       <?php 
      }
      ?>
    
 
      </ul>       
 </div>
 
 
 </center>
    </div>
	</body>