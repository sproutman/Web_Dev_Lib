<?php 
	session_start();
	if (! (isset($_SESSION['user']))) {
		echo "<script type='text/javascript'>alert('��½ʧ��!');</script>";
		echo "<script type='text/javascript'>window.location.href='index.php'</script>";
	}
?>
<html>
	<head>
		<title>��������</title>
	</head>
	<body>
		��ӭ�������| <a href="logout.php">�˳�</a>
	</body>
</html>
