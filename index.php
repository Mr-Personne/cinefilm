<!-- <base href="/movie-website/fork/"> -->
<?php

// $request = $_SERVER['REQUEST_URI'];
// $what = $_SERVER['PHP_SELF'];


//Si il n'y a pas de page de film selectionée, $request devient $_SERVER['REQUEST_URI'] ("généralement,
// il deviendra soit '' ou '/' en fonction de l'emplacement du fichier index.php)
if (!isset($_GET['page'])){
    $request = $_SERVER['REQUEST_URI'];
    // print_r($request);
}
else{

    $request = $_GET['page'];

}

// echo $request . "<br>";
//echo __FILE__ . '<br>';
// echo $_SERVER['REQUEST_URI']. '<br>';
//print_r($request);
//echo strlen($request);
// echo substr($request, -1, 1);

switch ($request) {
    case '/movie-website/fork/' :
        // require __DIR__ . '/view/index-view.php';
        require __DIR__ . '/controller/controller.php';
        break;
    case '' :
        // require __DIR__ . '/view/index-view.php';
        require __DIR__ . '/controller/controller.php';
        break;
    case '/' :
        // require __DIR__ . '/view/index-view.php';
        require __DIR__ . '/controller/controller.php';
        break;
    //si $request est un nombre, alors fait en sorte de chercher et d'afficher la page du film avec cette id
    case is_numeric($request) :
        $_GET['filmId'] = $request;
        require __DIR__ . '/controller/controller.php';
        // require __DIR__ . '/model/movies.php';
        // require __DIR__ . '/view/film.php';
        break;
    //envoie sur la page d'accueil index-view.php par default
    default:
        // http_response_code(404);
        // require __DIR__ . '/view/404.php';
        require __DIR__ . '/controller/controller.php';
        // require __DIR__ . '/view/index-view.php';
        break;
}

?>