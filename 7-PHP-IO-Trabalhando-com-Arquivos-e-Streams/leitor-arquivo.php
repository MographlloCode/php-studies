<?php

// Abrindo arquivo
$arquivo_aberto = fopen('arquivo-texto.txt', 'r');

/* Lendo linha a linha
*
*   while(!feof($arquivo)) {
*       $linha = fgets($arquivo);
*       echo $linha;
*   }
*
*/

/* Lendo o Arquivo inteiro, 120mb de limite do PHP
*
* $tamanhoDoArquivo = filesize('arquivo-texto.txt');
* $conteudo = fread($arquivo, $tamanhoDoArquivo);
*
*   echo $conteudo;
*
*/

// le o conteudo do arquivo e entrega normalmente
$arquivo = file_get_contents('arquivo-texto.txt');
echo $arquivo . PHP_EOL;

// le o conteudo do arquivo e entrega em array
$arquivo_array = file('arquivo-texto.txt');
var_dump($arquivo_array);

// Fechando arquivo
fclose($arquivo_aberto);