<?php
include("../conn.php");
header('content-type:text/html;charset=utf-8');  
$tn=$_GET[tn];
$id=$_GET[id];
 
 $sql="delete from ".$tn." where id=".$id.""; 
 mysql_query( $sql,$conn);
 //echo "<script>alert('²Ù×÷³É¹¦');window.history.back();</script>";

echo "<script>window.history.back();</script>";
?>