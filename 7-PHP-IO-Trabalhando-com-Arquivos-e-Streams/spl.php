<?php

$arquivo = new SplFileObject('arquivo.csv');

while (!$arquivo->eof()){
    $linha = $arquivo->fgetcsv(';');
    echo utf8_encode($linha[0]) . PHP_EOL;
}