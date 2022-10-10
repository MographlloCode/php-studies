<?php

  //  Lista - List | Array/Vetor
  $idadeList = array(20, 21, 22, 23, 24, 25);
  $idadeList = [20, 21, 22, 23, 24, 25];

  // Acessando Vetor/Array
  echo($idadeList[3]) . PHP_EOL . PHP_EOL; // 23

  // Exibindo posições do vetor em loop
  for($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
  }

?>