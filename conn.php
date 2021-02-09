<?php
error_reporting(E_ALL ^ E_NOTICE);

$conn=@mysql_connect("localhost","root","root") or die("数据库链接失败".mysql_error());
mysql_select_db("xuex",$conn) or die("数据库链接失败".mysql_error());
mysql_query('set names utf8');
 
 
//设置时区
date_default_timezone_set('asia/shanghai');
define('SYS_ROOT', str_replace("\\", '/', dirname(__FILE__)));
define('File_ROOT', SYS_ROOT."/upload/");
define('IMG_ROOT', SYS_ROOT . "/upload/");

@extract($_POST);
@extract($_GET);

function getfirst($sql)
{
	$res=mysql_query($sql);
	$rows=mysql_fetch_array($res);
	return $rows;
}
//
function getcount($sql){
	$res=mysql_query($sql);

return mysql_num_rows($res);
}
function get_name($id,$table)
{

	$sql="select * from $table where id='$id'";
	$rows=getfirst($sql);
	return $rows[name];
}
//遍历创建目录
function Remkdir($path) {
	if (!file_exists($path)) {
		Remkdir(dirname($path));
		@mkdir($path, 0777);
	}
}
//上传图片
function upload_image($inputname, $image=null, $type='upimages', $width=440) {
	 $n = time().rand(1000,9999).'.jpg';
	$z = $_FILES[$inputname];
	if ($z && strpos($z['type'], 'image')===0 && $z['error']==0) {
		if (!$image) {
			Remkdir( IMG_ROOT . '/' . "{$type}/" );
			$image = "{$type}/{$n}";
			$path = IMG_ROOT . '/' . $image;

		} else {
			Remkdir( dirname(IMG_ROOT .'/' .$image) );
						$image = "{$type}/{$n}";

			$path = IMG_ROOT . '/' .$image;
		}
//echo $path ;


			move_uploaded_file($z['tmp_name'], $path);

		//echo $image;exit;
		return $image;
	}
	return $image;
}
//获取文件后缀名
function get_extend($file_name)
{
$extend = pathinfo($file_name);
$extend = strtolower($extend["extension"]);
return $extend;
}
//文件上传实现

function upload_file($inputname, $file=null)
{
	$year = date('Y'); $day = date('md');
	$z = $_FILES[$inputname];


	$file_ext=get_extend($z['name']);

	
	$n = time().rand(1000,9999).".".$file_ext;
	if ($z &&  $z['error']==0) {
		if (!$file) {
			Remkdir( File_ROOT . '/' . "{$day}" );
			$file = "{$day}/{$n}";
			$path = File_ROOT . '/' . $file;

		} else {
			Remkdir( File_ROOT . '/' . "{$day}" );
						$file = "{$day}/{$n}";

			$path = File_ROOT . '/' .$file;
		}
//echo $path ;


			move_uploaded_file($z['tmp_name'], $path);

		//echo $file;exit;
		return $file;
	}
	return $file;
}
//分页函数.
function get_pager($url, $param, $count, $page = 1, $size = 10)
{
    $size = intval($size);
    if($size < 1)$size = 10;
    $page = intval($page);
    if($page < 1)$page = 1;
    $count = intval($count);

    $page_count = $count > 0 ? intval(ceil($count / $size)) : 1;
    if ($page > $page_count)$page = $page_count;

    $page_prev  = ($page > 1) ? $page - 1 : 1;
    $page_next  = ($page < $page_count) ? $page + 1 : $page_count;

    $param_url = '?';
    foreach ($param as $key => $value)$param_url .= $key . '=' . $value . '&';

    $pager['url']        = $url;
    $pager['start']      = ($page-1) * $size;
    $pager['page']       = $page;
    $pager['size']       = $size;
    $pager['count']		 = $count;
    $pager['page_count'] = $page_count;

	if($page_count <= '1')
	{
	    $pager['first'] = $pager['prev']  = $pager['next']  = $pager['last']  = '';
	}
	else
	{
		if($page == $page_count)
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = '';
			$pager['last']  = '';
		}
		elseif($page_prev == '1' && $page == '1')
		{
			$pager['first'] = '';
			$pager['prev']  = '';
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
		else
		{
			$pager['first'] = $url . $param_url . 'page=1';
			$pager['prev']  = $url . $param_url . 'page=' . $page_prev;
			$pager['next']  = $url . $param_url . 'page=' . $page_next;
			$pager['last']  = $url . $param_url . 'page=' . $page_count;
		}
	}
    return $pager;
}
?>
