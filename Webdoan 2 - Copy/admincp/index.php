<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Admin</title>
</head>
<body>
    <h3 class="admincp_tile">Chào mừng bán đến với trang Admin</h3>
    <div class="wrapper">
    <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
      
        ?>
        <table class="table-primary"><?php include("config/connect.php")?></table>
        <table class="table-secondary"><?php include("config/connect.php")?></table>
        <table class="table-success"><?php include("config/connect.php")?></table>
        <table class="table-danger"><?php include("config/connect.php")?></table>
        <table class="table-warning"><?php include("config/connect.php")?></table>
       
    </div>
</body>
</html>