<?php if (!defined('app')) die('error!'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎登录</title>
	<link rel="stylesheet" href="mycss.css">
	<style>
*{
  margin:0;
  padding:0;
  font-family:"微软雅黑";
  font-size:12px;
}
.box{
  width:390px;
  height:380px;
  border:solid 1px #ddd;
  background:#FFF;
  position:absolute;
  left:50%;
  top:42%;
  margin-left:-195px;
  margin-top:-160px;
}
.box h2{
  font-weight:normal;
  color:#666;
  font-size:16px;
  line-height:46px;
  height:46px;
  overflow:hidden;
  text-align:center;
  border-bottom:solid 1px #ddd;
  background:#f7f7f7;
}
.input_box{
  width:350px;
  padding-bottom:15px;
  margin:0 auto;
  overflow:hidden;
}
.input_box input{
  float:left;
  width:348px;
  height:40px;
  font-size:14px;
  border:solid 1px #ddd;
  text-indent:10px;
  outline:none;
  line-height:40px;
}
.input_box button{
  width:350px;
  height:48px;
  background:#3f89ec;
  border:none;
  border-radius:2px;
  outline:none;
  cursor:pointer;
  font-size:16px;
  color:#FFF;
}

.error-box{width: 378px;margin: 15px;padding: 10px;background-color: #FFF0F2;
			border: 1px dotted #ff0099 ;font-size: 14px;color: #ff0000;}
.error-box ul{margin: 10px;padding-left: 25px;}	
	

</style>
</head>
<body background ="img002.png">
	<form method="post">

	<div class="box">
	<h2>登录</h2>
    <div id="error_box"></div>
    <div class="input_box">
    	<input type="text" placeholder="请输入账户名" name="username">
    </div>
    <div class="input_box">
    	<input type="password" placeholder="请输入密码" name="password">
    </div>
   
    <div class ="input_box">
        <input type="text" name="captcha" /placeholder="验证码">
					<img src="code.php" alt="" id="code_img"/>  
					<a href="#" id="change">看不清，换一张</a>

    </div>
    <div class="input_box">
    	<button onclick="fnLogin()">登录</button>
    </div>
    <div class="input_box">
    	<button onclick="window.open('mysqli_register.php')">注册</button>
    </div>
</div>

	</form>
	<script>
	var change=document.getElementById("change");
	var img=document.getElementById("code_img");
	change.onclick=function(){
		img.src="code.php?t="+Math.random();
		return false;
	}
	</script>
	<?php if(!empty($error)): ?>
		<div class="error-box">登录失败，错误信息如下：
			<ul><?php foreach ($error as $v)echo "<li>$v</li>"; ?></ul>
		</div>
	<?php endif; ?>	

</body>
</html>