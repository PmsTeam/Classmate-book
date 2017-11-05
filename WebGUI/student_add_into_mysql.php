<?php
/**
 * Created by PhpStorm.
 * User: wing
 * Date: 2017/11/04
 * Time: 10:02
 */
$sname = $_POST['sna'];
$addr = $_POST['addr'];
$phone = $_POST['phone'];
$wechat = $_POST['wechat'];
$email = $_POST['email'];
$QQ = $_POST['QQ'];
$notes = $_POST['comment'];
require 'linkDatebase.php';
//$sname = iconv("UTF-8","GBK//IGNORE",$sname);
//$sex = iconv("UTF-8","GBK//IGNORE",$sex);
//$nation = iconv("UTF-8","GBK//IGNORE",$nation);
//$college = iconv("UTF-8","GBK//IGNORE",$college);
//$major = iconv("UTF-8","GBK//IGNORE",$major);
//$notes = iconv("UTF-8","GBK//IGNORE",$notes);
$str = "select * from friend where name = '$sname'";
$str2 = "SET @fphone = '$phone', @fname = '$sname', @faddress = '$addr',@fweichat = '$wechat',@femail = '$email', @fqq = '$QQ',@fcharacter_words = '$notes';";

$str3 = "call add_friend(@fphone, @fname, @faddress, @fweichat, @femail, @fqq, @fcharacter_words);";

$sql = mysqli_query($conn,$str);

$inworld = mysqli_num_rows($sql);

//echo $str2;
if ($inworld)
{
    echo "<script>alert('已有该同学！');history.back();</script>";
}
else
{
    if(mysqli_query($conn,$str2.$str3))
        echo "<script>alert('学生已添加！');location.href='information_student.php';</script>";
    else
//        echo $str2;
        echo "Error creating database: ".mysqli_error($conn);
}
?>