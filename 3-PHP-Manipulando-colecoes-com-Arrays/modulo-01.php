<?php 

  // Recapitulando
  $array = [
    0 => 'um',
    1 => 'dois',
    2 => 'tres',
  ];

  // Foreach
  foreach($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
  }

  // Contador de valores do array com Count
  // echo "Total: " . count($array) . PHP_EOL;

  // Contador de valores do array com Sizeof
  echo "Total: " . count($array) . PHP_EOL;

?>