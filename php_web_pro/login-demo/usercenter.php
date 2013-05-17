<?php 
	session_start();
	if (! (isset($_SESSION['user']))) {
		echo "<script type='text/javascript'>alert('登陆失败!');</script>";
		echo "<script type='text/javascript'>window.location.href='index.php'</script>";
	}
?>
<html>
	<head>
		<title>个人中心</title>
	</head>
	<body>
		欢迎你回来！| <a href="logout.php">退出</a>
	</body>
</html>
