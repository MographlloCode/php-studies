<?php

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

  // Subrotina - Executa e não devolve valor (Void == Função não retorna nada)
  function exibeMensagem($mensagem) : void
  {
    echo $mensagem . PHP_EOL;
  }

  function pulaLinha() : void
  {
    echo PHP_EOL;
  }

  // Função - Executa e devolve valor
  function sacar(array $conta, float $valor) : array
  {
    if($valor > $conta['saldo']) {
      exibeMensagem("Você não pode sacar");
    } else {
      $conta['saldo'] -= $valor;
    }
    return $conta;
  }

  function depositar(array $conta, float $valor) : array
  {
    if($valor > 0){
    $conta['saldo'] += $valor;
    } else {
      exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
  }

  // Loop Foreach
  foreach($contasCorrentes as $cpf => $conta) {
    $conta = sacar($conta, 500);
    exibeMensagem($cpf . " " . $conta['nome'] . " " . $conta['saldo'] . PHP_EOL);
    $conta = depositar($conta, 1000);
    exibeMensagem($cpf . " " . $conta['nome'] . " " . $conta['saldo'] . PHP_EOL);
  }

?>