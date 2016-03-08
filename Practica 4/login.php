<?php
   $user = $_GET['user'];
   $password = $_GET['password'];
 
   if (($user == "root") AND ($password == "1234")) {
      echo "Bienvenido Te Estabamos Esperando";
   } else {
      echo "Usuario o password incorrectos";
      echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><br>Volver</a>';
   }
?>