<?php

  $a = 10;

  function testeEscopo() {
    echo $a . "<br>";
  }
  testeEscopo();
  echo $a . "<br>";