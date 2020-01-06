<?php

    if(isset($_GET['filmId'])){
        //va chercher infos dans database sur film selectionné
        require __DIR__ . '/../model/movies.php';
        
        
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

        //ouvre et affiche la page du film avec les infos recupérées
        require __DIR__ . '/../view/film-info.php';
    }
    else{
        //va chercher infos dans database sur tous les films
        require __DIR__ . '/../model/movies.php';
        require __DIR__ . '/../view/index-view.php';
        // print_r($allData);
    }
    

    
?>