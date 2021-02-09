<?php
include("conn.php");
$tn=$_GET[tn];
$id=$_GET[id];
 
 $sql="delete from ".$tn." where id=".$id.""; 
 mysql_query( $sql,$conn);
echo "<script>alert('操作成功！');window.history.back();</script>";
?>