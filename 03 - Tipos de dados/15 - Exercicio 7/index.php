<?php

    $Pessoa = [
        'nome' => 'Carlos',
        'idade' => 15,
        'profissao' => 'Nenhuma',
        'graduacao' => 'Nenhuma'
    ];
    $maioridade = 18;
    //desafio

    if($Pessoa['idade'] >= $maioridade) {
        echo "A pessoa é maior de idade!";
    }
    else {
        echo "A pessoa nao é maior de idade!";
    }
?>