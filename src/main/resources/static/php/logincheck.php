<?php
include('conn.php');
if (!isset($_POST['submit'])){
    exit('非法訪問！');
}

$username = $_POST['login_username'];
$password = md5($_POST['login_password']);

$che = mysqli_query($username,$password,"select id from register where username and password");
$result = mysqli_fetch_array($che);
if($result){
    //登陸成功
    echo '登陸成功，祝您購物愉快！';
    exit;
}else{
    echo '登陸失敗，請檢查賬號密碼是否正確';
    exit;
}

?>