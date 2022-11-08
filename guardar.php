<?php

include("db.php");

if(isset($_POST['save'])){
  $iden =$_POST['iden'];
  $nom =$_POST['nom'];
  $fechaNaci =$_POST['fechaNaci'];
  $papa =$_POST['papa'];

  $query ="INSERT INTO estudiante(id,nombre,FechaNacimiento,PAPA)
  VALUES($iden,'$nom','$fechaNaci',$papa)";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    $_SESSION['mensaje'] = "No se pudo guardar";
    $_SESSION['tipo_mensaje'] = "danger";
    // die("Fallo consulta.");
  }
else{
   $_SESSION['mensaje'] = "Estudiante guardado";
   $_SESSION['tipo_mensaje'] = "success";
}
header("Location: index.php");
}

?>
