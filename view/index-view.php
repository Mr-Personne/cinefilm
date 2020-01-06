<?php  //echo $_SERVER['REQUEST_URI'];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <base href="/" /> -->
</head>
<body>
    <h1>hello world ciné</h1>
    <form action="index.php" method="get">
        <button type="submit" name='page' value='1'>Bad Boys</button>
        <button type="submit" name='page' value='9'>Las Vegas Paranos</button>
        <button type="submit" name='page' value='15'>Retour Vers le Futur</button>
        <button type="submit" name='page' value='2'>300</button>
    </form>

    <div class="container-fluid d-flex mt-20px">
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>
</html>