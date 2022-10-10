<?php 

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

  function removerConta(array &$conta)
  {
    if($conta){
      unset($conta);
    } else {
      exibeMensagem("Conta Inexistente");
    }
    return $conta;
  }

?>