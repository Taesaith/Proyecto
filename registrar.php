<?php
include("con_db.php");
if (isset($_POST['register'])) {
  if (strlen($_POST['Usuario']) >= 1 && strlen($_POST['Email']) >= 1 && strlen($_POST['Contraseña'])){
          $Usuario = trim($_POST['Usuario']);
          $Email = trim($_POST['Email']);
          $Contraseña = trim($_POST['Contraseña']);
          $consulta = "INSERT INTO usuarios (Usuario, Email, Contraseña) VALUES('$Usuario','$Email','$Contraseña')";
          $resultado = mysqli_query($conex,$consulta);
          if ($resultado)
          {
            echo "<script> alert('Bienvenido $Usuario'); window.location='mywa.html' </script>'";
          }
              else {
                ?>
                  <div class="mal">¡Ups ha ocurrido un error!</div>
              <?php
              }
          } else {
                ?>
                  <div class="mal">¡Por favor complete los datos!</div>
                <?php
          } 
  } 
?>