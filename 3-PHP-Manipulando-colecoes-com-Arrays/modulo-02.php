<?php

  $notas = [
    10,
    8,
    9,
    7
  ];
  // VarDump para visualizar dados sobre variáveis
  var_dump($notas);


  // Ordena array em ordem crescente ou alfabética
  $notasOrdenadas = $notas;
  sort($notasOrdenadas); 
  var_dump($notasOrdenadas);

  // ----- Aula 4

  $notasAssociativo = [
    [
      'aluno' => 'Gustavo',
      'nota' => 10
    ],
    [
      'aluno' => 'Maria',
      'nota' => 6
    ],
    [
      'aluno' => 'Lanna',
      'nota' => 9
    ],
  ];

  // function ordenaNotas(array $nota1, array $nota2): int
  // {
  //   return $nota2['nota'] <=> $nota1['nota'];
  //   // if ($nota1['nota'] > $nota2['nota']) {
  //   //   return -1;
  //   // }
  //   // if ($nota2['nota'] > $nota1['nota']) {
  //   //   return 1;
  //   // }
  //   // return 0;
  // }

  // $notasAssociativo = usort($notasAssociativo, 'ordenaNotas');
  // var_dump($notasAssociativo);

  // --- Aula 06 

  // Realiza o inverso do sort em uma array padrão
  rsort($notas);

  // Ordena Array Associativo
  asort($notasAssociativo);

  // Ordena de modo reverso um Array Associativo
  arsort($notasAssociativo);

  // Ordena Array Associativo pelas chaves
  ksort($notasAssociativo);

  // Ordena de modo reverso um Array Associativo pelas chaves
  krsort($notasAssociativo);


?>