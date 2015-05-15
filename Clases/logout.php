<?php
	session_name('tchiclayo');
	session_start();
	session_destroy();
	header("Location: ../index.html");
	exit(0);
?>