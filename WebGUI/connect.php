<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "selectCourse";
	$db_port = "3306";
	$conn = mysqli_connect($db_host,$db_user,$db_password) or die("数据库链接错误");
	mysqli_select_db($conn, $db_name) or die('选择数据库失败！');
//	$con=mysqli_connect("localhost","root","");
//	if(!$con) echo "FAILD!连接错误，用户名密码不对";
//	else echo "OK!可以连接";
	/*
	echo "11111";
	*/