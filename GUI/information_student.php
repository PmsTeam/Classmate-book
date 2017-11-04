<?php
include "header.php";
include "leftaside.php";
?>
<section class="rt_wrap content mCustomScrollbar">
	<div class="rt_content">
		<div class="page_title">
			<h2 class="fl">同学信息</h2>
			<a href="student_add.php" class="fr top_rt_btn add_icon">添加学生</a>
		</div>
		<table class="table">
			<tr>
				<th>姓名</th>
				<th>家庭住址</th>
				<th>电话</th>
				<th>微信</th>
				<th>邮箱</th>
				<th>QQ</th>
				<th>个性语言</th>
			</tr>
			<form name="cnum" onsubmit="return go(this)" action="contral_student.php" method="post" class="mtb" style="text-align:right;">
				您想查找的同学是：
				<input type="text" name="snu" class="textbox textbox_295" placeholder="在这填上列表中姓名"/>
				<input type="submit" name="submit1" value="修改信息" class="group_btn"/>
				<input type="submit" name="submit2" value="删除信息" class="group_btn"/>
			</form>
			
			<script>
				function go() {
				    if (confirm("您确定吗？"))
				    {
				        return true;
				    }else {
				        return false;
				    }
					
                }
			</script>
			<?php
			require 'linkDatebase.php';
			$str="select * from friend";
			$sql = mysqli_query($conn,$str);
			$datarow = mysqli_num_rows($sql);
			for($i=1;$i<=$datarow;$i++)
			{
				$sql_arr = mysqli_fetch_array($sql);
				$name = $sql_arr['name'];
//				$name=iconv("GBK","UTF-8",$name);
				$phone = $sql_arr['phone'];
//				$phone=iconv("GBK","UTF-8//IGNORE",$phone);
				$addr = $sql_arr['address'];
//				$addr=iconv("GBK","UTF-8//IGNORE",$addr);
				$wechat = $sql_arr['weichat'];
				$email = $sql_arr['email'];
//				$email=iconv("GBK","UTF-8//IGNORE",$email);
				$qq = $sql_arr['qq'];
				$notes = $sql_arr['character_words'];
//				$notes=iconv("GBK","UTF-8//IGNORE",$notes);
				echo "<td>$name</td>";
				echo "<td>$addr</td><td>$phone</td><td>$wechat</td><td>$email</td><td>$qq</td><td>$notes</td></tr>";
			}
			?>
		</table>
		
	</div>

</section>
<?php
include "footer.php";
?>
