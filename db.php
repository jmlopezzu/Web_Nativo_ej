<?php

session_start();

$conn = mysqli_connect(
  'localhost', // Ubicacion
  'root', // usuario
  '', // contraseña
  'bd_programweb' //nombre BD 
);


if (isset($conn)) {
  echo "BD conectada";
}
else{
  echo "Noooo";
}
?>
