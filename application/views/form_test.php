<!DOCTYPE html>
<html>
<head>
	<title>add user</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" > 

	<?php echo validation_errors(); ?>

	用户名：<input type="text" name="user" value="<?=set_value('user');?>">
	密码: <input type="password" name="pwd" value="<?=set_value('pwd');?>">
	邮箱: <input type="email" name="email" value="<?=set_value('email');?>">
	<!-- 再次输入密码: <input type="password" name="re_pwd"> -->

	<br>
	
	<div>
		<button type="subimt">提交</button>
	</div>
</form>
</body>
</html>