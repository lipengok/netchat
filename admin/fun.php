<?php
function getname($exname){//图片上传函数
   $dir = "../upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }

   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}
?>