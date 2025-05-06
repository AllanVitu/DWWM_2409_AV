<?php

//EX : 6.A

function getToday(): string
{
    $date = new DateTime('now');
    $date2 = $date->format('d/m/Y');
    return $date2;
}
echo getToday() . PHP_EOL;

//EX: 6.B


function getTimeLeft(string $chaineDate): string
{

   /* $tabDate = explode("-", $chaineDate);
    if ($tabDate[0] > 0) {
        if ($tabDate[1] > 0 && $tabDate[1] <= 12) {
            switch($tabDate[1]){
                case 1:
                    if($tabDate[2] > 0 && $tabDate[2] <= 31){

                    }else{
                        return "Mauvais forat de date jours.";
                    }break;

            }
            




        } else {
            return "Mauvais format de date mois.";
        }
    } else {
        return "Mauvais format de date annee.";
    }*/
    try {
        $date = new DateTime($chaineDate);
        return $date -> format('d/m/Y');
        

    } catch (Exception $e) {
        return  "Mauvais format de Date !";
    }
}
echo getTimeLeft("2000-01-01") . PHP_EOL;
echo getTimeLeft("2025-01-32") . PHP_EOL;