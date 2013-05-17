<?php
	session_start();
	session_unset();
	session_destroy();
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	} else {
		mysql_select_db('users', $link) or die ('Can\'t use user : ' . mysql_error());
		$name = $_POST['username'];
		$pass = $_POST['password'];
		$sql = "insert into check4(name,pass) values('".$name."','".$pass."')";
		mysql_query($sql) or die("Invalid query: " . mysql_error());
		echo "<script type='text/javascript'>alert('×¢²á³É¹¦,ÇëµÇÂ½!');</script>";
		echo "<script type='text/javascript'>window.location.href='index.php'</script>";
	}
?>