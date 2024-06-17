<?php
include ("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطا با شرح زیر رخ داده است" . mysqli_connect_error());


$query = "INSERT INTO users (realname, username, password, email, type) VALUES ('$realname', '$username', '$password', '$email', '0')";
$result = mysqli_query($link, $query);

    include ("includes/footer.php");
?>