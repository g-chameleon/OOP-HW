<?php 
$conn = mysqli_connect("127.0.0.1", "root", "gmh735539");
$select_db = mysqli_select_db($conn, "test");
mysqli_set_charset($conn, "utf8");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $tel=$_POST["tel"];
    //檢查帳號是否重複
    $check="SELECT * FROM user WHERE username='".$username."'";
    if(mysqli_num_rows(mysqli_query($conn,$check))==0){
        $sql="INSERT INTO user (id,username, password,tel)
            VALUES(NULL,'".$username."','".$password."','".$tel."')";
        
        if(mysqli_query($conn, $sql)){
            echo ("<script>alert('注册成功,請登陸賬號開始您的購物之旅！'); location.href='../sign_reg.php';</script>");
        }else{
            echo "Error creating table: " . mysqli_error($conn);
        }
    }
    else{
        echo ("<script>alert('該賬號已有人使用，請重新註冊！'); location.href='../sign_reg.php';</script>");
    }
}

mysqli_close($conn);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='index.html';
    </script>"; 
    
    return false;
} 
?>