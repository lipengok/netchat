<?php  
@session_start();
error_reporting(0); 
?>
<!DOCTYPE html>
<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	  <link href="css/index.css" rel="stylesheet">
	</head>
	<body>
	 <div class="headtop">
	
	
    <div class="timer box">
		<div style="width:300px;float:left;">
			 
			  <form method="post" name="login" action="sousuo.php">
	<input type="text" name="skey" autocomplete="off" placeholder="请输入关键字"  required="required"   > 
	<input type="submit" value="查询" />  
	</form>
	
</div>	
	<span style=" display: inline-block;vertical-align: top;magin">
<?php

if($_SESSION[username]=="")

 {
 ?> <div id=NoLogin >
		 你好， <a href="UserLogin.php">请登录</a>　<a href="UserReg.php">免费注册</a>
		</div>   <?php
		  
		  }
		  else
		  {?>
			

			<div id=YesLogin  >  欢迎回来<?php echo $_SESSION[username]?> 
			
			 
			 
			 
			
		  	<a href="Userinfo.php">个人信息</a>　
		   
		    <a href="logout.php">退出</a>
		 
		   <?php
		   }?>
  </div>
	
			 </span> 
			  
			 </div>	
			

  </div>
  <div class="logo box"></div>
  <nav id="nav" class="box">
    <ul>
      <li><a href="index.php">网站首页</a></li>
 
 <li><a href="xinwen.php">新闻公告</a></li>
     	<li><a href="kecheng.PHp">课程信息</a></li>
		
      <li><a href="shiping.PHp">视频信息</a></li> 
	 <li><a href="ziliao.php">资料库</a></li>

   
	 
		     <li><a href="lianxi.php">联系我们</a></li>
			  <li><a href="liuyan.php">在线留言</a></li>
			  
 
      <li><a href="admin/Login.PHp">后台登录</a></li>
    </ul>
  </nav>
 
</header>





		 
	</body>
</html>
