<?php

  $arrayTeste = [];
  for($i=0; $i<30; $i++) {

    array_push($arrayTeste, $i);
  }

  function maiorSete($array) {

    for($i=0; $i<count($array); $i++) {
        if ($array[$i] > 7) {
            echo $array[$i] . "<br>";
        }
    }

  } 

  maiorSete([1,2,3,4,5,6,7,8,9,10,11,13,14,15]);