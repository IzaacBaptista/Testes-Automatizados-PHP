<?php
//importando
use Pessoa;
use ExportadorDePessoaEmXml;

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//criando ambiente 
// $pessoa = new Pessoa(nome: 'Izaac', DateTimeImmutable(time: '1993-01-03'));
$exportador = new ExportadorDePessoaEmXml(new class extends Pessoa {
    public function __construct()
    {
    }
    
    public function idade(): int
    {
        return 22;
    }

    public function nome(): string
    {
        return 'Izaac';
    }
});

//executando
$xml = $exportador->exportaEmXml();

//verificando
$conteudoEsperado = '<pessoa>
    <nome>Izaac</nome>
    <idade>29</idade>
</pessoa>';

if ($conteudoEsperado === xml) {
    echo 'TESTE OK' . PHP_EQL;
} else {
    echo 'TESTE FALHOU' . PHP_EQL;
}