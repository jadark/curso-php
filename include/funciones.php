 <?php
  $wilson = array('telefono' => '9847528', 'edad' => 20, 'apellido' => 'Avenildo', 'pais' => 'Estocolmo');
  $semana = array('Lunes', 'Martes','Miercoles','Jueves','Viernes');
  function saludo($nombre){
    return "Saludo de $nombre";
  }
  function sumar($value1, $value2){
    $resultado = $value1 + $value2;
    return $resultado;
  }

  echo saludo('Carlos') . '<br/>';

  echo sumar(10, 30) . '<br/>';

  //Convertir objetiso en variables
  extract($wilson);
  echo $apellido . '<br/>';

  //$ultimidia = array_pop($semana);

  foreach ($semana as $key => $dia) {
    echo $key . ' ' .$dia . '<br/>';
  }
  //echo $ultimidia . '<br/>';

  echo join(' - ', $semana) . '<br/>';

  //Funciones matemáticas
  $numero = 15.234;
  echo round($numero, 1) . '<br/>';
  echo 'Ramdon: '. rand(1, 16) . '<br/>';
  echo ceil(12.4). '<br/>';

  //Scope de PHP
?>
