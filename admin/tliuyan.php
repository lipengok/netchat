<?php 
include("../conn.php");
$id=$_GET[id];
$cz=$_GET[action];
 
 $username="";
 $username=$_POST[username];
 $lneirong="";
 $lneirong=$_POST[lneirong];
 $lshijian="";
 $lshijian=$_POST[lshijian];
 $huifu="";
 $huifu=$_POST[huifu];
if( $cz=="xs")
{
   if( $id=="")
   {
$SQL= "insert into tliuyan(id,username,lneirong,lshijian,huifu)values('".$id."','".$username."','".$lneirong."','".$lshijian."','".$huifu."')";
    }
    else
   {  
$SQL="update tliuyan set id='".$id."',username='".$username."',lneirong='".$lneirong."',lshijian='".$lshijian."',huifu='".$huifu."' where id='". $id."'"; 
     }
       $sql=mysql_query( $SQL,$conn); 
 	echo "<script>alert('恭喜，操作成功!');window.history.back();</script>"; 
   	exit;
}
  if( $cz=="mod")
 {
  if( $id!="")
 {
  $sql="select * from tliuyan where id=".$id;
 $sqlex=mysql_query($sql,$conn);
 $info=mysql_fetch_array($sqlex);
 $id=$info[id];
 $username=$info[username];
 $lneirong=$info[lneirong];
 $lshijian=$info[lshijian];
 $huifu=$info[huifu];
 }
}
?><html>
  <head>

   <title>管理页面</title>
 <link href="css/gzf.css" rel="stylesheet" type="text/css" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>
<body >

 <div class="bodydiv">
  <form method="post" name="tliuyan"   action="tliuyan.php?action=xs&id=<?php echo $id?>">
  <table class="myTab" cellpadding="4" cellspacing="1">
 <tr class="myTRHead">
   <td class="myTDHead"  colspan="2" >管理页面</td>
  </tr>
  <tr>
   <td  align="right">留言人:</td>
   <td align="left" ><input type="text" name="username"  value= "<?php echo $username ?>"     class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">留言内容:</td>
   <td align="left" ><input type="text" name="lneirong"  value= "<?php echo $lneirong ?>"     class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">留言时间:</td>
   <td align="left" ><input type="text" name="lshijian"  value= "<?php echo $lshijian ?>"     class="text"  > </td>
  </tr>
  <tr>
   <td  align="right">回复内容:</td>
   <td align="left" ><input type="text" name="huifu"  value= "<?php echo $huifu ?>"     class="text"  > </td>
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

