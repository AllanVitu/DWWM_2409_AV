<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage tableau amortissement Prêt</title>
</head>

<body>
    <?php
    include "./models/Pret..php";

    $objPret = new Pret(10000, 5.3, 5);

    echo $objPret->calculMensualite2() . "<br>";

    // $tableauAmrt= $objPret->getTableauAmortissement();
    // var_export($tableauAmrt);

    $chainetab = $objPret->getTableauAmortissementJSON();
    echo $chainetab;
    $objPret->getreportJSON();
    $objPret2 = new Pret(150000, 2.4, 15);
    $objPret2->getreportJSON();

    ?>
</body>

</html>