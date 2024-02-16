<?php

    $num1 = readline("Insira o primeiro número a ser incluido na operação: ");
    $num2 = readline("Insira o segundo número a ser incluido na operação: ");

    function multiplicacao($n1, $n2)
    {
        $result = 0;
        for ($i = 0; $i < $n2; $i++) 
        { 
            $result += $n1;
        }

        return $result;
    }

    print (multiplicacao($num1,$num2) . "\n");

