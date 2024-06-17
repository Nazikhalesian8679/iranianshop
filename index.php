<?php
 include("includes/header.php");
 
 $link = mysqli_connect("localhost", "root", "","shop_db");
 if (mysqli_connect_errno())
 exit("خطا با شرح زیر رخ داده است". mysqli_connect_error());


$query = "INSERT INTO users (realname, username, password, email, type) VALUES ('$realname', '$username', '$password', '$email', '0')";

if(mysqli_query($link, $query)===true)
    echo($realname. "گرامی عضویت شما با نام کاربری ". $username."در فروشگاه با موفقیت انجام شد");
else
    echo("عضویت موفقیت امیز  نبود");
$result = 
include("includes/footer.php");
 ?>