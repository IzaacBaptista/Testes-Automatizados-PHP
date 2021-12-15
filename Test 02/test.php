<?php
//importando
require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXmll.php';

//criando ambiente 
$pessoa = new Pessoa(nome 'Izaac', DateTimeImmutable(time: '1993-01-03'));
$exportador = new ExportadorDePessoaEmXmll($pessoa);

//executando
xml = exportador->ExportaEmXml();

//verificando
$conteudoEsperado = '<pessoa><nome>Izaac</nome><idade>29</idade></pessoa>';

if ($conteudoEsperado === xml) {
    echo 'TESTE OK' . PHP_EQL;
} else {
    echo 'TESTE FALHOU' . PHP_EQL;
}