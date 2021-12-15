<?php
//importando
require_once 'EscritorDeArquivo.php';

//criando ambiente
$caminhoArquivo = 'arquivo';
$escritor = new EscritorDeArquivo($caminhoArquivo);

//executando
$escritor->escreve(conteudo: 'Primeira linha');
$escritor->escreve(conteudo: 'Outra linha');

$conteudoEsperado = 'Primeira linha
Outra linha
';

//verificando
if ($conteudoEsperado === file_get_contents($caminhoArquivo)) {
    echo 'TESTE OK' . PHP_EQL;
} else {
    echo 'TESTE FALHOU' . PHP_EQL;
}