<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[cx];
 $jieshao="";
 $jieshao=$_POST[jieshao];
if( $cz=="xs")
{
  
	$SQL="update lianxi set  jieshao='".$jieshao."'"; 
     
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
 
	$sql="select * from lianxi";
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $id=$info[id];
 $jieshao=$info[jieshao];
 
}
 
?><html>
  <head>

   <title>联系我们</title>
  <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script charset="utf-8" src="./editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="jieshao"]', {
					allowFileManager : true,
						afterBlur: function(){this.sync();}

				});

			});
		</script>
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="gongsi"   action="lianxi.php?cx=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >联系我们</td>
  </tr>
  <tr>
   <td  align="right">联系我们:</td>
    <td align="left" >  
	
	<textarea name="jieshao"    style="margin: 0px; height: 300px; width: 510px;"><?php echo $jieshao?></textarea>
 
 </td> 
  </tr>
<tr  >
    <td   align="right"></td>
    <td align="left">
                    <input type="submit" name="Submit" value="提交" onclick="return check();" class="btn"/>
 </td>
     </tr>

    </table>
</div>
     </form>
</body>
</html>

