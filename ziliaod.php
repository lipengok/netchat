<?php 
require 'header.php';
include("conn.php");
$id=$_GET[id];
 

$sql="select * from  ziyuan where id='".$id."'";
$sql=mysql_query($sql,$conn);

$info=mysql_fetch_array($sql);
$mingcheng=$info[mingcheng];

$jieshao=$info[neirong];
$username=$info[faburen];

$dizhi=$info[dizhi];
$pic=$info[pic];
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
		 
	</head>
	
  <body>
   <div class="cls">	 </div>
<div class="box"> 
     <div class="newcontain">
 
  <div class="listr  ">
  <div class="BiaoTi"><h2> 
      资料库信息  </h2></div>
      
	
    <table style="width: 100%">
       
        <tr>
            <td style="width:  100%">
             <ul>
           <asp:DataList ID="dlTopic" runat="server" Width=" 100%">
                    <ItemTemplate>
                         
                                    
                                     <p class="a_title"><?php echo  $mingcheng?></p>   
                                       <p class="box_p"><span>发布时间： <?php echo  $shiian?></span><span>编辑： <?php echo  $username?>  </span></p>
                                 
                                    <ul class="a_content">
                        <a href="<?php echo  $dizhi?>">下载资料</a>   
						<br>
                               <?php echo  $jieshao?>
                                    </ul>
                                 
                        </table>
                    </ItemTemplate>
                </asp:DataList>
                    </ul>
                </td>
        </tr> <tr>
            <td>
              </td>
        </tr>
        <tr>
            <td style="text-align: left">
           
                &nbsp;</td>
        </tr>
        <tr>
            <td>
                &nbsp;</td>
        </tr>
    </table>
        
   
  </div>
</div>
  </div>
	</body>