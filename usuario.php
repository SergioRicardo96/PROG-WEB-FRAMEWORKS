<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
   
   $user1 = "administrador";
   $pass1 = "administrador";
   $user2 = "comprador";
   $pass2 = "comprador";

   
   $error_notif = "¡Contraseña o usuario incorrecto!" . '<a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';

   switch ($user) {
      case $user1:
         if ($password == $pass1) {
            header('Location: index3.php');
         } else {
            echo $error_notif;
         }
      break;
      case $user2:
         if ($password == $pass2) {
            header('Location: index2.php');
         } else {
            echo $error_notif;
         }
      break;
      default:
       
         echo $error_notif;
   }
?>