<?php

require_once 'EscritorDeArquivo.php';

$caminhoArquivo = 'arquivo';
$escritor = new EscritorDeArquivo($caminhoArquivo);

$escritor->escreve(conteudo: 'Primeira linha');
$escritor->escreve(conteudo: 'Outra linha');