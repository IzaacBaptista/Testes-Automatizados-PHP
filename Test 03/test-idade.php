<?php

    require_once 'Pessoa.php';

    Pessoa = new Pessoa(nome: 'Izaac', new DateTmeImmutable(time:'1993-01-03'));

    $idadePessoa = $pessoa->idade();

    $idadeEsperada = 22;

    if($idadeEsperada === $idadePessoa) {
        echo 'TESTE OK' . PHP_EQL;
    } else {
        echo 'TESTE FALHOU' . PHP_EQL;
    }
?>