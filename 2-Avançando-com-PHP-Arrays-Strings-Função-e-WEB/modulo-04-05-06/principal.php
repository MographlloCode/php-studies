<?php

  // Include pede mas não torna essencial
  // @include './contas.php'; 
  // @include './funcoes.php';
  // @include './subrotinas.php';

  // Require pede e se não existir crasha o programa
  require 'contas.php';
  require 'funcoes.php';
  require 'subrotinas.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
</head>
<body>
  <h1>Contas Correntes</h1>
  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3>
          <?= "CPF: $cpf"; ?>
        </h3>
      </dt>
      <dd>
        <?= "Nome: {$conta['nome']}"; ?>
      </dd>
      <dd>
        <?= "Saldo: {$conta['saldo']}"; ?>
      </dd>
    <?php } ?>
  </dl>
</body>
</html>