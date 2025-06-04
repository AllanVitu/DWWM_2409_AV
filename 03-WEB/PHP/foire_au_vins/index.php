<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil du Festival du Vins</title>
</head>

<body>
    <?php

    require "./dao/Dbconnect.php";
    require  "./dao/CandidatRepository.php";

    $monCandidat = new CandidatRepository();

    //echo  "test: ".$monCandidat->CreateCandidat("Blake","Francis", "blake@gmail.com","espadon", 25,50 );

    //var_export($monCandidat->searchAll() );

    // try {

    //     var_export($monCandidat->searchByAge("te"));
    // } catch (Throwable $th) {


    //     echo "Erreur mauvais paramêtre";
    // }

    $tabresult = $monCandidat->signIn("blake@gmail.com", "espadon");
    if (count($tabresult) == 0) {
        echo "erreur identifiant ou mot de passe incorrect";
    } else {

        var_export($tabresult);

        $_SESSION["nom"] = $tabresult["nom"];

        $_SESSION["prenom"] = $tabresult["prenom"];
        // $_SESSION["email"] = $tabresult["mail_user"];

        $_SESSION['age'] = $tabresult["age"];



        header('Location: ./membre.php');
    }

    ?>
</body>

</html>