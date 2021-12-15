<?php

class Pessoa
{
    private string $caminho;

    public function __construct(string $caminho) 
    {
        $this->$caminho = $caminho;
    }

    public function escreve(string $conteudo) 
    {
        file_put_contents($this->$caminho, data:$conteudo . PHP_EQL, flags:FILE_APPEND);
    }

}

?>