<?php 
require_once 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>LongBlob</title>
  <meta charset="utf-8">
  <link rel="icon" href="images/php-icono.png">
</head>
  <body>
    <center>
    <img src="images/banner.jpg">
  </center>
  
  <hr>
 <a href="subir_img.php">Subir Imagenes</a> |
  <a href="mostrar_img.php">Mostrar Imagenes</a> |
   <a href="">Eliminar Imagenes</a>
  <hr><br>

  <?php

  
  $sql = "SELECT * FROM tabla_imagenes";
   $conexion = new conexion;
  $stmt = $conexion->prepare($sql);
  $stmt->execute();
  ?>

  <table border = '1' align = 'center' width="80%">
    <tr>
      <th>Código</th>
      <th>Imagen</th>
      <th>Fecha de Creacion</th>
    </tr>

  <?php
  while ($campo = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $campo['codigo'] . '</td>';
      echo '<td>' .
      '<img src = "data:image/png;base64,' . base64_encode($campo['imagen']) . '" width = "200px" height = "200px"/>'
      . '</td>';
   
      echo '<td>' . $campo['creado'] . '</td>';
     
      echo '</tr>';
  }
  ?>

  </table>
  </body>
</html>