<?php

$arquivo1 = file('arquivo-texto.txt');
$arquivo2 = file('console.txt');

$csv = fopen('arquivo.csv', 'w');

foreach ($arquivo1 as $linhas) {
    $linha = [trim(utf8_decode($linhas)), 'Sim'];
    fputcsv($csv, $linha, ';');
}

foreach ($arquivo2 as $linhas) {
    $linha = [trim(utf8_decode($linhas)), 'Nao'];
    fputcsv($csv, $linha, ';');
}