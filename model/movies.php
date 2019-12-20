<!-- Création du models movies.php qui contiendrait toutes fonctions des requêtes sur la table films -->
<?php
    // print_r($_POST);
    $search = $_GET['filmId'];

    try{
        $db = new PDO('mysql:host=localhost;dbname=dbFilms;charset=utf8', 'root', '1234');
        

        //------méthode plus sécurisé contre injection SQL------
        // $answer = $db->prepare('SELECT * FROM `films` WHERE id = :filmId');
        $answer = $db->prepare('SELECT * FROM `films`
        INNER JOIN films_has_genre ON films_has_genre.films_id = films.id
        INNER JOIN genre ON genre.idgenre = films_has_genre.genre_idgenre
        INNER JOIN films_has_realisateur ON films_has_realisateur.films_id = films.id
        INNER JOIN realisateur ON realisateur.idrealisateur = films_has_realisateur.realisateur_idrealisateur
        WHERE id = :filmId
        ORDER BY `films`.`id` ASC');

        //cette partie permet de faire fonctionner la recherche sql 'LIKE'
        $filmId = $search;
        $answer->bindParam(':filmId', $filmId, PDO::PARAM_STR);

        $answer->execute();
        $allData = $answer->fetchAll();

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
        // print_r($allData);



    } catch (Exception $e) {

        //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
        die('Erreur : ' . $e->getMessage());
    
    }
?>