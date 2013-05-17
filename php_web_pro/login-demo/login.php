<?php
	session_start();
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	} else {
		mysql_select_db('users', $link) or die ('Can\'t use user : ' . mysql_error());
		$sql = "select * from check4 where name='".$username."' and pass='".$pass."'";
		$result = mysql_query($sql) or die("Invalid query: " . mysql_error());
		if (mysql_num_rows($result) > 0){
			mysql_close($link);
			$_SESSION['user'] = 'user';
			echo "<script type='text/javascript'>alert('µÇÂ½³É¹¦!');</script>";
			echo "<script type='text/javascript'>window.location.href='usercenter.php'</script>";
		} else {
			echo "<script type='text/javascript'>alert('µÇÂ½Ê§°Ü!');</script>";
			echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		}
	}
?>