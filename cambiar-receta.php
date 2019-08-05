<?php

  header('Content-Type: application/json');

  $txtRec = $_POST['slrec'];

  $return_arr = array();

  if($txtRec == 1){
    $row_array['numero'] = '01';
    $row_array['imagen'] = 'img/slider-r1.png';
    $row_array['titulo'] = 'ENSALADA CAMPERA CON LECHUGA';
    $row_array['ingred'] = '<span class="lista-r">Ingredientes</span>
                            <ul class="lista-r">
                            <li>3 tomates para ensalada</li>
                            <li>1 pimiento verde</li>
                            <li>150g de patatas</li>
                            <li>2 Huevos duros</li>
                            <li>25g de cebolla</li>
                            <li>75g de aceitunas sin hueso</li>
                            <li>1 pastilla de</li>
                            <li>Avecrem Caldo de Pollo</li>
                            <li>2 Cucharadas de vinagre</li>
                            <li>10 cucharadas de aceite de oliva virgen extra</li>
                            <li>Pimienta</li>
                            </ul>';
    $row_array['pasos'] = '<span class="lista-r">PASO 1</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Pela las patatas y córtalas en dados. Seguidamente, ponlas a hervir con 1 pastilla de Avecrem Caldo de Pollo. Mientras, lava todas las verduras y déjalas escurrir unos minutos.</span><br /><br />
                          <span class="lista-r">PASO 2</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Corta las verduras en trocitos y mézclalas en un bol. Condiméntalas con un poco de pimienta. Añade al bol los huevos duros cortados en láminas y las aceitunas, que se pueden cortar a trozos si se prefiere.</span><br /><br />
                          <span class="lista-r">PASO 3</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Prepara el aliño mezclando el aceite y el vinagre, removiendo bien para conseguir una vinagreta. Aliña la ensalada y mezcla para que quede bien impregnada.</span>';
  }else if($txtRec == 2){
    $row_array['numero'] = '02';
    $row_array['imagen'] = 'img/slider-r1.png';
    $row_array['titulo'] = 'FLAUTAS CON SALSA DE AGUACATE';
    $row_array['ingred'] = '<span class="lista-r">Ingredientes</span>
                            <ul class="lista-r">
                            <li>1 pechuga de pollo rostizado, deshebrada</li>
                            <li>12 tortillas de maíz</li>
                            <li>4 cucharadas de queso fresco rallado</li>
                            <li>2 tazas de lechuga picada, desinfectada</li>
                            <li>Aceite vegetal</li>
                            <li>1 aguacate pelado</li>
                            <li>1 de taza de aceite de oliva</li>
                            <li>2 tomates verdes</li>
                            <li>1 cucharada de jugo de limón</li>
                            <li>Sal y pimienta al gusto</li>
                            </ul>';
    $row_array['pasos'] = '<span class="lista-r">PASO 1</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Sofríe el pollo en una sartén con poca grasa, retíralo, distribúyelo entre las tortillas y enróllalas apretadamente para hacer las autas.</span><br /><br />
                          <span class="lista-r">PASO 2</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Fríelas en aceite su ciente hasta que estén doradas y escurre el exceso de grasa.</span><br /><br />
                          <span class="lista-r">PASO 3</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Para hacer la salsa: licua la pulpa de aguacate, los tomates, el jugo de limón y el aceite (si es necesario, añade un poco de agua), vacía a una salsera para que cada comensal se sirva.</span><br /><br />
                          <span class="lista-r">PASO 4</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Acomoda las autas sobre una cama de lechuga, báñalas con la salsa y espolvorea el queso.</span><br /><br />';
  }else if($txtRec == 3){
    $row_array['numero'] = '03';
    $row_array['imagen'] = 'img/slider-r1.png';
    $row_array['titulo'] = 'TACOS DE CARNITAS';
    $row_array['ingred'] = '<span class="lista-r">Ingredientes</span>
                            <ul class="lista-r">
                            <li>1 kg de lomo de cerdo troceado</li>
                            <li>1 litro de agua</li>
                            <li>1 taza de manteca de cerdo</li>
                            <li>1 taza de salsa verde</li>
                            <li>1/3 de taza de cebolla y cilantro picados</li>
                            <li>1/2 kg de tortillas</li>
                            </ul>';
    $row_array['pasos'] = '<span class="lista-r">PASO 1</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Coloca la carne en una sartén u olla grande, cubre con el agua y la manteca. Cuece a fuego medio hasta que toda el agua se evapore. La carne se comenzará a freír con la grasa; mueve para dorarla de manera uniforme.</span><br /><br />
                          <span class="lista-r">PASO 2</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Escurre la carne, pícala y sírvela en tacos acompañada de la salsa y la mezcla de cebolla con cilantro.</span><br /><br />';
  }else if($txtRec == 4){
    $row_array['numero'] = '04';
    $row_array['imagen'] = 'img/slider-r1.png';
    $row_array['titulo'] = 'SOPES TRICOLOR';
    $row_array['ingred'] = '<span class="lista-r">Ingredientes</span>
                            <ul class="lista-r">
                            <li>1 aguacate</li>
                            <li>1 chile serrano</li>
                            <li>3 tomates verdes</li>
                            <li>1/3 de cebolla picada</li>
                            <li>2 jitomates</li>
                            <li>2 guajillos hidratados</li>
                            <li>1 diente de ajo</li>
                            <li>1/2 cucharadita de orégano</li>
                            <li>12 sopes medianos</li>
                            <li>1 taza de frijoles refritos</li>
                            <li>2 tazas de pollo deshebrado</li>
                            <li>1 taza de lechuga rallada</li>
                            <li>1 taza de queso doble crema</li>
                            <li>1/2 taza de crema</li>
                            </ul>';
    $row_array['pasos'] = '<span class="lista-r">PASO 1</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Para la salsa verde: licúa el aguacate con el chile serrano y los tomates.Mezcla la cebolla y salpimienta a tu gusto. Reserva.</span><br /><br />
                          <span class="lista-r">PASO 2</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Para la salsa roja: asa los jitomates, licúalos con el guajillo, el ajo y el orégano, salpimienta y reserva.</span><br /><br />
                          <span class="lista-r">PASO 3</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Calienta los sopes. Úntales los frijoles, coloca el pollo, la lechuga, el queso y la crema.</span><br /><br />
                          <span class="lista-r">PASO 4</span><br />
                          <span class="lista-r">_______</span><br /><br />
                          <span class="lista-r">Termina con las salsas y sirve.</span><br /><br />';
  }
  array_push($return_arr, $row_array);
  echo json_encode($return_arr);
?>
