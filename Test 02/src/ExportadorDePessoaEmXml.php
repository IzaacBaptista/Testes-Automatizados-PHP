<?php

use Pessoa;

class ExportadorDePessoaEmXml
{
    private Pessoa $pessoa;

    public function __construct(Pessoa $pessoa)
    {
        $this->$pessoa = $nome;
    }

    public function exportarEmXml(): string
    {
        return "
            <pessoa>
                <nome>{$this->pessoa->nome()}</nome>
                <idade>{$this->pessoa->idade()}</idade>
            </pessoa>
        ";
    }
}

?>