<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 $username="";
 $username=$_POST[username];
 $pwd="";
 $pwd=$_POST[pwd];
if( $cz=="xs")
{
   if( $id=="")
   {
$SQL= "insert into admin(username,pwd)values('".$username."','".$pwd."')";
    }
    else
   {  
$SQL="update admin set id='".$id."',username='".$username."',pwd='".$pwd."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from admin where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $id=$info[id];
 $username=$info[username];
 $pwd=$info[pwd];
 }
}
?><html>
  <head>

   <title>管理员管理页面</title>
 <script src="css/laydate.js" type="text/javascript"></script>  
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="admin"   action="admin.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >管理员管理页面</td>
  </tr>
  <tr>
   <td  align="right">用户名:</td>
    <td align="left" >  <input name='username' type='text' id='username' value='<?php echo $username ?>' class="txtcss" />
 </td> 
  </tr>
  <tr>
   <td  align="right">密码:</td>
    <td align="left" >  <input name='pwd' type='text' id='pwd' value='<?php echo $pwd ?>' class="txtcss" />
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

