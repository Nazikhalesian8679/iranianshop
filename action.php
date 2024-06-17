
	<?php
	include("includes/header.php");
	
	if(isset($_POST['realname'])&&!empty($_POST['realname'])&&
	   isset($_POST['username'])&&!empty($_POST['username'])&&
	   isset($_POST['password'])&&!empty($_POST['password'])&&
       isset($_POST['repassword'])&&!empty($_POST['repassword'])&&
	   isset($_POST['email'])&&!empty($_POST['email'])){
	  
	$realname=$_POST['realname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$repassword=$_POST['repassword'];
	$email=$_POST['email'];
	}
	else
	exit("برخی از فیلد ها مقدار دهی نشده است");
	
	if($password!=$repassword)
		exit("کلمه عبور وتکرار مشابه هم نیستن");
		
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false)
		exit("ایمیل صحیح نیست ");
	?>
	<div dir="ltr" style="text-align: left;">
	<?php
	$link=mysqli_connect("localhost","root","","shop_db");
	if(mysqli_connect_errno())
	     exit("".mysqli_connect_error());
		 
	$query="INSERT INTO `users`(`realname`, `username`, `password`, `email`, `type`) VALUES ('$realname','$username' ,'$password','$email','0') ";
		 
		if(mysqli_query($link,$query))
		  echo("<p style='color:green; dir='rtl';'  ><b>".$realname."  گرامی عضویت شما با نام کاربری  "
		  .$username."در  فروشگاه با موفقیت ثبت شد  "."</b></p>");
		  else
		     echo(" عضویت شما انجام نشد ");
		
		 mysqli_close($link);
		 
		echo("realname=".$realname."</br>");
		echo("username=".$username."</br>");
		echo("password=".$password."</br>");
		echo("repassword=".$realname."</br>");
		echo("email=".$email."</br>");
		?>
	</div>
	
</body>
</html>