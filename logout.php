<?php
require_once "connect/connect.php";



setcookie("username",null,  time()+0.1, '/');
setcookie("password",null, time()+0.1, '/');
setcookie("Nickname",null, time()+0.1, '/');
setcookie("userid",null, time()+0.1, '/');
setcookie("main_userid",null, time()+0.1, '/');

header("location:login.php");

?>