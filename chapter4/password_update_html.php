<?php if(!defined('APP')) die('error!');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改密码</title>
	<link rel="stylesheet" href="./js/jquery.datetimepicker.css" />
	<script src="./js/jquery.js"></script>
	<script src="./js/jquery.datetimepicker.js"></script>
	<style>
		body{background-color: #eee;margin: 0;padding: 0}
		.box{width: 400px;margin: 15px auto;padding: 20px;border: 1px solid #ccc;background-color: #fff}
		.box h1{font-size:20px; text-align: center;}
		.error-box{text-align:center;margin:15px;padding:10px;background:#FFF0F2;
     		border:1px dotted #ff0099;font-size:14px;color:#ff0000;}
		.error-box a{color:#0066ff;}
		.profile-table{margin: 0 anto;}
		.profile-table th{font-weight: normal;text-align: right;}
		.profile-table input[type="text"]{width: 180px;border: 1px solid #ccc;height: 22px;padding-left: 4px;}
		.profile-table .button{background-color: #0099ff;border: 1px solid #0099ff;color: #fff;width: 80px;
			height: 25px;margin: 0 5px;cursor: pointer;}
		.profile-table .td-btn{text-align: center;padding-top: 10px;}
		.profile-table th,.profile-table td{padding-bottom: 10px;}
		.profile-table td{font-size: 14px}
		.profile-table .txttop{vertical-align: top;}
		.profile-table select{border: 1px solid #ccc;min-width: 80px;height: 25px;}
		.profile-table .description{font-size: 13px;width: 250px;height: 60px;border: 1px solid #ccc}
	</style>
</head>
<body>
	<div class="box">
		<h1>修改密码</h1>
		<form action="" method="post">
			<table class="profile-table">

				<tr><th>用户名：</th><td><input type="text" disabled="disabled" name="name" value="<?php echo $userinfo['username']; ?>"></td></tr>
				<tr><th>旧密码：</th><td><input type="password" name="oldpassword" ></td></tr>
				<tr><th>新密码：</th><td><input type="password" name="password" ></td></tr>
				<tr><th>确认密码：</th><td><input type="password" name="password2" ></td></tr>
				<tr><td colspan="7" class="td-btn">
					<input type="submit" value="保存资料" class="button">
					<input type="reset" value="重新填写" class="button">
				</td></tr>
			</table>
		</form>
	</div>
	<?php if(!empty($error)): ?>
		<div class="error-box">修改失败，错误信息如下：
			<ul><?php foreach ($error as $v)echo "<li>$v</li>"; ?></ul>
		</div>
	<?php endif; ?>	
</body>
</html>