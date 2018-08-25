<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<?php
include("connect.php");


//設定讀入的變數
$email = $_POST['email'];
$password = $_POST['password'];
$name= $_POST['name'];
$password2= $_POST['password02'];


 $result=mysql_query("SELECT * FROM account WHERE a_email = '$email'");
 $row=mysql_fetch_array($result);



 if($row["a_email"]==$email){
 header('Location: reg.php?msg=這個email有人用過了喔');

 }else{
	 if($password == $password2)
		{
			//把帳號密碼分別寫入資料庫
			mysql_query("INSERT INTO account (a_email,a_password,a_name) VALUES ('$email','$password','$name')");
			header('Location: login.php?msg=註冊成功');
		}
		else
		{
			header('Location: reg.php?msg=第二組密碼錯誤');
		}
	  }

?>