<?php

    $notas = [
      'Vinicius' => 1,
      'Lanna' => 1,
      'Gustavo' => 2,
      'Leticia' => 3,
      'Lira' => 4,
      'Amanada' => 5,
      'Barbara' => 6,
    ];

    // Isso é iguaL a...
    // if (gettype($notas) === 'array') {
    //   echo 'Sim, é um array';
    // }
    
    // Isso
    if (is_array($notas)) {
      echo 'Sim, é um array' . PHP_EOL;
    }

    // Recebe um array por parametro e retorna verdadeiro se todas as chaves do array forem números (Começando do 0 sem pular nenhum)
    var_dump(array_is_list($notas));

    // Verifica Chave nmo Array
    var_dump(array_key_exists('Barbara', $notas));

    // Verifica Chave existe no Array e não é nula
    var_dump(isset($notas['Barbara']));

    // Verifica valor no Array, você pode usar strict para fazer com que ele atue como "==="
    var_dump(in_array(1, $notas));

    // Busca Chave referente ao valor X, você pode usar strict para fazer com que ele atue como "==="
    var_dump(array_search(3, $notas));

?>