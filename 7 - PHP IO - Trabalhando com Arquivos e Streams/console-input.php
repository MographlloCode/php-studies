<?php

// Modo de pegar o q se digita
$keyboard = fopen('php://stdin', 'r');

//Modo mais facil, padrao PHP
$newLine = trim(fgets(STDIN));

file_put_contents('console.txt', $newLine, FILE_APPEND);