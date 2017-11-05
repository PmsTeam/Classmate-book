<?php
/**
 * Created by PhpStorm.
 * User: wing
 * Date: 2017/11/04
 * Time: 10:18
 */
$sname = $_POST['sna'];
//$addr = $_POST['addr'];
//$phone = $_POST['phone'];
//$wechat = $_POST['wechat'];
//$email = $_POST['email'];
//$QQ = $_POST['QQ'];
//$notes = $_POST['comment'];
require 'linkDatebase.php';
//$sname = iconv("UTF-8","GBK//IGNORE",$sname);
//$sex = iconv("UTF-8","GBK//IGNORE",$sex);
//$nation = iconv("UTF-8","GBK//IGNORE",$nation);
//$college = iconv("UTF-8","GBK//IGNORE",$college);
//$major = iconv("UTF-8","GBK//IGNORE",$major);
//$notes = iconv("UTF-8","GBK//IGNORE",$notes);
$str = "select $sname from friend where name = '$sname'";
$str2 = "call delete_friend(f$sname)";

$sql = mysqli_query($conn,$str);

$inworld = mysqli_num_rows($sql);

if (!$inworld)
{
    echo "<script>alert('没有这学生！');history.back();</script>";
}
else
{
    mysqli_query($conn,$str2);
    echo "<script>alert('学生已删除！');location.href='information_student.PHP';</script>";
}
?>