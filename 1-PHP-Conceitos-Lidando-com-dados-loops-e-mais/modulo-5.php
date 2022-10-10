<?php 


// While
// $contador = 1;
// while($contador <= 15){
//   echo "#$contador" . PHP_EOL;
//   $contador ++;
// }

// For
for($contador = 1; $contador <= 15; $contador++) {
  if($contador == 13){
    continue;
  }
  echo "#$contador" . PHP_EOL;
}

?>