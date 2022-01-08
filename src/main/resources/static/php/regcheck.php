<?php
include('conn.php');

if (!isset($_POST['submit'])){
    exit('非法訪問！');
}

$username = $_POST['username'];
$password = $_POST['password'];
$pwd = $_POST['pwd'];


if(!preg_match('/^[\w\x80-\xff]{3,15}$/',$username)) {
    exit('錯誤：用戶名不符合規定。<a href="javascript:history.back(-1);">返回</a>');
}
if(strlen($password<6)) {
    exit('錯誤：密碼長度不符合規定。<a href="javascript:history.back(-1);">返回</a>');
}
if($password ==$pwd){
    $che = $mysqli_query("select username from register where username= '$username' limit 1");
    //mistake
    if(mysqli_fetch_array($che)){
        echo '錯誤：用戶名已經存在<a href="javascript:history.back(-1);">返回</a>';
        exit;
    }
    $password = md5($password);
    $pwd = md5($pwd);
    $sql = "INSERT INTO register (username, password,pwd) VALUES ('$username', '$password','$pwd')";
    if($mysqli_query($sql)){
        exit('恭喜你，註冊成功！點擊跳轉<a href="login.php">登陸</a>');
    }else{
        echo '對不起，註冊失敗';
        echo '點擊返回：<a href="javascript:history.back(-1);">重試</a>';
    }
}else{
    echo '密碼不一致，請重新輸入';
    echo '點擊返回：<a href="javascript:history.back(-1);">重試</a>';
}



?>