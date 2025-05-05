<?php

//EX : 6.A

function getToday():string
{
    $date = new DateTime('now');
    $date2 = $date->format('d/m/Y');
    return $date2;
}
echo getToday();

//EX: 6.B


function getTimeLeft(string $chaineDate):string
{

    $tabDate = explode("-", $chaineDate);
    

}    
?>