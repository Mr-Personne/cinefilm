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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <header>
        <div class="container-fluid header-box">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <nav class="navbar navbar-expand-lg navbar-light w-100 align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                <a class="nav-link nav-active-color" href="index.php">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#about-us">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#work">WORK</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#process">PROCESS</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#services">SERVICES</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#contact">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container-fluid mt-20px">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1><?php echo $allData[0]["titre"]; ?></h1>
                    </div>
                </div>

                <div class="row mt-20px">
                    <div class="col-12">
                        <!-- le lien src vers l'image de l'affiche devrait changer en fonction du film selectioné
                            tant que vous enregistrez les images au bonne endroit et avec le nom "affiche-" + l'id du film 
                            qu'il a dans la database-->
                        <!-- ex : Bad Boys; id = 1  donc "affiche-1" -->
                        <div class="container-affiches">
                            <p><img src="<?= $lienAffiche ?>" alt="affiche film"
                                width="<?= $imgWidth ?>" height="<?= $imgHeight ?>" class="affiches"></p>
                        </div>
                    </div>
                </div>

                <div class="row mt-20px mb-40px">
                    <div class="col-12">
                        <div class="icon-bande-annonce">BANDE ANNONCE</div>
                    </div>
                </div>

                <div class="row description-box mt-20px">
                    <div class="col-12">
                        <p>Année de sortie : <?php echo $allData[0]["annee-sortie"]; ?></p>
                        <p>Réalisateur : <?php echo $realisateur; ?></p>

                        <p>Genres : <?php echo $genre; ?></p>
                        

                        <p>Synopsis : <?php echo $allData[0]["description"]; ?></p>
                    </div>
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
</body>
</html>