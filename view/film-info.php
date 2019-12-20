<?php
// print_r($allData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $allData[0]["titre"]; ?></h1>
    <p>Année de sortie : <?php echo $allData[0]["annee-sortie"]; ?></p>
    <p>Réalisateur : <?php echo $realisateur; ?></p>

    <p>Genres : <?php echo $genre; ?></p>
    

    <p>Synopsis : <?php echo $allData[0]["description"]; ?></p>

    <form action="index.php" method="get">
        <button type="submit" name="page" value="">Home</button>
    </form>
</body>
</html>