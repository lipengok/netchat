<?php 
require 'header.php';
include("conn.php");

?>
 <!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    <link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.min.js" type="text/javascript"></script>

<script>
    jQuery(function($) {
        $('#demo1').slideBox();

    });
</script>   
		 
<link href="css/main.css" rel="stylesheet">
    <link href="css/Maste.css" rel="stylesheet" type="text/css" />
	</head>
	
  <body>
    <div class="box">
    
      <div class="blank"></div>


 <div class="news left">
    
   <div id="demo1" class="slideBox" >
  <ul class="items">
  <?php
  $sql="select * from  xinwen where  LENGTH(pic)>=2  order by id DESC limit     0,5";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
  ?>
     <li ><a  href='xinwend.php?id=<?php echo $data[Id]?>' title=<?php echo $data[mingcheng]?>><img src='<?php echo $data[pic]?>'  width="499" height="280"> </a></li>     
    </ItemTemplate>
     
    <?php 
   }
   ?>
  </ul>
</div>  
 <div class="announce right">
    <h3><span> </span>热门新闻</h3>
    <ul>
    
    <?php
 $sql="select * from  xinwen order by id DESC";
$result=mysql_query($sql,$conn);
while($data=mysql_fetch_array($result))
{
    ?>  
	
	  <li>    <a  href='xinwend.php?id=<?php echo $data[Id]?>'><?php echo $data[mingcheng]?> </a></li>
    
    </ItemTemplate>
    <?php 
   }
   ?>
    
     
    </ul>
  </div> 
  
</div> 


 <div class="blank"></div>
 
  
  </div>
     <div class="newcontain">
        
 

  <div class="BiaoTi"><h2> 
     最新视频 </h2></div>
      <center>
     <div class="tit1">
         <ul> 

       <?php 
     $sql1="select * from   shiping ";
 	 $result1=mysql_query($sql1,$conn); 
 	 $i=0;  
	while($data=mysql_fetch_array($result1))
	{
		 
       ?>


     <li class=Licss><a href='Play2.php?id=<?php echo $data[id]?>'><img src='<?php echo $data[pic]?>' style="height: 270px; width: 220px" /></a>
     <span style="margin: 0px;     padding: 0px;     display: block;     position: absolute;     width: 200px;     height: 60px;     background: #f77fa0;     bottom: 24px;     left: 22px;     filter: alpha(opacity=90);     -moz-opacity: 0.9;     opacity: 0.9;     color: #FFFFFF;     font-size: 18px;     font-family: "微软雅黑";     line-height: 33px;"><?php echo $data[mingcheng]?>
      
     </span>
      </li> 
      <?php  
    }
    ?>
      </ul> 
 </div>
 
 
 </center>
    </div>
	</body>