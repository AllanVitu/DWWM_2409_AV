<?php

//EX: 3.A

function getMC2(string $name): string
{

$nom = strrchr($name, ' ');
    return "$nom";
}
echo getMC2("Albert Einstein") . "<br>";

//EX: 3.B

function getUserName(string $nom, $prenom):string
{
    return "$nom  $prenom";
}
echo getUserName("Vitu", "Allan") . "<br>";

//EX: 3.C

function getFullName(string $prenom, string $nom):string
{
     return ucfirst(strtolower($prenom)) . ' ' . strtoupper($nom);
}
echo getFullName('allan', 'vitu') . "<br>";

//EX: 3.D

function askUser(string $_nom, string $_prenom): string
{
    $nom = getFullName( $_prenom, $_nom);
    $science = getMC2("Albert Einstein");
    $item = "Bonjour $nom. Connaissez vous $science ?";

    return $item;
}

echo askUser('Chatelot', 'Franck');