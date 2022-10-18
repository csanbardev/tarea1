<?php

$errores = [];

function mostrarError($errores, $campo){
  $alerta = "";
  if (isset($errores[$campo]) && !empty($campo)) {
    $alert = '<div class="alert alert-danger" style=" margin-top:5px;">'
      . $errores[$campo] . '</div>';
  }
  return $alerta;

  return $alerta;
}



if(isset($_POST["submit"])){

  if(!empty($_POST["nif"]) && preg_match("/[0-9]{8}[a-zA-Z]/", $_POST["nif"])){
    $nif = trim($_POST["nif"]);
    $nif = filter_var($nif, FILTER_UNSAFE_RAW);
    echo "NIF".$nif."<br />";
  }else{
    $errores["nif"] = "NIF incorrecto";
  }

  if(!empty($_POST["name"]) && !preg_match("/[0-9]/", $_POST["name"])&& strlen($_POST["name"]<15)){
    $nombre = trim($_POST["name"]);
    $nombre = filter_var($nombre, FILTER_UNSAFE_RAW);
    echo "NOmbre".$nombre."<br />";
  }else{
    $errores["name"] = "Nombre incorrecto";
  }

  if(!empty($_POST["surname"]) && !preg_match("/[0-9]/", $_POST["surname"])&& strlen($_POST["name"]<20)){
    $apellidos = trim($_POST["surname"]);
    $apellidos = filter_var($nombre, FILTER_UNSAFE_RAW);
    echo "Apellidos".$apellidos."<br />";
  }else{
    $errores["surname"] = "Apellidos incorrecto";
  }

  if(!empty($_POST["nacimiento"])){
    $nacimiento = trim($_POST["nacimiento"]);
    $nacimiento = filter_var($nacimiento, FILTER_UNSAFE_RAW);
    echo "Fecha nacimiento".$nacimiento."<br />";
  }else{
    $errores["nacimiento"] = "Fecha de nacimiento incorrecto";
  }

  if(!empty($_POST["password"]) && strlen($_POST["name"]>6)){
    $password = trim($_POST["password"]);
    $password = filter_var($password, FILTER_UNSAFE_RAW);
    echo "Contraseña".$password."<br />";
  }else{
    $errores["password"] = "Contraseña incorrecto";
  }
}




