<!-- Création du models movies.php qui contiendrait toutes fonctions des requêtes sur la table films -->
<?php
    // print_r($_POST);
    $search = $_GET['filmId'];

    try{
        $db = new PDO('mysql:host=localhost;dbname=dbFilms;charset=utf8', 'root', '1234');
        

        //------méthode plus sécurisé contre injection SQL------
        $answer = $db->prepare('SELECT * FROM `films` WHERE id = :filmId');

        //cette partie permet de faire fonctionner la recherche sql 'LIKE'
        $filmId = $search;
        $answer->bindParam(':filmId', $filmId, PDO::PARAM_STR);

        $answer->execute();
        $allData = $answer->fetch();
        // print_r($allData);



    } catch (Exception $e) {

        //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
        die('Erreur : ' . $e->getMessage());
    
    }
?>