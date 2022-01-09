<?php
session_start();  //很重要，可以用的變數存在session裡
$username=$_SESSION["username"];
echo "<h1> ".$username."，確定要登出麼？</h1>";
echo "<a href='logout.php'>登出</a>";
?>