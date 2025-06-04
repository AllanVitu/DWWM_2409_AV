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

    echo  "test: " . $monCandidat->CreateCandidat("Mortimer", "Allan", "mortimer@gmail.com", "Blake", 25, 50);

    var_export( $monCandidat->searchAll() );
    
    ?>


</body>
</html>