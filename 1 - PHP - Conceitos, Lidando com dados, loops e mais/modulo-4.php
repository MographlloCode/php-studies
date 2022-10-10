<?php 

  // Estrutura de Decisão
  $idade = 19;
  $nome = "Gustavo";

  echo "Você só pode entrar se for maior de idade." . PHP_EOL . PHP_EOL;

  // Maior que
  // Igual a
  // Ou
  if($idade > 20 || $idade == 18 || $idade == 19 && $nome == "Gustavo") {
    echo "Salve $nome! Você tem $idade anos. Na trave em! Entra ai!" . PHP_EOL;
  } else {
    echo "Você não é maior de idade. Não vai passar!" . PHP_EOL;
  }
  
?>