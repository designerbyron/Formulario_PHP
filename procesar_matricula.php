<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Matriculas</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="formulario">
      <?php
        if ($_POST) {
          $nombres = $_POST[nombres];
          $apellidos = $_POST[apellidos];
          $modalidad = $_POST[modalidad];
          $carrera = $_POST[carrera];
          $pagos = $_POST[pagos];
          $email = $_POST[email];
          $recibir_email = $_POST[recibir_email];

          echo "<h1>Se recibio la siguiente informacion de Matricula</h1> <br><br>";
          echo $nombres . "<br>";
          echo $apellidos . "<br>";
          echo $modalidad . "<br>";
          echo $carrera . "<br>";
          echo $pagos . "<br>";
          echo $email . "<br>";
          echo $recibir_email . "<br>";
        }else{
          echo "<h2>La informacion debe de provenir desde el Formulario</h2> ";
        }

       ?>
    </div>
  </body>
</html>
