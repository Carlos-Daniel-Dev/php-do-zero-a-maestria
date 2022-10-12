<?php

  function soma($n1, $n2) {

    return $n1 + $n2;

  }

  echo soma(30, 1) . "<br>";

  $x = soma(30, 5);

  echo $x . "<br>";

  $y = soma($x, 19);

  echo $y . "<br>";

  function testeRetorno() {
    
    return "Testando";
  }

  $z = testeRetorno();

  echo $z . "<br>";