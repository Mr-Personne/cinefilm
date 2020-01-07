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
    <header class="container-fluid imheader">
        <div class="container ">
            <div class="row centelog d-flex flex-column justify-content-center">
                <div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4 col-xl-6 offset-xl-3 mt-50vh">
                    <p class="text-center"><img src="public/images/logo-cine.png" class="w-100 h-100" alt="logo" height="403px" width="635px"></p>
                </div>
            </div>
        </div>
    </header>
    <!-- <header>
        <div class="container-fluid header-box">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <nav class="navbar navbar-expand-lg navbar-light w-100 align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                <a class="nav-link nav-active-color" href="index.php">Le Ciné du GIT©<span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                    </div>

                    <div class="col-6">
                        <form action="#" class="form-flex">
                            <input type="text" name="searchInput" autocomplet="off">
                            <div class="magnifying-glass"></div>
                        </form>

                        <div id="search-result"> </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->

    <main>
        
        <div class="container-fluid mt-20px">
            <div class="container">
                <div class="row mb-5 mt-5">
                    <div id="genres" class="col-12">
                        <form action="index.php#genres" method="get">
                            <p>Genres :
                            <button type="submit" name='genre' value='tous'>Tous</button>
                            <button type="submit" name='genre' value='Action'>Action</button>
                            <button type="submit" name='genre' value='Aventure'>Aventure</button>
                            <button type="submit" name='genre' value='Comédie'>Comédie</button>
                            <button type="submit" name='genre' value='Drame'>Drame</button>
                            <button type="submit" name='genre' value='Fantastique'>Fantastique</button>
                            <button type="submit" name='genre' value='Guerre'>Guerre</button>
                            <button type="submit" name='genre' value='Historique'>Historique</button>
                            <button type="submit" name='genre' value='Péplum'>Péplum</button>
                            <button type="submit" name='genre' value='Policier'>Policier</button>
                            <button type="submit" name='genre' value='Science Fiction'>Science Fiction</button>
                            <button type="submit" name='genre' value='Thriller'>Thriller</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <?php
                        for($i = 0; $i < count($allData); $i++){
                            echo '<div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5"><a class="text-decoration-none" href="index.php?page='. $allData[$i]["id"] .'"><div class="zoom"><img src="public/images/affiche-'. $allData[$i]["id"] .'.jpg" alt="affiche film"
                            class="affiches"></div>
                            <h3 class="text-align-center">'. $allData[$i]["titre"] .'</h3></a></div>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </main>


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
    <script src="public/js/script.js"></script>
</body>
</html>