<?php

  // Arrays associativos com chaves Inteiro
  $contasCorrentes = [
    123 => [
      'nome' => 'Gustavo',
      'saldo' => 1000.32,
    ],
    456 => [
      'nome' => 'Lanna',
      'saldo' => 4000.00,
    ],
    789 => [
      'nome' => 'Pryia',
      'saldo' => 50.00,
    ],
  ];

  // Arrays associativos com chaves String
  $contasCorrentes = [
    '123' => [
      'nome' => 'Gustavo',
      'saldo' => 1000.32,
    ],
    '456' => [
      'nome' => 'Lanna',
      'saldo' => 4000.00,
    ],
    '789' => [
      'nome' => 'Pryia',
      'saldo' => 50.00,
    ],
  ];

  // Arrays associativos com chaves Float
  $contasCorrentes = [
    1.5 => [
      'nome' => 'Gustavo',
      'saldo' => 1000.32,
    ],
    2.5 => [
      'nome' => 'Lanna',
      'saldo' => 4000.00,
    ],
    3.5 => [
      'nome' => 'Pryia',
      'saldo' => 50.00,
    ],
  ];

  // Arrays associativos com chaves Bool -- True = 1 -- False = 0
  $contasCorrentes = [
    True => [
      'nome' => 'Gustavo',
      'saldo' => 1000.32,
    ],
    False => [
      'nome' => 'Lanna',
      'saldo' => 4000.00,
    ],
    True => [
      'nome' => 'Pryia',
      'saldo' => 50.00,
    ],
  ];

  // Acessando chaves do array associativo com for loop
  // echo 'For Loop' . PHP_EOL;
  // for($i = 0; $i < count($contasCorrentes); $i++){
  //   echo $contasCorrentes[$i]['nome'] . PHP_EOL ; 
  // }

  echo PHP_EOL;

  // Acessando chaves do array associativo com foreach loop
  echo 'Foreach Loop' . PHP_EOL;
  foreach($contasCorrentes as $conta){
    echo $conta['nome'] . PHP_EOL;
  }

  // Acessando chaves do array associativo com foreach loop e resgatando indice
  echo 'Foreach Loop com indice' . PHP_EOL;
  foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . ' = ' . $conta['nome'] . PHP_EOL;
  }


?>