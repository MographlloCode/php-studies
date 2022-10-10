<?php

  // Subrotina - Executa e não devolve valor (Void == Função não retorna nada)
  function exibeMensagem($mensagem) : void
  {
    echo $mensagem . PHP_EOL;
  }

  function pulaLinha() : void
  {
    echo PHP_EOL;
  }

  // Passagem com referência feita com &
  function titularComLetrasMaiusculas(array &$conta) : void
  {
    $conta['nome'] = mb_strtoupper($conta['nome']);
  }

  function exibeConta(array $conta) : void
  {
    ['nome' => $nome, 'saldo' => $saldo] = $conta;
    exibeMensagem("<li>Nome: $nome | Saldo: $saldo");
  }

?>