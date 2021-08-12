<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sistema de universidad</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="https://localhost/sistemauniversidad/views/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://localhost/sistemauniversidad/views/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://localhost/sistemauniversidad/views/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="https://localhost/sistemauniversidad/views/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="https://localhost/sistemauniversidad/views/dist/css/skins/_all-skins.min.css">

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini login-page">
<!-- Site wrapper -->

<?php

if(isset($_SESSION['Ingresar']) && $_SESSION['Ingresar']==true){
    echo '<div class="wrapper">';
    include "modules/cabecera.php";
    if($_SESSION['rol']=="Administrador"){
        include "modules/menu.php";
    }
    $url=array();
    if(isset($_GET['url'])){
        $url=explode("/",$_GET['url']);
        if($url[0]=="inicio"){
            include "modules/".$url[0].".php";
        }
    }else{
        
        include "modules/inicio.php";
    }
    echo '</div>';

}else if(isset($_GET['url'])){
    if($_GET['url']=="Ingresar"){
        include "modules/ingresar.php";
    }
}else{
    include "modules/ingresar.php";
}
?>


<!-- jQuery 3 -->
<script src="https://localhost/sistemauniversidad/views/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://localhost/sistemauniversidad/views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="https://localhost/sistemauniversidad/views/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="https://localhost/sistemauniversidad/views/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="https://localhost/sistemauniversidad/views/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://localhost/sistemauniversidad/views/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
$('.sidebar-menu').tree()
});
</script>
</body>
</html>
