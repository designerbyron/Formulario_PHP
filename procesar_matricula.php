<?php 

$conexion_bd = mysqli_connect("localhost","root","mipoepir","matriculas");


?>

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

          if($conexion_db ->connect_error){
            die ('Error en la conexion ' . $conexion_db->connect_error);
        }else{
            echo 'Conexion con la base de datos fue exitosa';
        }



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

          //Almacenando en la base de datos la informacion de matriculas
          $conexion_bd -> query("
          INSERT INTO `datos` (`datos_nombres`, `datos_apellidos`, `datos_modalidad`, `datos_carrera`, `datos_pago`, `datos_email`, `datos_notificaciones`) VALUES ('".$nombres."', '".$apellidos."', '".$modalidad."', '".$carrera."', '".$pagos."', '".$email."', '".$recibir_email."');");
          
        }else{
          echo "<h2>La informacion debe de provenir desde el Formulario</h2> ";
        }

       ?>
<?php
$query_cantidad_alumnos = "SELECT COUNT(`datos_id`) AS 'Cantidad_alumnos' FROM `datos` WHERE 1";
$resultados_alumnos = $conexion_bd->query($query_cantidad_alumnos);
$fila = $resultados_alumnos->fetch_assoc();


$fila_alumnos = $fila['Cantidad_alumnos'];


echo "Alumnos Matriculados actualmente ". $fila_alumnos;

$resultados_matriculas = $conexion_bd -> query("SELECT * FROM `datos` WHERE 1");
$tabla = $resultados_matriculas->fetch_all(MYSQLI_ASSOC);




/* echo "<pre>";
 print_r ($fila);
echo "</pre>";
 */

?>
<table>
        <thead>
          <tr>
              <th># id</th>
              <th>Fecha Matricula</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th>Modalidad</th>
              <th>Carrera</th>
              <th>Tipo de Pago</th>
              <th>Email</th>
              <th>Notificaciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($tabla as $fila) {
            # code...
          ?>
          <tr>
            <th><?php echo $fila['datos_id']?></th>
            <td><?php echo $fila['datos_fecha']?></td>
            <td><?php echo $fila['datos_nombres']?></td>
            <td><?php echo $fila['datos_apellidos']?></td>
            <td><?php echo $fila['datos_modalidad']?></td>
            <td><?php echo $fila['datos_carrera']?></td>
            <td><?php echo $fila['datos_pago']?></td>
            <td><?php echo $fila['datos_email']?></td>
            <td><?php echo $fila['datos_notificaciones']?></td>
          </tr>
          <?php } ;?>
        </tbody>

</table>

<?php 

mysqli_close($conexion_bd);

?>       
    </div>
  </body>
</html>
