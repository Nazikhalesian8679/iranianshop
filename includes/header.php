<!doctype html>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>فروشگاه ایرانیان</title>
<style type="text/css">
   .set_style_link {

      text-decoration: none;
      font-weight: bold;

   }
</style>
</head>

<body>
   <div class="divTable">
      <div class="divTableRow">
         <div class="divTableCell">
            <header class="divTable">
               <div class="divTableRow">
                  <div class="divTableCell"> لوگوی سایت</div>
               </div>
            </header>
            <nav class="divTable">
               <ul class="divTableRow">
                  <li class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلی</a></li>
                  <li class="divTableCell"><a class="set_style_link" href="register2.php">عضویت در سایت</a></li>
                  <li class="divTableCell"><a class="set_style_link" href="login.php">ورود به سایت</a></li>
                  <li class="divTableCell"><a class="set_style_link" href="#">درباره ما</a></li>
                  <li class="divTableCell"><a class="set_style_link" href="#">ارتباط با ما</a></li>
                  <?php
                  if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin") {
                     ?>
                     <li class="divTableCell"><a href="admin_products.php" class="set_style_link">مدیریت محصولات</a></li>

                     <?php
                  }
                  ?>
               </ul>
            </nav>
            <section class="divTable">
               <section class="divTableRow">
                  <aside class="divTableCell" style="width:25%"> بخش امکانات سایت</aside>
                  <section class="divTableCell" style="width:75%">