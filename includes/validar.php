<?php
 

  if(isset($_POST["submit"])){
    if(isset($_POST["nif"])){
      echo "NIF: ".$_POST["nif"];
      echo "<br />";
    }else{
      echo "NIF no definido";
    }

    if(isset($_POST["name"])){
      echo "Nombre: ".$_POST["name"];
      echo "<br />";
    }else{
      echo "Nombre no definido";
    }

    if(isset($_POST["surname"])){
      echo "Apellidos: ".$_POST["surname"];
      echo "<br />";
    }else{
      echo "Apellidos no definido";
    }
    if(isset($_POST["nacimiento"])){
      echo "Fecha de nacimiento: ".$_POST["nacimiento"];
      echo "<br />";
    }else{
      echo "Fecha de nacimiento no definida";
    }
    if(isset($_POST["email"])){
      echo "Email: ".$_POST["email"];
      echo "<br />";
    }else{
      echo "Email no definido";
    }
    if(isset($_POST["password"])){
      echo "Contraseña: ".sha1($_POST["password"]);
      echo "<br />";
    }else{
      echo "Contraseña no definida";
    }
  }

?>