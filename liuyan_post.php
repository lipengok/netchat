<?php
session_start();
include("conn.php");//引用数据库链接文件
header('content-type:text/html;charset=utf-8');  
if($_SESSION[username]=="")
{
	echo "<script>alert('登录后操作');window.history.back();</script>";
}
else
	{
$tn=$_GET[action];
 //获取页面传递的参数
$id=$_GET[id];
  $username=$_SESSION[username];
  $lshijian=date("Y/m/d");
 $sql="";
 
  if($tn=="liuyan")
 { //定义SQL语句
 $neirong=$_POST[neirong];
$SQL= "insert into tliuyan(id,username,lneirong,lshijian)values('".$id."','".$username."','".$neirong."','".$lshijian."')";
  }
 
 mysql_query( $SQL,$conn);//执行SQL语句
echo "<script>alert('操作成功');window.history.back();</script>";
	}
?>