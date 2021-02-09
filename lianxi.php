<?php 
require 'header.php';
include("conn.php");
$sql="select * from lianxi";
$sqlex=mysql_query($sql,$conn);
$info=mysql_fetch_array($sqlex);
$id=$info[id];
$jieshao=$info[jieshao];
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
      联系我们  </h2></div>
      
	
    <table style="width: 100%">
       
        <tr>
            <td style="width:  100%">
             <ul>
           <asp:DataList ID="dlTopic" runat="server" Width=" 100%">
                    <ItemTemplate>
                         
                                    
                                   
                                    <ul class="a_content">
                            
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