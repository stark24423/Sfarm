<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_mydb = "localhost";
$database_mydb = "test";
$username_mydb = "root";
$password_mydb = "root";
$mydb = mysql_pconnect($hostname_mydb, $username_mydb, $password_mydb) or trigger_error(mysql_error(),E_USER_ERROR); 
?>