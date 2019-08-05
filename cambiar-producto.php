<?php

  header('Content-Type: application/json');
  $txtNumb = $_POST['slnum'];

  $return_arr = array();

  if($txtNumb == 1){
    $row_array['numero'] = '01';
    $row_array['imagen'] = 'img/slider-p01.png';
    $row_array['subtitulo'] = 'LECHUGA SANGRÍA<br />RED LEAF LETTUCE';
    $row_array['descripcion'] = '<p class="texto-p">
                              De los diferentes tipos de lechuga, la Romana es la más conocida. De hecho es una de las que más se utiliza para ensaladas. Tiene un tallo vigoroso y una cabeza larga. Puedes diferenciarla del resto porque sus hojas son largas y crujientes y tiene un color verde intenso.
                            </p><br />
                            <p class="texto-p">
                              Y es que esta lechuga no solo es la más barata, sino que es la que más propiedades y vitaminas contiene. Resulta ideal para todo tipo de ensaladas. Y por si no lo sabías, también existe la lechuga Romana en un tamaño más pequeño. Seguramente cuando leas el nombre caerás: los cogollos de Tudela.
                            </p>';
    array_push($return_arr, $row_array);
  }else if($txtNumb == 2){
    $row_array['numero'] = '02';
    $row_array['imagen'] = 'img/slider-p01.png';
    $row_array['subtitulo'] = 'SUBTITULO PRUEBA<br />02 LEAF LETTUCE';
    $row_array['descripcion'] = '<p class="texto-p">
                              Texto de prueba parrafo A numero 02... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p><br />
                            <p class="texto-p">
                              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>';
    array_push($return_arr, $row_array);
  }else if($txtNumb == 3){
    $row_array['numero'] = '03';
    $row_array['imagen'] = 'img/slider-p01.png';
    $row_array['subtitulo'] = 'LOREM UPSUM DOLOR<br />03 LEAF LETTUCE';
    $row_array['descripcion'] = '<p class="texto-p">
                              Texto de prueba parrafo inicial numero 03... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p><br />
                            <p class="texto-p">
                              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>';
    array_push($return_arr, $row_array);
  }else if($txtNumb == 4){
    $row_array['numero'] = '04';
    $row_array['imagen'] = 'img/slider-p01.png';
    $row_array['subtitulo'] = 'PRUEBA SUBTITULO<br />04 LEAF LETTUCE';
    $row_array['descripcion'] = '<p class="texto-p">
                              Texto de prueba parrafo A numero 04... Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p><br />
                            <p class="texto-p">
                              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>';
    array_push($return_arr, $row_array);
  }

  echo json_encode($return_arr);
?>
