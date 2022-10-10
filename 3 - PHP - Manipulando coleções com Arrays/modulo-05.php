<?php

  $array = [
    'Luana',
  ];

  // Adicionando elementos ao final de um array -- Retornando o numero de elementos que o array passou a ter 
  array_push($array, 'Lucia', 'Joao');

  // Adicionando um unico valor ao final de um array
  $array[] = 'Lucinda';

  // Adicionando elementos ao inicio de um array -- Retornando o numero de elementos que o array passou a ter 
  array_unshift($array, 'Pablo', 'Karen');

  // Array Shift Remove e Pega o primeiro elemento de um array, reordenando os elementos sequentes
  array_shift($array);

  // Array Pop Remove e Pega o ultimo elemento de um array, reordenando os elementos sequentes
  array_pop($array);

  var_dump($array);

  //  --- Aula 04

  $dados = ['Vinicius', 7, 21,];
  
  // Cria variaveis de acordo com as posições dos elementos do array usando list()
  list($nome, $nota, $idade) = $dados;

  var_dump($nome, $nota, $idade);

  //  --- Aula 06
  $dadosParaExtrair = [
    'nomeExtraido'  => 'Gustavo',
    'notaExtraida' => 10,
  ];

  // Percorre o array e transforma as chaves em variaveis, atribuindo os valores às variaveis
  extract($dadosParaExtrair);
  var_dump($nomeExtraido, $notaExtraida);

  // Percorre as variaveis e trnsforma em array
  var_dump(compact($nomeExtraido, $notaExtraida));

?>