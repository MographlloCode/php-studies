<?php

  // --- Aula 02 → Separando nome e sobrenome

  $nome = 'Vinícius Dias';
  $email = 'email@teste.com';

  // Utilizando Explode() e List() para seprar em variaveis
  [$nome, $sobrenome] = explode(' ', $nome);
  echo "Nome: $nome, Sobrenome: $sobrenome" . PHP_EOL;

  // Utilizando Explode() e List() para seprar csv em variaveis
  $csv = '324,Lata 250ml,Coca-Cola;';
  [$id, $produto, $marca] = explode(',', $csv);
  echo "Id: $id, Produto: $produto, Marca: $marca" . PHP_EOL;

  // --- Aula 03 → Unindo nome completo

  $telefones = ['(24) 99999 - 9999, (21) 99999 - 9999, (13) 99999 - 9999'];
  $arrayToString =  implode(PHP_EOL, $telefones) . PHP_EOL;
  echo $arrayToString;

  // --- Aula 06 → Removendo Espaços

  // Aparando espaços da string, os espaços são o comportamento padrão da função "trim()", ele só manipula as extremidades
  $removeEspaço = trim($email);
  echo $removeEspaço . PHP_EOL;

  // Ao usar ltrim() você apara tudo que está definido à esquerda da string
  $removeAsquerda = ltrim($email, 'e');
  echo $removeAsquerda . PHP_EOL;

  // Ao usar rtrim() você apara tudo que está definido à direita da string
  $removeAdireita = ltrim($email, 'm');
  echo $removeAdireita . PHP_EOL;

?>