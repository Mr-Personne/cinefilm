<?php 


function traitementGenre($allData){
    //verifie s'il a bien récupéré une row du film dans notre base de donnée
    //si c'est égal a 0, c'est que la page/le film demandé n'existe pas. Donc, page 404 et on arrete tous;
    if (count($allData) === 0){
        require_once __DIR__ . '/../view/404.php';
        die();
    }

    //section verif et ajout de genre(s) (si il y en a plusieurs, active boucle)
    $genre = $allData[0]["nomGenre"];
    //creation d'un array contenant tous les genres ajoutés 
    //(permettra de faire une verif 'in_array' avant ajout)
    $genreArray = array($allData[0]["nomGenre"]);
    if (count($allData) > 1){
        for ($i = 1; $i < count($allData); $i++){
            if (!in_array($allData[$i]["nomGenre"], $genreArray)){
                $genre = $genre . ", " . $allData[$i]["nomGenre"];
                array_push($genreArray, $allData[$i]["nomGenre"]);
            }
        }
    }

    return $genre;
    
};

function traitementRealisateur($allData){
    //verifie s'il a bien récupéré une row du film dans notre base de donnée
    //si c'est égal a 0, c'est que la page/le film demandé n'existe pas. Donc, page 404 et on arrete tous;
    if (count($allData) === 0){
        require_once __DIR__ . '/../view/404.php';
        die();
    }
    
    //section verif et ajout de realisateur(s) (si il y en a plusieurs, active boucle)
    $realisateur = $allData[0]["nomRealisateur"];
    //creation d'un array contenant tous les realisateurs ajoutés 
    //(permettra de faire une verif 'in_array' avant ajout)
    $realisateurArray = array($allData[0]["nomRealisateur"]);
    if (count($allData) > 1){
        for ($i = 1; $i < count($allData); $i++){
            if (!in_array($allData[$i]["nomRealisateur"], $realisateurArray)){
                $realisateur = $realisateur . ", " . $allData[$i]["nomRealisateur"];
                array_push($realisateurArray, $allData[$i]["nomRealisateur"]);
            }
        }
    }

    return $realisateur;
};

function traitementImages($allData){
    global $lienAffiche, $imgWidth, $imgHeight;
    //vérifie si le fichier pour l'image de l'affiche est existe bien en jpg ou png
    //si oui, met le lien vers l'image dans $lienAffiche et va chercher sa taille en largeur et hauteur
    if (file_exists("public/images/trailer-".$allData[0]['id'].".png")){
        $lienAffiche = "public/images/trailer-".$allData[0]['id'].".png";
        $imgSize = getimagesize("public/images/trailer-".$allData[0]['id'].".png");
        $imgWidth = $imgSize[0];
        $imgHeight = $imgSize[1];
        // echo "<p>lien affiche : " . $lienAffiche . "; imgW : " . $imgWidth . "; imgh : " . $imgHeight ."</p>";
        clearstatcache();
    }
    else if (file_exists("public/images/trailer-".$allData[0]['id'].".jpg")){
        $lienAffiche = "public/images/trailer-".$allData[0]['id'].".jpg";
        $imgSize = getimagesize("public/images/trailer-".$allData[0]['id'].".jpg");
        $imgWidth = $imgSize[0];
        $imgHeight = $imgSize[1];
        // echo "<p>lien affiche : " . $lienAffiche . "; imgW : " . $imgWidth . "; imgh : " . $imgHeight ."</p>";
        clearstatcache();
    }
    else{
        $lienAffiche = "";
        $imgWidth = "";
        $imgHeight = "";
        // echo "<p>erreur, fichier inexistant ou pas en format jpg ou png</p>";
    }

    // return $lienAffiche, $imgWidth, $imgHeight;
}

if(count($uriexp) > 4){
    $action = $uriexp[4];
    
}
else{
    $action = 'base';
}
// echo $action;


switch ($action) {
    case 'base':
        require_once  __DIR__ . '/../model/movies.php';
        // print_r($allData);
        $genre = traitementGenre($allData);
        $realisateur = traitementRealisateur($allData);
        traitementImages($allData);
        // echo "<br>";
        // print_r($allData);
        require_once  __DIR__ . '/../view/base.php';
        break;
    
    case 'details':
        $search = $uriexp[5];
        require_once  __DIR__ . '/../model/movie-details.php';
        $genre = traitementGenre($allData);
        $realisateur = traitementRealisateur($allData);
        traitementImages($allData);
        require_once  __DIR__ . '/../view/film-info.php';
        break;
    
    default:
        require_once __DIR__ . '/../view/404.php';
        break;
}

?>