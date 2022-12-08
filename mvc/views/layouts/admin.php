<?php 
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
    if(!isset($_SESSION["email"])){
        header("Location:http://localhost:8080/web212/User/sign_in");
    }
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <title>BHX Admin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="../../../web212/public/assets/img/Bach-Hoa-Xanh-Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../web212/public/assets/css/theme_admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
  </head>

  <body class="footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl" >
  <?php 
    require_once "./mvc/views/".$data["admin_header"].".php";
  ?>
 <div id="content" role="main" style="display:flex;height:1000vh" >
   <?php 
    require_once "./mvc/views/".$data["admin_sidebar"].".php";
  ?>
  <div class="content container-fluid" style="padding-top:50px">
      <?php 
        require_once "./mvc/views/". $data["admin_page"].".php";
      ?>
  </div>
  </div>


  </body>
</html>
