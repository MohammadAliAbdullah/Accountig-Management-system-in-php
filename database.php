<?php
	$conn = new mysqli("localhost","root","","acc_management");
	$connect = new PDO('mysql:host=localhost; dbname=acc_management;', 'root', '');
	$conn->set_charset("utf8");	
?>