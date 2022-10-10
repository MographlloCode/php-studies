<?php

error_reporting(E_ALL);
ini_set('log_errors', 1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso e periogoso";
            break;
        case E_NOTICE:
            echo "Melhor nao fazer isso";
            break;
    }
});

echo $var;
echo $array[12];

echo CONSTANTE;