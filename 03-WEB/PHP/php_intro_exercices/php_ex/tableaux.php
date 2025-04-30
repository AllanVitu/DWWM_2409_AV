<?php

//EX: 5.A

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Noé'];

function firstItem(array $tab)
{
    if (empty($tab)) {
        return null; // Retourne null si le tableau est vide
    } else {
        return $tab[0]; // Retourne le premier élément du tableau
    }
}

$result = firstItem($names); 
echo $result; 

$emptyTab = [];
$result = firstItem($emptyTab);
var_dump($result);


//EX: 5.B

function lastItem(array $_tab2)
{
    if(empty($_tab2)) {
        return null;
    } else{
        return $_tab2[4];
    }
}

$result = lastItem($names);
echo $result;

$empTab = [];
$result = lastItem($empTab);
var_dump($result);


//EX: 5.C

function sortItem(array $_tab3):array
{
    if(empty($_tab3)){
        return [];
    }

    $sortTab = $_tab3;

    rsort($sortTab); //Trie Décroissant Tab

    return $sortTab;
}

$result = sortItem($names);
print_r($result);

$emptyTab = [];
$result = sortItem($emptyTab);
print_r($result);


//EX: 5.D

function stringItem(array $_tab4):string
{
    if(empty($_tab4)){
        return ' Nothing to display';
    }

    $sortTab = $_tab4;
    sort($sortTab);

    return implode(', ', $sortTab);
}

$result = stringItem($names);
echo $result;

$emptyTab2 = [];
$result = stringItem($emptyTab2);
echo $result;
?>



