<?php

class MinhaExcecao extends Exception
{
    public function exibeMsg()
    {
        echo "MSG";
    }
}

try {
    throw new MinhaExcecao();
} catch(MinhaExcecao $e) {
    $e->exibeMsg();
}
