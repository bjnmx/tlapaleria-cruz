<?php require "./inc/session_start.php"; ?>
<!doctype html>
<html lang="es">
<head>
    <!--    <title>Inventario</title>-->
    <?php include "./inc/head.php"; ?>
</head>
<body>

 <?php
        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista']="login";
        }

        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!=="login" && $_GET['vista']!=="404"){
            include "./inc/navbar.php"; //codigo nanvar solamnerte
            include "./vistas/".$_GET['vista'].".php";
            include "./inc/menuScript.php";  //burger de nav script

        }else{

            if($_GET['vista']=="login"){
                include "./vistas/login.php";
            }else{
                include "./vistas/404.php";
            }
        }
?>


</body>
</html>