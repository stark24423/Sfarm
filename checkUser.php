<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php
	//啟動 session
	include("connect.php");
	//假設的有效會員帳號
	$id = $_POST['email'];
	$pw = $_POST['password'];
	

	
	$result = mysql_query("SELECT * FROM account WHERE a_email = '$id' and a_password = '$pw'");
	$row = mysql_fetch_array($result);


	
	if(isset($id) && isset($pw))
	{
		if(($row["a_email"] == $id) && ($row["a_password"] == $pw))
		{
			
				$_SESSION['username'] = $id;
				$_SESSION['is_login'] = true;
			
				//使用php header 來轉址 前往後台
				header('Location: controlfarm.php?msg登入成功');
		}
			
		else
		{		

				$_SESSION['is_login'] = false;
				//使用php header 來轉址回 login.php 必加入在網址加入 msg 的 GET 用變數 返回登入頁
				header('Location: login.php?msg=登入失敗，請確認帳號密碼');

		}		
		
		
	}
	else
	{
		
		header('Location: login.php?msg=請正確登入');
	}

?>
