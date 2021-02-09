<?php  
session_start();
include("../conn.php");date_default_timezone_set("PRC");
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
 
 
//图片上传
include("fun.php");

$exname=strtolower(substr($_FILES['file']['name'],(strrpos($_FILES['file']['name'],'.')+1)));

$uploadfile = getname($exname);

move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
if(trim($_FILES['file']['name']!=""))
{
	$uploadfile=$uploadfile;
}
else
{
	$uploadfile="";
}
//图片上传
$pic=str_replace("../","",$uploadfile);
if( $cz=="xs")
{
   if( $id=="")
   {
		$SQL= "insert into  xinwen(id,mingcheng,faburen,shijian,neirong,pic)values('".$id."','".$mingcheng."','".$faburen."','".$shijian."','".$neirong."','".$pic."')";
    }
    else
   {  
		$SQL="update  xinwen set id='".$id."',mingcheng='".$mingcheng."',faburen='".$faburen ."',shijian='".$shijian."',neirong='".$neirong."',pic='".$pic."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from XinWen where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $Id=$info[Id];
 $mingcheng=$info[mingcheng];
 $faburen=$info[faburen];
 
 $shijian=$info[shijian];
 $neirong=$info[neirong];
 }
}
?><html>
  <head>

   <title>新闻公告管理</title>
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
  <form method="post" name="XinWen" enctype="multipart/form-data"   action="XinWen.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >新闻公告管理</td>
  </tr>
  <tr>
   <td  align="right">标题:</td>
   <td align="left" ><input type="text" name="mingcheng"  value= "<?php echo $mingcheng ?>"     class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">发布人:</td>
   <td align="left" ><input type="text" name="faburen"  value= "<?php echo $_SESSION['uname'] ?>"     class="text"  > </td>
  </tr>





   <tr>
   <td  align="right">发布时间:</td>
   <td align="left" ><input type="text" name="shijian"  value= "<?php echo $shijian ?>"     class="text"  > </td>
  </tr>

 <tr>
   <td  align="right">图片:</td>
    <td align="left" > 
	
		<input type="file" name="file"  id="file" class="text"  >
		
 </td></tr>
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
                    <input type="reset" name="Submit2" value="重置" class="btn"/>
 </td>
     </tr>

    </table>
</div>
     </form>
</body>
</html>

