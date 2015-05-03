<?php
	session_name('tchiclayo');
	session_start();
	session_destroy();
	header("Location: ../index.php");
	exit(0);
?>