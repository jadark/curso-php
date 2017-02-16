<?php
  //htmlspecialchars($_SERVER['PHP_SELF']);
  if ($_POST) {
    //echo $_POST['nombre'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Testing</title>
  </head>
  <body>
    <form id="form" action="form/recibe.php" method="post">
    <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
      <input type="text" placeholder="Ingresa su nombre" name="nombre" value="">
      <br/>
      <label for="hombre">Hombre</label>
      <input type="radio" name="sexo" value="hombre" id="hombre">

      <label for="mujer">Mujer</label>
      <input type="radio" name="sexo" value="mujer" id="mujer">

      <br/>
      <select class="" name="year" id="year">
        <option value="1989">1989</option>
        <option value="2000">2000</option>
        <option value="2010">2010</option>
      </select>

      <br/>
      <label for="terminos">Aceptar terminos y condiciones</label>
      <input type="checkbox" name="terminos" id="terminos" value="ok">

      <br/>
      <input type="submit" name="submit" value="Enviar">
    </form>
  </body>
</html>
