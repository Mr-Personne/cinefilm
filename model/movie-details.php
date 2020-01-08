<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=dbFilms;charset=utf8', 'root', '1234');
        
        
        $answer = $db->prepare('SELECT * FROM `films`
        INNER JOIN films_has_genre ON films_has_genre.films_id = films.id
        INNER JOIN genre ON genre.idgenre = films_has_genre.genre_idgenre
        INNER JOIN films_has_realisateur ON films_has_realisateur.films_id = films.id
        INNER JOIN realisateur ON realisateur.idrealisateur = films_has_realisateur.realisateur_idrealisateur
        WHERE id = :filmId
        ORDER BY `films`.`id` ASC');

        //cette partie permet de faire fonctionner la recherche sql 'LIKE'
        $filmId = $search;
        $answer->bindParam(':filmId', $filmId, PDO::PARAM_INT);


        $answer->execute();
        $allData = $answer->fetchAll();
        // print_r($allData);



    } catch (Exception $e) {

        //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
        die('Erreur : ' . $e->getMessage());

    }
?>