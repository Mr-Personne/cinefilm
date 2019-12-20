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


        //------méthode ORDRE A% ; %A%; %A, plus sécurisé contre injection SQL------
        // $answer1 = $db->prepare('SELECT * FROM contact WHERE first_name LIKE :searchStart ORDER BY `contact`.`first_name` ASC');

        // $answer2 = $db->prepare('SELECT * FROM contact WHERE first_name LIKE :searchMid ORDER BY `contact`.`first_name` ASC');

        // $answer3 = $db->prepare('SELECT * FROM contact WHERE first_name LIKE :searchEnd  ORDER BY `contact`.`first_name` ASC');

        // //cette partie permet de faire fonctionner la recherche sql 'LIKE'
        // $searchStart = $search."%";
        // $searchMid = "%".$search."%";
        // $searchEnd = "%".$search;
        // $answer1->bindParam(':searchStart', $searchStart, PDO::PARAM_STR);
        // $answer2->bindParam(':searchMid', $searchMid, PDO::PARAM_STR);
        // $answer3->bindParam(':searchEnd', $searchEnd, PDO::PARAM_STR);

        // $answer1->execute();
        // $answer2->execute();
        // $answer3->execute();
        // $allData1 = $answer1->fetchAll();
        // $allData2 = $answer2->fetchAll();
        // $allData3 = $answer3->fetchAll();
        // $allData = array_merge($allData1,$allData2,$allData3);
        // // var_dump(count($allData));
        // // echo json_encode($allData);
        // print_r($allData);


    } catch (Exception $e) {

        //verif si erreur et met un message contenu dans $e qui dévoilera moins que le message erreur de base
        die('Erreur : ' . $e->getMessage());
    
    }
?>