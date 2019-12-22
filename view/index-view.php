<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>hello world ciné</h1>
    <form action="index.php" method="get">
        <button type="submit" name='page' value='1'>Bad Boys</button>
        <button type="submit" name='page' value='9'>Las Vegas Paranos</button>
        <button type="submit" name='page' value='15'>Retour Vers le Futur</button>
        <button type="submit" name='page' value='2'>300</button>
    </form>

    <div class="container d-flex mt-20px">
        <a href="index.php?page=4">
            <div class="container-affiches mr-20px">
                <div><img src="public/images/affiche-colorful.jpg" alt="affiche film"
                width="600" height="800" class="affiches"></div>
                <h3 class="text-align-center">Colorful</h3>
            </div>
        </a>

        <a href="index.php?page=7">
            <div class="container-affiches">
                <div><img src="public/images/affiche-once-upon-a-time-hollywood.jpg" alt="affiche film"
                width="405" height="600" class="affiches"></div>
                <h3 class="text-align-center">Once Upon a Time… in Hollywood</h3>
            </div>
        </a>
    </div>
</body>
</html>