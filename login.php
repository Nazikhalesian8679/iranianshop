<?php
include ("includes/header.php");
?>

<form id="form1" name="form1" action="action_login.php" method="post">
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