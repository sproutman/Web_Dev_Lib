<html>
	<head>
		<title>欢迎来登录</title>
		<script type="text/javascript" src="js/check.js"></script>
	</head>
	<body>
		欢迎来登陆<hr />
		<form action="login.php" method="post" onsubmit="return check();">
			用户名:<input type="text" name="username" id="name"/><br />
			密&nbsp;&nbsp;码:<input type="text" name="password" id="pass" /><br />
			<input type="submit" value="登陆"> 
			<a href="getuser.php">注册</a> 
		</form>
	</body>
</html>