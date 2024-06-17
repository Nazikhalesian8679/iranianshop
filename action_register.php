<?php
include ("includes/header.php");

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

echo ("realname=" . $realname . "<br/>");
echo ("username=" . $username . "<br/>");
echo ("password=" . $password . "<br/>");
echo ("email=" . $email . "<br/>");



include ("includes/footer.php");
?>