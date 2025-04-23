<?php

function getMC2(string $name): string
{
    return "$name";
}
echo getMC2("Albert Einstein") . PHP_EOL;



function getUserName(string $nom, $prenom):string
{
    return "$nom, $prenom";
}
echo getUserName("Vitu", "Allan") . PHP_EOL;


function getFullName(string $nameMinu, $nameMaju):string
{
    
}