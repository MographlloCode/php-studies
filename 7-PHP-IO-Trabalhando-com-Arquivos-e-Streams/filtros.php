<?php

require 'MeuFiltro.php';

$arquivoAberto = fopen('arquivo-texto.txt', 'a+');

stream_filter_register('patricia.filtro', MeuFiltro::class);
stream_filter_append($arquivoAberto, 'patricia.filtro');

$conteudo = fread($arquivoAberto, filesize('arquivo-texto.txt'));

echo $conteudo;