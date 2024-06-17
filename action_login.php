<?php
include ("includes/header.php");

if (
	isset($_POST['username']) && !empty($_POST['username']) &&
	isset($_POST['password']) && !empty($_POST['password'])
) {

	$username = $_POST['username'];
	$password = $_POST['password'];

} else
	exit("برخی فیلدها تعریف نشده است ");

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (mysqli_connect_errno())
	exit("خطای به شرح زیر است" . mysqli_connect_error());

$query = "SELECT * FROM `users` WHERE username='$username' AND password='$password' ";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
if ($row) {
	$_SESSION["state_login"] = true;
	$_SESSION["realname"] = $row['realname'];
	if ($row["type"] == 0)
		$_SESSION["user_type"] = "public";
	elseif ($row["type"] == 1) {
		$_SESSION["user_type"] = "admin";


	}
	echo ("<p style='color:green'><b>{$row['realname']}به فروشگاه ایرانیان خوش امدید");
} else
	echo ("<p style='color:green'><b> نام کاربری یافت نشد</p></b>");


mysqli_close($link);
include ("includes/footer.php");
?>
</body>

</html>