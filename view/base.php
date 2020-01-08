<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>base page</h1>
    <?php
        for($i = 0; $i < count($allData); $i++){
            echo '<div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5"><a class="text-decoration-none" href="film/details/'. $allData[$i]["id"] .'"><div class="zoom"><img src="public/images/affiche-'. $allData[$i]["id"] .'.jpg" alt="affiche film" width="200" height="200"
            class="affiches"></div>
            <h3 class="text-align-center">'. $allData[$i]["titre"] .'</h3></a></div>';
        }
    ?>
</body>
</html>