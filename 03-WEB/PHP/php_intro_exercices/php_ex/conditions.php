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
        return "Il vous reste $anneRestante ans avant la retraite.";
    }
    elseif($age > $retraite){
        $anneRestante = $age - $retraite;
        return "Vous etes a la retraite depuis $anneRestante ans.";
    }
    else{
        return "Vous etes a la retraite cette année !";
    }
}
echo getRetired(12) . PHP_EOL;
echo getRetired(60) . PHP_EOL;
echo getRetired(72) . PHP_EOL;
echo getRetired(-2) . PHP_EOL;

//EX: 4.C

 function getMax(float $_nombreMax, float $_nombreMid, float $_nombreMin):float
 {
    if($_nombreMax == $_nombreMid || $_nombreMax == $_nombreMin || $_nombreMid == $_nombreMin){
        return 0;
    }

    //Trouve le Nombre Max

    $max = max($_nombreMax, $_nombreMid, $_nombreMin);

    return round($max, 3);
 }

 echo getMax(5.555, 5.555, 3.333) . PHP_EOL;
 echo getMax(6.2563, 4.5213585, 1.2578) . PHP_EOL;

 
 // EX: 4.D

 function capitalCity(string $_pays):string
 {
    $_pays = strtolower($_pays);

    switch($_pays){
        case 'france':
            return 'Paris' . PHP_EOL;
        case 'allemagne':
            return 'Berlin' . PHP_EOL;
        case 'italie':
            return 'Rome' . PHP_EOL;
        case 'maroc':
            return 'Rabat' . PHP_EOL;
        case 'espagne':
            return 'Madrid' . PHP_EOL;
        case 'portugal':
            return 'Lisbonne' . PHP_EOL;
        case 'angleterre':
            return 'Londres' . PHP_EOL;
        default:
            return 'Capitale inconnue' . PHP_EOL;
    }
 }
 echo capitalCity('France');
 echo capitalCity('allemagne');
 echo capitalCity('italie');
 echo capitalCity('maroc');
 echo capitalCity('espagne');
 echo capitalCity('portugal');
 echo capitalCity('angleterre');
 echo capitalCity('amerique')
?>