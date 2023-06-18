<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio09</title>
</head>

<body>
  <a href="09f.php?nombre=Diego&apellido=Forlan">Enlace</a>
  <form action="procesar.php" method="post">
    <input type="text" placeholder="Nombre" name="nombre">
    <input type="text" placeholder="Apellido" name="apellido">
    <input type="date" placeholder="Fecha de nacimiento" name="apellido">
    <input type="email" placeholder="Correo electronico" name="correo">
    <input type="tel" placeholder="Celular">
    <!-- etiqueta for es usada para referenciar el id del elemento al que 
  pertenece mejor utilizada para checkbox con label-->
    <label for="departamento">Departamento en que recide: </label>
    <select name="" id="departamento" size="5">
      <option value="" selected>Artigas</option>
      <option value="">Canelones</option>
      <option value="">Cerro Largo</option>
      <option value="">Colonia</option>
      <option value="">Durazno</option>
      <option value="">Flores</option>
      <option value="">Florida</option>
      <option value="">Lavalleja</option>
      <option value="">Maldonado</option>
      <option value="">Montevideo</option>
      <option value="">Paysandú</option>
      <option value="">Río Negro</option>
      <option value="">Rivera</option>
      <option value="">Rocha</option>
      <option value="">Salto</option>
      <option value="">San José</option>
      <option value="">Soriano</option>
      <option value="">Tacuarembó</option>
      <option value="">Treinta y Tres</option>
    </select>
    <br>
    <p>Elija suscripcion: </p>
    <input id="suscripcionMe" type="radio" name="suscripcion" checked value="mensual"></input>
    <label for="suscripcionMe">Mensual</label>
    <input id="suscripcionAn" type="radio" name="suscripcion" value="anual"></input>
    <label for="suscripcionAn">Anual</label>
    <input type="hidden" id="token">
    <input type="checkbox" id="box1" value="favorito_uno">
    <label for="box1">Favorito uno</label>
    <input type="checkbox" id="box2" value="favorito_dos">
    <label for="box2">Favorito dos</label>
    <textarea name="comentario" cols=" 30" rows="10">Escribe aquí tus comentarios...</textarea>
    <button type="reset">Borrar</button>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>