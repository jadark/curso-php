<?php
  //Obteniendo desde Post
  // if (!$_POST) {
  //   header('Location: http://192.168.1.34/cursophp/');
  // }
  //
  // $nombre = $_POST['nombre'];
  // $sexo = $_POST['sexo'];
  // $year = $_POST['year'];
  // $terminos = $_POST['terminos'];
  //
  // echo 'Hola '.$nombre.' eres '.$sexo;

  //print_r($_GET);

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Se enviaron por post';
  }else{
    echo 'Se enviaron por post';
  }

  if (isset($_POST['submit'])) {
    echo 'Se enviaron los datos correctamente <br/>';
    print_r($_POST['submit']);
  }



?>
