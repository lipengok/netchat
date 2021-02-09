<?php
session_start();
require 'header.php';
include("conn.php");
$id=$_GET[id];
$sql="select * from  shiping where id='".$id."'";
$sql=mysql_query($sql,$conn);

$info=mysql_fetch_array($sql);
$mingcheng=$info[mingcheng];

$jieshao=$info[neirong];
$username=$info[faburen];


$dizhi=$info[dizhi];
$shiian=$info[shijian];





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
       .table
       {
           width: 1000px;
            border: 1px solid #000;
            border-collapse: collapse;
            font: 15px "微软雅黑";
        }

        .table tbody tr th,
        .table tbody tr td {
            padding: 8px 12px;
          
            color: #333;
            border: 1px solid #ddd;
            border-collapse: collapse;
            background-color: #fff;
                font: 15px "微软雅黑";
        }
            .jdtxt
            {
              border: 1px solid #ddd;
			height:30px;
            }
            .btn {
    font-size: 14px;
    text-decoration: none;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    border: 1px solid #ddd;
    border: 1px solid #3dbb2b;
    color: #fff;
    background-color: #3dbb2b;
    margin-left: 4px;
    cursor: pointer;
    border-radius: 4px;
    transition: all .2s;
    padding: 0 20px;
}

            
            </style> 
	</head>
	
  <body>
 <div class="newcontain">
      <div class="blank"></div>
  
  <div class="BiaoTi"><h2> 
视频信息</h2></div>
   
 
 <video id="example_video_1" autoplay="autoplay" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="none" width="700" height="500"  data-setup="{}">
         <source src='<?php echo  $dizhi?>'</source> type='video/mp4' />
		<span> <?php echo  $jieshao?> </span> 
 </div>

<center>
 <div style="color:#fff;background:#70BB2D ;height:34px;line-height:34px;
font-size:18px;font-family:微软雅黑;padding-left:20px;letter-spacing:2px;margin-top: 20px; width: 980px;text-align:left">
评论信息   
</div>
 
 <table class="table" cellspacing="0" cellpadding="0" align="center"> 
		<tr>
	<td class="style5">	  
	
 
		 </td>
  </tr>	
			 <?php
			 
			 $sql="select * from  pingjia  where pid='".$id."'";
			 
			 $result=mysql_query($sql,$conn);
			 while($data=mysql_fetch_array($result))
			 {
			 ?>
	
	
	<tr>
	<td class="style5">
	
	
  用户：  <?php echo $data[username]?>  时间：<?php echo $data[shijian]?>

  </td>
  </tr>
  <tr>
  <td class="style5">
  内容：<?php echo $data[neirong]?> 
  </td>
  </tr>
    
    <?php 
   }
   ?>
			
			
	<form method="post" name="login" action="pl_post.php?id=<?php echo $id?>"> 

			 
			 
			<tr>
                 <td class="style5">
				
				
					 <textarea name="neirong"    placeholder="请输入评论信息" class="mtext" style="margin: 0px; height: 102px; width: 410px;"></textarea>
					
					
					
 
                 </td>
             </tr>
			<tr>
                 <td class="style5">
           <input type="submit" name="Submit" value="提交" onclick="return check();" class="btn"/>
                 </td>
             </tr>
			</form>
             </table>
</center>
 
</div>
  </div>
</div>
  </div>
	</body>