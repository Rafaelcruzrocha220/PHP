<?php

  /*
    Array é um mapa ordenado que relaciona valores e chaves. Pode ser tratado como
    uma lista(Vetor)
  */

  $array = ["Verdadeiro" => array ("True","Real",), /* Array multidimensional */
            "Falso" => array ("False","Notreal",),];


  print_r ($array['Falso'][1]); /*Acessando um valor especifico do array*/
  echo "\n";
  var_dump ($array['Falso'][1]);
?>
