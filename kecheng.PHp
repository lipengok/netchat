<?php 
require 'header.php';
include("conn.php");
 
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
 <div class="newcontain">
      <div class="blank"></div>
  
  <div class="BiaoTi"><h2> 课程信息</h2></div>
   
	
	 <div class="tit1">
      <ul> 

       <?php 
       $sql1="select * from   kecheng ";
 	 $result1=mysql_query($sql1,$conn); 
 	 $i=0;  
	while($data=mysql_fetch_array($result1))
	{
		 
       ?>


<li class=Licss>  


     <a href='kechengd.php?id=<?php echo $data[id]?>'><img src='<?php echo $data[pic]?>' style="height: 270px; width: 220px" /></a>
     <span style="margin: 0px;     padding: 0px;     display: block;     position: absolute;     width: 200px;     height: 60px;     background: #f77fa0;     bottom: 24px;     left: 22px;     filter: alpha(opacity=90);     -moz-opacity: 0.9;     opacity: 0.9;     color: #FFFFFF;     font-size: 18px;     font-family: "微软雅黑";     line-height: 33px;">
     
     
     <?php echo $data[migncheng]?>
      
     </span>
      </li> 
      <?php  
     }
     ?>
      </ul>       
 </div>



 
</div>
  </div>
</div>
  </div>
	</body>