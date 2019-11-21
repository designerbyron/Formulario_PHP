<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Matriculas</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="formulario">
      <h1>Nuevos Ingresos</h1>
      <form class="mi_formulario" action="procesar_matricula.php" method="post">
        <label for="nombres">Nombres</label>
        <input type="text" name="nombres" placeholder="Ingresa tu nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" placeholder="Ingresa tus apellidos">
        <label for="modalidad">Modalidad</label>
        <select class="selec_modalidad" name="modalidad">
          <option value="Matutino" selected>Matutino</option>
          <option value="Verpertino">Verpertino</option>
          <option value="Nocturno">Nocturno</option>
          <option value="Sabatino">Sabatino</option>
          <option value="Dominical">Dominical</option>
        </select>
        <label for="carrera">Carrera</label>
        <select class="select_carrera" name="carrera">
          <option value="Ing Sistemas">Ing Sistemas</option>
          <option value="Diseno Grafico">Diseño Grafico</option>
          <option value="Administracion de Empresa">Administracion de Empresa</option>
        </select>
        <div class="radios_becas">
          <input type="radio" name="pagos" value="Media Beca">
          <label for="">Media Beca</label>

          <input type="radio" name="pagos" value="Beca Completa">
          <label for="">Beca Completa</label>

          <input type="radio" name="pagos" value="Sin Financiamiento">
          <label for="">Sin Financiamiento</label>
        </div>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Ingresa correo electronico">
        <div class="checkbox_email">
          <input type="checkbox" name="recibir_email" value="1">
          <label for="recibir_email">Acepto recibir informacion mensual</label>
        </div>
          <input type="submit" name="submit" value="Agregar Matrícula">

      </form>
    </div>
  </body>
</html>
