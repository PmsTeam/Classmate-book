<?php
$sname=$_POST['snu'];
setcookie('sname',$sname);
if (!empty($_POST['submit1']))
{
	header("Location: update_student.php");
}
else
{
	include 'linkDatebase.php';
	$str = "select * from friend where name = '$sname'";
	$str2 = "delete from friend where name = '$sname'";
	$sql = mysqli_query($conn,$str);
	if (mysqli_num_rows($sql))
	{
        mysqli_query($conn,$str2);
		echo "<script>alert('操作成功');location.href='information_student.php';</script>";
	}
	else
	{
		echo "<script>alert('没有此学生！');history.back();</script>";
	}
}
?>