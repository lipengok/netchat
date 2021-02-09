<?php  
session_start();
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $Id="";
 $Id=$_POST[Id];
 $mingcheng="";
 $mingcheng=$_POST[mingcheng];
 $faburen="";
 $faburen=$_POST[faburen];
 
 $shijian="";
 $shijian=date("Y/m/d");
 $neirong="";
 $neirong=$_POST[neirong];
 $dizhi="upload/".upload_file('url','');
if( $cz=="xs")
{
   if( $id=="")
   {
$SQL= "insert into ziyuan(id,mingcheng,faburen,dizhi,shijian,neirong)values('".$id."','".$mingcheng."','".$faburen."','".$dizhi."','".$shijian."','".$neirong."')";
    }
    else
   {  
$SQL="update ziyuan set id='".$id."',mingcheng='".$mingcheng."',faburen='".$faburen."',dizhi='".$dizhi."',shijian='".$shijian."',neirong='".$neirong."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from ziyuan where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $Id=$info[Id];
 $mingcheng=$info[mingcheng];
 $faburen=$info[faburen];
 $dizhi=$info[dizhi];
 $shijian=$info[shijian];
 $neirong=$info[neirong];
 }
}
?><html>
  <head>

   <title>课程资源管理页面</title>
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script charset="utf-8" src="./editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="neirong"]', {
					allowFileManager : true,
						afterBlur: function(){this.sync();}

				});

			});
		</script>
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="ziyuan" enctype="multipart/form-data"   action="ziyuan.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >课程资源管理页面</td>
  </tr>
  <tr>
   <td  align="right">资源名称:</td>
   <td align="left" ><input type="text" name="mingcheng"  value= "<?php echo $mingcheng ?>"   required  class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">发布人:</td>
   <td align="left" ><input type="text" name="faburen"  value= "<?php echo $_SESSION[uname] ?>"   required  class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">资源地址:</td>
   <td align="left" > 
   <input name="url" type="file" id="url" size="30" maxlength="50">
				</td>
  </tr>
  <tr>
   <td  align="right">发布时间:</td>
   <td align="left" ><input type="text" name="shijian"  value= "<?php echo $shijian ?>"   required  class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">内容:</td>
   <td align="left" > 
   	
   	
   	<textarea name="neirong"    style="margin: 0px; height: 300px; width: 510px;"><?php echo $neirong?>
   </textarea>
   
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

