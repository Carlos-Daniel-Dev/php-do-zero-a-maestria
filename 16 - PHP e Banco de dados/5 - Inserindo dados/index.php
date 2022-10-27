<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host,$user,$pass,$db);

  // Assunto da aula
  
  $table = "itens";
  $nome = "Xícara";
  $descricao = "E uma xícara usada de cor rosa";

  $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

  echo $q;

  $conn->query($q);

  $conn->close();