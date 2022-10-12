<?php

  echo 5/2;
  echo "<br>";

  if (is_float(5/2)) {
    echo "É float <br>";
  }

  echo 2 . 3;
  echo "<br>";

  if(is_float(2 . 3)) {
    echo "É string <br>";
  }

  $nome = "Matheus";
  $sobrenome = "Battisti";

  $nomeCompleto = $nome . " " . $sobrenomes;

  echo $nomeCompleto;
  echo "<br>";

?>