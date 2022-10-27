<?php

  $host = "localhost";
  $dbname = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

  // ASSUNTO DA AULA

  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

  $nome = "Suporte monitor";
  $descricao = "O suporte esta novo e na caixa";

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();
