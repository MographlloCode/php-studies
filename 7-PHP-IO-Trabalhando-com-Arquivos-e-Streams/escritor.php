<?php

/* Escrevendo Linha no Arquivo com a+
 *
 * $arquivo_aberto =  fopen('arquivo-texto.txt', 'a+');
 * $nome = "\n4. Patrícia Abravanel";
 * fwrite($arquivo_aberto, $nome);
 * fclose($arquivo_aberto);
 *
 */

$nome = "\n4. Gustavo Abravanel";
file_put_contents('arquivo-texto.txt',$nome, FILE_APPEND);
