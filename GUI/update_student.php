<?php
include 'header.php';
include 'leftaside.php';
include "linkDatebase.php";
$name = $_COOKIE['sname'];
$str = "select * from friend where name='$name'";
$sql = mysqli_query($conn,$str);
$arr = mysqli_fetch_row($sql);
?>
	<section class="rt_wrap content mCustomScrollbar">
		<div class="rt_content">
			<div class="page_title">
				<h2 class="fl">修改信息</h2>
				<a class="fr top_rt_btn" href="information_student.php">返回信息列表</a>
			</div>
			<p><span class="error">* 必需字段。</span></p>
			<br>
			<form method="post" action="update_student_into_mysql.php">
				姓名: <input type="text" name="sna" value="<?php echo iconv('GBK','UTF-8',odbc_result($sql,'sname'));?>">
				<span class="error">* </span>
				<br><br>
				住址: <input type="text" name="nation" value="<?php echo iconv('GBK','UTF-8',odbc_result($sql,'nation'));?>">
				<span class="error">* </span>
				<br><br>
				电话: <input type="text" name="birthday" value="<?php echo odbc_result($sql,'birthday');?>">
				<br><br>
				微信: <input type="text" name="grade" value="<?php echo odbc_result($sql,'sgrade');?>">
				<span class="error">* </span>
				<br><br>
				邮箱: <input type="text" name="class" value="<?php echo odbc_result($sql,'class');?>">
				<br><br>
				Q Q: <input type="text" name="college" value="<?php echo iconv("GBK","UTF-8",odbc_result($sql,'college'));?>">
				<br><br>
				个性语言: <textarea name="comment" rows="5" cols="40" value="<?php echo iconv("GBK","UTF-8",odbc_result($sql,'notes'));?>"></textarea>
				<br><br>
				<input type="submit" name="submit" value="提交" class="group_btn">
			</form>
		</div>
	</section>
<?php
include 'footer.php';
?>