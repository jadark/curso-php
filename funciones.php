<?php
function saludo($nombre){
  return "Saludo de $nombre";
}
function sumar($value1, $value2){
  $resultado = $value1 + $value2;
  return $resultado;
}

echo saludo('Carlos') . '<br/>';

echo sumar(10, 30) . '<br/>';
?>
