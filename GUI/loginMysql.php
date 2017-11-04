<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username)
	{
		setcookie("username",$username,time()+3600*3600*24);
	}
	else
	{
		setcookie("username","",time()-1);
	}
	//数据库连接
	include 'linkDatebase.php';
	//成功连接数据库，检测用户名及密码是否正确
    $check_query ="*";

	//$rs = mysqli_query($conn,$check_query);

	//$row =odbc_fetch_row($rs);

	if(1)
	{
		session_start();
		$_SESSION['username'] = $username;
		mysqli_close($conn);

        header("Location: home.php");

		exit;
	}
	else
	{//登录失败
		echo "<script>alert('用户名或密码错误！');history.back();</script>";
	}