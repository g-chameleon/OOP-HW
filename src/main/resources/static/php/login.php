<?php
$conn = mysqli_connect("127.0.0.1", "root", "gmh735539");
$select_db = mysqli_select_db($conn, "test");
mysqli_set_charset($conn, "utf8");
// Include config file

 
// Define variables and initialize with empty values
$username=$_POST["username"];
$password=$_POST["password"];
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "SELECT * FROM user WHERE username ='".$username."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1 && $password==mysqli_fetch_assoc($result)["password"]){
        session_start();
        
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        //這些是之後可以用到的變數
        $_SESSION["id"] = mysqli_fetch_assoc($result)["id"];
        $_SESSION["username"] = $username;
        header("location:http://localhost:8080/home.html");
    }else{
            echo ("<script>alert('帳號或密碼錯誤'); location.href='../sign_reg.php';</script>");
        }
}
    else{
            echo ("<script>alert('服務器遇到一些問題，請稍後重試'); location.href='../sign_reg.php';</script>");
    }

    // Close connection
    mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.php';
    </script>"; 
    return false;
} 
?>