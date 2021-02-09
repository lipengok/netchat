<?php 
require 'header.php';
include("conn.php");
$BK=$_GET[bk];
 $sql="select * from   tiezi where bk='".$BK."' order by id desc";
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
		 <style type="text/css">
        .style2
    {
        font-size: 18pt;
    }
        .style4
        {
            width: 69px;
        }
    </style>
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
        }
            .style5
            {
                font-size: 14pt;
            }
            .style6
            {
                width: 100%;
            }
    </style> 
	</head>
	
  <body>
 <div class="newcontain">
      <div class="blank"></div>
  
  <div class="BiaoTi"><h2> 
      视频信息 </h2></div>
   
	
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
  </div>
</div>
  </div>
	</body>