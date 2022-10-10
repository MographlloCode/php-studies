<?php 

  // Numeros Impares
  for($contador = 1; $contador <= 100; $contador++ ){
    if($contador % 2 == 1) {
      echo $contador . PHP_EOL;
    } else {
      continue;
    }
  }

  echo PHP_EOL;
  
  //  Tabuada
  $numero = 7;
  for($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
    $conta = $numero * $multiplicador;
    echo "$numero x $multiplicador = $conta" . PHP_EOL;
  }

  echo PHP_EOL;

  // IMC
  $peso = 88.6;
  $altura_em_metros = 1.89;

  $baixo_peso = 18.5;
  $normal = 24.99;
  $sobrepeso = 29.99;
  $obesidade = 30;

  $calculo = $peso/($altura_em_metros**2);
  $calculo = round($calculo, 2);

  if ($calculo <= $baixo_peso) {
    echo "IMC = $calculo, Você está abaixo do peso.";
  } else if ($calculo > $baixo_peso && $calculo <= $normal) {
    echo "IMC = $calculo, Você está dentro da faixa de peso.";
  } else if ($calculo > $normal && $calculo <= $sobrepeso) {
    echo "IMC = $calculo, Você está em sobrepeso.";
  } else if ($calculo >= $obesidade) {
    echo "IMC = $calculo, Você está obeso";
  }


?>