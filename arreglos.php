<?php
  $semana = array('Lunes', 'Martes','Miercoles','Jueves','Viernes');
  $arreglo = array(2, true, array('123', 100));

  // Variables Asociativos
  $wilson = array('telefono' => '9847528', 'edad' => 20, 'apellido' => 'Avenildo', 'pais' => 'Estocolmo');
  echo $wilson['telefono'] . '<br/>';

  $ultimomes = count($semana) - 1;
  echo $semana[$ultimomes] . '<br/>';
  // Ordenamos de forma ascendente --> y con rsort ordenamos de forma descendente
  //sort($semana);
  $booleano = true;
  $numero = 21;
  $numbertwo = 5;
  $resultado = $numero % $numbertwo;

  //Incremento y decremento
  echo ++$numero . '<br/>';

  //Operadores de cadena
  $texto = 'Diciembre ';
  $texto .= 'Text proeuab 2';
  echo $texto . '<br/>';

  //Variable var_dump
  echo "<pre>";
  var_dump($booleano);
  echo "</pre>";

  print_r($wilson);
  echo "<br/>";
  echo "<br/>";

  //Switch
  $testSwitch = 'Martes';
  switch ($testSwitch) {
    case 'Lunes':
      echo 'Estoy en el lunes' . '<br/>';
      break;
    case 'Martes':
      echo 'Estoy en el Martes' . '<br/>';
      break;
    default:
      echo 'No tenemos días de la semana' . '<br/>';
  }

  //Condicionales en varialbes
  $edad = 10;
  $edad = (isset($edad)) ? $edad : 'El usuario no ingreso su edad';
  echo "Edad: " . $edad . '<br/>';

  //Ciclos for
  for ($i=0; $i <= 3 ; $i++) {
    echo $i . ". Holi <br/>";
  }
  //Ciclo while
  $a = 1;
  while ($a <= 3) {
    # code...
    echo $a . '<br/>';
    $a++;
  }

  //Recorrer arreglos con For
  for ($i=0; $i < count($semana) ; $i++) {
    echo $semana[$i] . '<br/>';
  }

?>

<ul>
  <?php
    foreach ($semana as $dia){
      if ($dia == 'Miercoles') {
        continue;
      }
      echo '<li>'. $dia . '</li>';
    }
  ?>
  <br/>
  <br/>
  <?php foreach ($semana as $key => $dia):
    echo '<li class="'. ++$key .'">'. $dia . '</li>';
  ?>
  <?php endforeach; ?>
</ul>
<?php
  foreach ($wilson as $date => $value){
    echo '<p>'. $date . ': '. $value .'</p>';
  }
?>
<label for=""><?php echo $resultado; ?></label>
