<?php
    //EX:2.A

    function getSum($i, $x): int
    {
        $result = $i + $x;
        return $result;
    }
    echo getSum(5, 3) . PHP_EOL;

    //EX: 2.B

    function getSub($a, $z):int
    {
        $result = $a - $z;
        return $result;
    }
    echo getSub(5, 3) . PHP_EOL;
    echo getSub(3, 5) . PHP_EOL;

    //EX: 2.C

    function getMulti($num1, $num2): float
    {
        $resultat = $num1 * $num2;
        return round($resultat);
    }
    echo getMulti(5.6, 3) . PHP_EOL;
    echo getMulti(5.6, -3.7) . PHP_EOL;

    //EX: 2.D
    
    function getDiv($n1, $n2):int
    {
        $div = $n1 / $n2;
        return round($div);
    }

    echo getDiv(20, 3) . PHP_EOL;
    echo getDiv(20, 0) . PHP_EOL;
