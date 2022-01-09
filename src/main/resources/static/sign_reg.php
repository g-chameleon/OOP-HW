<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.html");
    exit;  //記得要跳出來，不然會重複轉址過多次
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HW SHOP_登錄註冊</title>
    <link rel="stylesheet" type="text/css" href="./css/sign_reg.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form name="registerForm" method="post" action="./php/register.php" onsubmit="return validateForm()">
          <h1>註冊賬戶</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>使用電子郵箱進行註冊</span>
          <input type="username" id="username" name="username" placeholder="賬號" />
          <input type="password" id="password" name="password" placeholder="密碼" />
          <input type="password" id="password_check" name="password_check" placeholder="密碼" />
          <input type="username" id="tel" name="tel" placeholder="電話" />
          <input type="submit" name="submit" value="Sign Up">
        </form>
      </div>
      <div class="form-container sign-in-container">

        <form  method="post" action="./php/login.php">
          <h1>登陸賬戶</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>或使用賬戶</span>
          <input type="text" name="username" placeholder="賬號" />
          <input type="password" name="password" id="password" placeholder="密碼" />
          <a href="#">忘記密碼?</a>
          <input type="submit" name = "submit" value="Sign In">
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>歡迎 回來!</h1>
            <p>已有賬號？快來登錄吧</p>
            <button class="ghost" id="signIn">登 陸</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>沒有賬號？快來完成註冊，開啟您的購物之旅！</p>
            <button class="ghost" id="signUp">註 冊</button>
          </div>
        </div>
      </div>
    </div>

    <script src="./index.js"></script>
  </body>
</html>
