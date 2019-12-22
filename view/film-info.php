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
    <!-- le lien src vers l'image de l'affiche devrait changer en fonction du film selectioné
        tant que vous enregistrez les images au bonne endroit et avec le nom "affiche-" + l'id du film 
        qu'il a dans la database-->
        <!-- ex : Bad Boys; id = 1  donc "affiche-1" -->
    <p><img src="public/images/affiche-<?= $allData[0]["id"] ?>.jpg" alt="affiche film"
                width="600" height="800" class="affiches"></p>
    <p>Année de sortie : <?php echo $allData[0]["annee-sortie"]; ?></p>
    <p>Réalisateur : <?php echo $realisateur; ?></p>

    <p>Genres : <?php echo $genre; ?></p>
    

    <p>Synopsis : <?php echo $allData[0]["description"]; ?></p>

    <form action="index.php" method="get">
        <button type="submit" name="page" value="">Home</button>
    </form>
</body>
</html>