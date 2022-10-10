<?php

  $email = 'vinicius@alura.com.br';
  $senha = '123';

  // Pegando substring do ponto 0 ao ponto 8
  echo substr($email, 0, 8) . PHP_EOL;

  // Pegando substring do ponto 9 em diante
  echo substr($email, 9) . PHP_EOL;

  // --- Aula 04

  // Pegando subnnstring a partir de uma posição
  $posicaoDoArroba = strpos($email, '@');
  $usuario = substr($email, 0, $posicaoDoArroba) . PHP_EOL;
  $dominio = substr($email, $posicaoDoArroba + 1) . PHP_EOL;

  // --- Aula 06

  // 1a forma (não deveria usar) - Acessar senha como array
  // for($i = 0; $i <= strlen($senha); $i++) { echo $senha[$i] . PHP_EOL; };

  // 2a forma - Contando tamanho com strlen()
  echo mb_strlen($senha) . PHP_EOL;

  // --- Aula 08

  // Tornando um texto em letras maiusculas
  $maiusculas = mb_strtoupper($usuario);
  echo $maiusculas . PHP_EOL;

  // Tornando um texto em letras minusculas
  $minusculas = mb_strtolower($usuario);
  echo $minusculas . PHP_EOL;

?>