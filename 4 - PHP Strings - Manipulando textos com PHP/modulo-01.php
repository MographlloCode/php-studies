<?php

$nome = 'Gustavo Mello';

// Se a string passada existir dentro da string elementar retorna True, caso contrario False
var_dump(str_contains($nome, 'Mello'));

$url = 'https://alura.com.br';

// Verifica se string começa com algo especifico
$comecaComHttps = str_starts_with($url, 'https');

if($comecaComHttps) {
  echo "Url Segura" . PHP_EOL;
} else {
  echo "Url não é segura!" . PHP_EOL;
}

// Verifica se string termina com algo especifico
$terminaComBr = str_ends_with($url, 'br');

if($terminaComBr) {
  echo "Url é brasileira" . PHP_EOL;
} else {
  echo "Url não é brasileira!" . PHP_EOL;
}

?>