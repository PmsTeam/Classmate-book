<?php
include 'header.php';
include 'leftaside.php';
?>
	<section class="rt_wrap content mCustomScrollbar">
		<div class="rt_content">
			<div class="page_title">
				<h2 class="fl">添加同学</h2>
				<a class="fr top_rt_btn" href="information_student.php">返回同学列表</a>
			</div>
			<p><span class="error">* 必需字段。</span></p>
			<br>
			<form method="post" action="student_add_into_mysql.php">
				姓名: <input type="text" name="sna" >
				<span class="error">* </span>
				<br><br>
				住址: <input type="text" name="addr">
				<span class="error">* </span>
				<br><br>
				电话: <input type="text" name="phone">
				<span class="error">* </span>
				<br><br>
				微信: <input type="text" name="wechat">
				<br><br>
				邮箱: <input type="text" name="email">
				<br><br>
				Q Q: <input type="text" name="QQ">
				<br><br>
				个性语言: <textarea name="comment" rows="5" cols="40"></textarea>
				<br><br>
				<input type="submit" name="submit" value="提交" class="group_btn">
			</form>
		</div>
	</section>
<?php
include 'footer.php';
?>