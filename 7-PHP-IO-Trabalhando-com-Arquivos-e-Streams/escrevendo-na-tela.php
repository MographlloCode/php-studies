<?php

echo "Oi\n";
print "Oi\n";

$tela = fopen('php://stdout', 'w');
fwrite($tela, "Oi\n");

fwrite(STDOUT, "Oi\n");

fwrite(STDERR, "Oi\n");


$texto = fopen('zip://zip.zip#arquivo-texto.txt', 'r');
stream_copy_to_stream($texto, STDOUT);