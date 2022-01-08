<?php
$link = mysqli_connect("localhost", "root", "gmh735539", "fcu_shop");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($link,"set names utf8");
?>