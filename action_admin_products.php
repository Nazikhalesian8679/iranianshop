<?php
include("includes/footer.php");
if(!($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")
    {
?>
<<script type="text/javascript">
    <!--
    location.replace("index.php")
    -->
</script>
<?php
    }
?>
<?php
if(isset($_POST['pro_code']) && !empty($_POST['$pro_code'])
&& isset($_POST['user_name']) && !empty($_POST['$user_name']) 
)
?>