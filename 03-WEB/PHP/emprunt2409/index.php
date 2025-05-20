<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage tableau amortissement Prêt</title>
</head>

<body>
<?php
        try {

            $connect = new PDO('mysql:host=localhost;port=3306;dbname=annuaire;charset=utf8', 'root', '');
        } catch (Exception $e) {

            echo $e->getMessage();
        }

        $rq = "SELECT * from carnet where carnet.VILLE like 'ORLEANS%' ";

        $PDOstatement = $connect->query($rq, PDO::FETCH_ASSOC);

        while ($ligne = $PDOstatement->fetch()) {

            var_export($ligne);
            echo "<br>";
        }

        //var_export( $PDOstatement->fetchAll(PDO::FETCH_ASSOC) );

        // $tabglobal = $PDOstatement->fetchAll(PDO::FETCH_ASSOC);
        // for ($i = 0; $i < count($tabglobal); $i++) {

        //     echo " Nom :" . $tabglobal[$i]["NOM"] . "  &nbsp;&nbsp;&nbsp;&nbsp; Prenom:" . $tabglobal[$i]['PRENOM'] . "<br>";
        // }

        // requete préparée
        $rq = " SELECT * FROM carnet WHERE carnet.VILLE=:ville";

        $stmt = $connect->prepare($rq);
        $ville = "PRAGUE";
        $stmt->bindParam(':ville', $ville, PDO::PARAM_STR);
        $test = $stmt->execute();
        if ($test == true) {

            $tabglobal = $stmt->fetchAll(PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($tabglobal); $i++) {

                echo " Nom :" . $tabglobal[$i]["NOM"] . "  &nbsp;&nbsp;&nbsp;&nbsp; Prenom:" . $tabglobal[$i]['PRENOM'] . " Ville : " . $tabglobal[$i]['VILLE'] . "  <br>";
            }
        } else {
            echo " la requete a échouée";
        }


        ?>
</body>

</html>