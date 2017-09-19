<?php

function fibonacci($n)
{
    $first = 0;
    $second = 1;
    
    if ($n == 1) {
        echo $first;
    } elseif ($n == 2) {
        echo "{$first} {$second}";
    } elseif ($n > 2) {
        echo "{$first} {$second} ";
        for ($i = 0; $i < $n - 2; $i++)
        {
          $result = $first + $second;
          echo " {$result}";
          $first = $second;
          $second = $result;
        }
    }
    echo "\n";
}

//show first fibonacci
fibonacci(1);
fibonacci(2);
fibonacci(3);
fibonacci(20);
