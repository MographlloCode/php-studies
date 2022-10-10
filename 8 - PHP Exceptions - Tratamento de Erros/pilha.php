<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try{
        funcao2();
    } catch(Throwable $erroOuExececao) {
        echo "Problem: " . $erroOuExececao->getMessage() . PHP_EOL;
        echo "Line: " . $erroOuExececao->getLine() . PHP_EOL;
        echo "Trace: " . $erroOuExececao->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    intdiv(1, 0);
    throw new BadFunctionCallException('Exceção aqui');

    var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
