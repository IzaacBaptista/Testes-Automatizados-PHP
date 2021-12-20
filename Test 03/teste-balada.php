<?php

    require_once 'Pessoa.php';
    require_once 'SegurancaBalada.php';

    //Arrange
    $pessoa = new Pessoa( nome: 'Izaac', new DateTimeImmutable(time: '1993-01-03'));
    $seguranca = new segurancaBalada();

    //Act
    $deixouPessoaEntrar = $seguranca->deixaEntrar($pessoa);


    //Assert
    if($deixouPessoaEntrar === true) {
        echo 'TESTE OK' . PHP_EQL;
    } else {
        echo 'TESTE FALHOU' . PHP_EQL;
    }

?>