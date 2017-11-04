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
$str2 = "call update_friend(f$sname,f$addr,f$phone,f$wechat,f$email,f$QQ,f$notes)";

$sql = mysqli_query($conn,$str);

$inworld = mysqli_num_rows($sql);

if (!$inworld)
{
    echo "<script>alert('没有该同学！');history.back();</script>";
}
else
{
    mysqli_query($conn,$str2);
    echo "<script>alert('学生已修改！');location.href='information_student.php';</script>";
}
?>