<?php
	@mysql_connect("localhost","root","password") or die("Demo is not available, please try again later");
	@mysql_select_db("reyansdata") or die("Demo is not available, please try again later");
	session_start();
?>