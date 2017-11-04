<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>2017级计算机专业同学录</title>
	<meta name="author" content="DeathGhost" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>

        (function($){
            $(window).load(function(){

                $("a[rel='load-content']").click(function(e){
                    e.preventDefault();
                    var url=$(this).attr("href");
                    $.get(url,function(data){
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
//scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo","h2:last");
                    });
                });

                $(".content").delegate("a[href='top']","click",function(e){
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
                });

            });
        })(jQuery);
	</script>
</head>
<body>
<!--header-->
<header>
	<h1><a href="index.html"><img src="images/logo.png"/></h1>
	<ul class="rt_nav">
		<li><a href="home.php" class="website_icon">首页</a></li>
		<!--<li><a href="#" class="clear_icon">清除缓存</a></li>-->
		<li><a href="home.php" class="admin_icon">个人信息</a></li>
		<!--<li><a href="#" class="set_icon">账号设置</a></li>-->
		<li><a href="clear.php" class="quit_icon">安全退出</a></li>
	</ul>
</header>
