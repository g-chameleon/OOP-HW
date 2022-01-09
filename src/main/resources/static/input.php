<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>HW Shop</title>
    <!-- <link rel="stylesheet" href="css/input.css">-->
    <script type="text/javascript">
        function check(){
            var NAME=document.getElementById('NAME');
            if(NAME.value==''){
                alert('商品名稱不能為空');
                NAME.focus();
                return false;
            }


            var IMAGE_URL=document.getElementById('IMAGE_URL');
            if(IMAGE_URL.value==''){
                alert('圖片地址不能為空');
                IMAGE_URL.focus();
                return false;
            }



            var PRICE=document.getElementById('PRICE');
            if(PRICE.value=='' || isNaN(PRICE.value)){
                alert('價格必須是一個數字');
                PRICE.select();
                return false;
            }

            var DESCRIPTION=document.getElementById('DESCRIPTION');
            if(DESCRIPTION.value==''){
                alert('介紹不能為空');
                DESCRIPTION.focus();
                return false;
            }
        }

    </script>
    <style>
        .bbb{
        background-color:#008CBA;
        margin-left:120px;
        border-radius:12px;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



</head>
<body>
<?php
if(isset($_POST['inpBtn']))
{
    $conn = mysqli_connect("127.0.0.1","root","gmh735539");
    $select_db = mysqli_select_db($conn,"fcu_shop");
    mysqli_query($conn,'utf8');    

    $NAME=$_POST['NAME'];
    $IMAGE_URL=$_POST['IMAGE_URL'];
    $PRICE=$_POST['PRICE'];
    $DESCRIPTION=$_POST['DESCRIPTION'];
    


    $sql="insert into product values(null,'$NAME','$IMAGE_URL','$PRICE','$DESCRIPTION')";

    if(mysqli_query($conn,$sql)){

        header("location:http://localhost:8080/home.html");
        exit;
    }
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">HW SHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="http://localhost:8080/home.html">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">網購商城</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        商品管理
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="input.html">新增商品</a></li>
                        <li><a class="dropdown-item" href="#">修改商品</a></li>
                    </ul>
                </li>
            </ul>


            <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                <li class="nav-item">
                    <a class="nav-link" href="sign.html">登入</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.html">註冊</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shopping cart.html">購物車</a>
                </li>
            </ul>

            <!--<form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
        </div>
    </div>
</nav>
<form class="container" name="form1" method="post" action="" onsubmit="return check()">
    <h1 class="mt-3 mb-3">新增商品</h1>

    <div class="mb-3">
        <label for="NAME" class="form-label">名字</label>
        <input  type="text" class="from-control" name="NAME" id="NAME">
    </div>

    <div class="mb-3">
        <label for="IMAGE_URL" class="form-label">圖片地址</label>
        <input  type="text" class="from-control" name="IMAGE_URL" id="IMAGE_URL" size="60">
    </div>

    <div class="mb-3">
        <label for="PRICE" class="form-label">價格</label>
        <input  type="text" class="from-control" name="PRICE" id="PRICE">
    </div>

    <div class="mb-3">
        <label for="DESCRIPTION" class="form-label">介紹</label>
        <input  type="text" class="from-control" name="DESCRIPTION" id="DESCRIPTION" style="width:500px; height:200px">
    </div>

    <button type="submit" class="btn btn-primary" name="inpBtn" id="iupBtn">新增</button>


</form>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->

</body>
</html>
