<?php
include ("includes/header.php");

if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]=== true){
?>
<script type="text/javascript">
  <--!
  location.replace("index.php");
  -->
</script>
<?php
}
?>
<br/>
<form  name="login" action="action_login.php" method="POST">

  <p>&nbsp;</p>
  <p>
    <label for="textfield">نام کاربری:</label>
    <input type="text" name="username" id="username">
  </p>
  <p>
    <label for="textfield2">کلمه عبور:</label>
    <input type="text" name="password" id="password">
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="ورود">
    &nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset" id="reset" value="ریست">
  </p>
</form>

</body>

</html>