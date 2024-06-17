<?php
include ("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (
  isset($_POST['realname']) && !empty($_POST['realname']) &&
  isset($_POST['username']) && !empty($_POST['username']) &&
  isset($_POST['password']) && !empty($_POST['password']) &&
  isset($_POST['email']) && !empty($_POST['email']) &&
  isset($_POST['repassword']) && !empty($_POST['repassword'])
) {

  $realname = $_POST['realname'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];
  $email = $_POST['email'];
} else
  exit("برخی از فیلدها خالی است ");

if ($password != $repassword)
  exit("پسورد با تکرار آن مطابقت ندارد");

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false)
  exit("ایمیل را درست وارد کنید ");

$query = "INSERT INTO users (realname, username, password, email, type) VALUES ('$realname', '$username', '$password', '$email', '0')";
$result = mysqli_query($link, $query);



include ("includes/footer.php");
?>