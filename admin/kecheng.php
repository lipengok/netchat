<?php  
session_start();
date_default_timezone_set("PRC");
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $migncheng="";
 $migncheng=$_POST[migncheng];
 $faburen="";
 $faburen=$_POST[faburen];
 $shijian="";
 $shijian=$_POST[shijian];
 $neirong="";
 $neirong=$_POST[neirong];
 $pic="";
 $pic=$_POST[pic];
$shijian=date("Y/m/d");
if( $cz=="xs")
{
	//上传
	include("fun.php");
	$exname=strtolower(substr($_FILES['file']['name'],(strrpos($_FILES['file']['name'],'.')+1)));
	
	$uploadfile = getname($exname);

	 
	
	
	$pic="upload/".upload_file('url','');
	
	
	
	
   if( $id=="")
   {
		$SQL= "insert into kecheng(migncheng,faburen,shijian,neirong,pic)values('".$migncheng."','".$faburen."','".$shijian."','".$neirong."','".$pic."')";
    }
    else
   {  
		$SQL="update kecheng set id='".$id."',migncheng='".$migncheng."',faburen='".$faburen."',shijian='".$shijian."',neirong='".$neirong."',pic='".$pic."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from kecheng where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $id=$info[id];
 $migncheng=$info[migncheng];
 $faburen=$info[faburen];
 $shijian=$info[shijian];
 $neirong=$info[neirong];
 $pic=$info[pic];
 }
}
?><html>
  <head>

   <title>课程信息管理</title>
 <script src="css/laydate.js" type="text/javascript"></script>  
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <form method="post" name="tupian"   enctype="multipart/form-data" action="kecheng.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >课程信息管理</td>
  </tr>
  <tr>
   <td  align="right">课程名称:</td>
    <td align="left" >  <input name='migncheng' type='text' id='migncheng' value='<?php echo $migncheng ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">发布人:</td>
    <td align="left" >  <input name='faburen' type='text' id='faburen'  value= "<?php echo $_SESSION['username'] ?>"  class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">发布时间:</td>
    <td align="left" >       <input name=shijian type='text' id='shijian' value='<?php echo $shijian ?>' class="inline laydate-icon"   onClick="laydate({ format: 'YYYY-MM-DD'})"/>
 </td> 
  </tr>
 
  <tr>
  
   <td  align="right">图片:</td>
   <td align="left" > <input name="url" type="file" id="url" size="30" maxlength="50"></td>
  </tr>


  <tr>
   <td  align="right">介绍:</td>
   <td align="left" >  	<textarea name="neirong"    style="margin: 0px; height: 300px; width: 510px;"><?php echo $neirong?>
   </textarea>
   </td>
  </tr>
 </td> 
  </tr>
<tr  >
    <td   align="right"></td>
    <td align="left">
                    <input type="submit" name="Submit" value="提交" onClick="return check();" class="btn"/>
 </td>
     </tr>

    </table>
</div>
     </form>
</body>
</html>

