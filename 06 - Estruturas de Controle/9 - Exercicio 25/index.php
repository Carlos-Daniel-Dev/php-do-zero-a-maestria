<?php

  $n1 = 10;
  $n2 = 90;

  if (is_int($n1)) {

    global $multi;
    $multi = $n1 * 2;
    if ($multi > 100) {

        echo $multi . "É maior que 100";
    
    } else {

        echo $multi. "É menor que 100";

    }
  } 
  else {
    
    echo "Nao é numero";
  }


?>