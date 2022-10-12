<?php

  function velocidadeMaxima($vel) {

    if(is_int($vel)) {
        echo "O carro atinge a velocidade max de " . $vel . "km/h <br>";
    }
    else {
        echo "Apenas numeros";
    }
  }

  velocidadeMaxima(300);
  velocidadeMaxima(400);
  velocidadeMaxima(500);

  echo "teste continuando <br>";

  $velocidade = 125;
  velocidadeMaxima($velocidade);
  velocidadeMaxima(300, $velocidade);