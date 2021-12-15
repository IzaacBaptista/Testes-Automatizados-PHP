<?php
//importando
require_once 'EscritorDeArquivo.php';

//criando ambiente
$caminhoArquivo = md5(time());
$escritor = new EscritorDeArquivo($caminhoArquivo);

//executando
$escritor->escreve(conteudo: 'Primeira linha');
$escritor->escreve(conteudo: 'Outra linha');

//verificando
$conteudoEsperado = 'Primeira linha
Outra linha
';

if ($conteudoEsperado === file_get_contents($caminhoArquivo)) {
    echo 'TESTE OK' . PHP_EQL;
} else {
    echo 'TESTE FALHOU' . PHP_EQL;
}