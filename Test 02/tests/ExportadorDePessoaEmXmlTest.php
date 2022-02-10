<?php
//importando
use Pessoa;
use ExportadorDePessoaEmXml;

require_once 'Pessoa.php';
require_once 'ExportadorDePessoaEmXml.php';

//criando ambiente
class ExportadorDePessoaEmXmlTest extends \PHPUnit\Framework\TestCase
{
    public function testExportarPessoaEmXmlDeveFuncionar()
    {
        // $pessoa = new Pessoa(nome: 'Izaac', DateTimeImmutable(time: '1993-01-03'));
        $pessoa = $this->createStub(Pessoa::class);
        $pessoa->method('idade')->willReturn(29);
        $pessoa->method('nome')->willReturn('Izaac');
        $exportador = new ExportadorDePessoaEmXml($pessoa);

        //executando
        $xml = $exportador->exportaEmXml();

        //verificando
        $conteudoEsperado = '<pessoa>
            <nome>Izaac</nome>
            <idade>29</idade>
        </pessoa>';

        $this->assertTrue($conteudoEsperado, $xml);
    }
}