<?php

  $notasBim1 = [
    'Vinicius' => 6,
    'Victoria' => 9,
  ];

  $notasBim2 = [
    'Vinicius' => 6,
  ];

  // Verifica se os valores existem entre arrays
  var_dump(array_diff($notasBim1, $notasBim2));

  // Verifica se as chaves exisstem entre arrays
  $alunosFaltantes = array_diff_key($notasBim1, $notasBim2);
  $nomeAluno = array_keys($alunosFaltantes);
  $notaAluno = array_values($alunosFaltantes);
  $arrayAlunos = array_combine($nomeAluno, $notaAluno);
  $arrayInvertido = array_flip($alunosFaltantes);

  // Pega todos os elementos que estão no primeiro array mas não estão nos proximos
  var_dump(array_diff_assoc($notasBim1, $notasBim2));


  //  --- Aula 05
  $matriculas2021 = [
    'Vinicius',
    'Victoria',
  ];

  $matriculas2022 = [
    'Gustavo',
    'Roberto',
  ];

  // Unindo arrays com array merge
  $alunos2022 = array_merge($matriculas2021, $matriculas2022);

  // Unindo arrays com o poerador "+"
  $alunos2022 = $matriculas2021 + $matriculas2022;

  //  --- Aula 07

  // Desempacotar(Unpacking) Array -- Unpacking/Spread Operator "..."
  $alunos2022 = [...$matriculas2021, ...$matriculas2022];

?>