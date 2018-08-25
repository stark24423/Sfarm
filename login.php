<?php
	//啟動 session
	session_start();
?>

<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sfarm-會員登入</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__="dreamweaver"</script>
    <script src="http://use.edgefonts.net/butcherman:n4:default.js" type="text/javascript"></script>

	</head>
	<body class="homepage is-preload">
		<?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE){

			
			header('Location: controlfarm.php?msg=已經登陸成功');}

			else{
				
		?>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
						  <h1><a href="index.php" id="logo"><img src="images/logo.png" width="117" height="38">LORA智慧型農場</a></h1>
</div>
					</div>
				</header>

			<!-- Nav -->
				<nav id="nav">
					<ul>
					  <li><a href="index.php">首頁</a></li>
					  <li class="current"><a href="login.php">會員登入</a>
						<ul>
							<li><a href="reg.php">會員註冊</a></li>
						</ul>
					  </li>
					  <li><a href="Development.html">發展動機</a></li>
					  <li><a href="controlfarm.php">管理農場</a></li>
					  <li><a href="about.html">關於作者</a></li>
					</ul>
				</nav>

			<!-- Banner -->
				<section id="banner">
<div class="content">
  <form id="loginbox" name="form1" method="post" action="checkUser.php">
	  <?php
				if(isset($_GET['msg'])){
					echo "<p class='error'>{$_GET['msg']}</p>";
				}
			?>
<input name="email" type="email" id="email01" placeholder="請輸入e-mail">
<input name="password" type="password" required="required" id="password01" placeholder="請輸入密碼" autocomplete="on">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr> </tr>
  </tbody>
</table>
<input type="image" name="imageField" id="imageField" src="images/button.png">
&nbsp;
  </form>
</div>
				</section>

			<!-- Main -->
			<!-- Footer -->
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		<?php } ?>
	</body>
</html>