<?php  
session_start();
require 'header.php';
date_default_timezone_set("PRC");
include("conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $Id="";
 $Id=$_POST[Id];
 $mingcheng="";
 $mingcheng=$_POST[mingcheng];
 $faburen="";
 $faburen=$_SESSION[uname];
 
 $shijian="";
 $shijian=date("Y/m/d");
 $neirong="";
 $neirong=$_POST[neirong];


 
	
 
if( $cz=="xs")
{   //上传
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
	$dizhi=str_replace("../","",$uploadfile);
	
	
	$pic="upload/".upload_file('url','');
	
	
	
	
	
	echo $dizhi;
   if( $id=="")
   {
		$SQL= "insert into shiping(id,mingcheng,faburen,dizhi,shijian,neirong,pic)values('".$id."','".$mingcheng."','".$faburen."','".$dizhi."','".$shijian."','".$neirong."','".$pic."')";
    }
    else
   {  //	$dizhi="upload/".upload_file('url',$data[url]); 
		$SQL="update shiping set id='".$id."',mingcheng='".$mingcheng."',faburen='".$faburen."',dizhi='".$dizhi."',shijian='".$shijian."',neirong='".$neirong."',pic='".$pic."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
	//echo $SQL;
echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from shiping where id=".$id;
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
?>
<html>
  <head>

   <title>教学视频管理页面</title>
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
			font-size: 14pt;
        }
            .style5
            {
                font-size: 14pt;
            }
            .style6
            {
                width: 100%;
            }
			.text
  { width: 250px;
 height: 25px;
}
    </style> 
	 <link href="css/Maste.css" rel="stylesheet" type="text/css" />
    <link href="css/main.css" rel="stylesheet">
        <link href="css/jquery.slideBox.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.slideBox.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/BK.css" type="text/css"></link>
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
 <div class="newcontain">
      <div class="blank"></div>
  
  <div class="BiaoTi"><h2> 课程信息</h2></div>
  <form method="post" name="shiping"  enctype="multipart/form-data"  action="shiping.php?action=xs&id=<?php echo $id?>">
  <table class="table" cellpadding="4" cellspacing="1">
  
  <tr>
   <td  align="right">视频名称:</td>
   <td align="left" ><input type="text" name="mingcheng"  value= "<?php echo $mingcheng ?>"   required  class="text"  > </td>
  </tr>
  

  
  <tr>
   <td  align="right">发布人:</td>
   <td align="left" ><input type="text" name="faburen"  value= "<?php echo $_SESSION[username] ?>"    required  class="text"  > </td>
  </tr>
  
  
  <tr>
   <td  align="right">视频地址:</td>
   <td align="left" >	
   	<input type="file" name="file"  id="file" class="text"  >
   	
    </td>
  </tr>

  <tr>
   <td  align="right">图片:</td>
   <td align="left" > <input name="url" type="file" id="url" size="30" maxlength="50"></td>
  </tr>
  <tr>
   <td  align="right">发布时间:</td>
   <td align="left" ><input type="text" name="shijian"  value= "<?php echo $shijian ?>"    required class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">介绍:</td>
   <td align="left" >  	<textarea name="neirong"    style="margin: 0px; height: 300px; width: 510px;"><?php echo $neirong?>
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

