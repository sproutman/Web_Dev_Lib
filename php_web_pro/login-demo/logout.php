<?php
	session_start();
    session_unset();
    session_destroy();
	echo "<script type='text/javascript'>alert('ÍË³ö³É¹¦!');</script>";
	echo "<script type='text/javascript'>window.location.href='index.php'</script>";
?>