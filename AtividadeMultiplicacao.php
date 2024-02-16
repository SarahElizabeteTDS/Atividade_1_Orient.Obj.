<?php

    $num1 = readline("Insira o primeiro número a ser incluido na operação: ");
    $num2 = readline("Insira o segundo número a ser incluido na operação: ");

    function multiplicacao($num1, $num2)
    {
        $result = 0;
        for ($i = 0; $i < $num2; $i++) 
        { 
            $result += $num1;
        }

        return $result;
    }

   print (multiplicacao($num1,$num2) . "\n");

