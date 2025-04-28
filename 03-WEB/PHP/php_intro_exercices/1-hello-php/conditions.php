<?php

//EX: 4.A

function isMajor(int $age):bool
{
    return $age >= 18;
}
var_dump(isMajor(12));
var_dump(isMajor(18));
var_dump(isMajor(42));

//EX: 4.B

function getRetired(int $age):string
{
    $retraite = 60;
    
    if($age < $retraite){
        $anneRestante = $retraite - $age;
        return "Il vous reste $anneRestante ans.";
    }elseif($age > $retraite){
        $anneRestante = $age - $retraite;
        return "Vous etes a la retraite depuis $anneRestante ans.";
    }else{
        return "Vous etes a la retraite cette année !";
    }
}
echo getRetired(12) . PHP_EOL;
echo getRetired(60) . PHP_EOL;
echo getRetired(72) . PHP_EOL;
echo getRetired(-2) . PHP_EOL;

//EX: 4.C



?>