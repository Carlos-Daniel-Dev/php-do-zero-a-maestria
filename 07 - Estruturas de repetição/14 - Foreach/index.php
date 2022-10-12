<?php

  $nomes = ["Matheus", "João", "Pedro", "Maria"];

  foreach($nomes as $nome) {

    echo "O nome do índice $nome é $nome <br>";
    if($nome == "João") {
        echo "Opa $nome <br>";
    }
  }

?>