<?php

// $request = $_SERVER['REQUEST_URI'];
// $what = $_SERVER['PHP_SELF'];

if (!isset($_GET['page'])){
    $request = $_SERVER['REQUEST_URI'];
    print_r($request);
}
else{
    //cherche 
    // $request = substr($_GET['page'], strlen($request)-1, 1);
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
        require __DIR__ . '/view/index-view.php';
        break;
    case '' :
        require __DIR__ . '/view/index-view.php';
        break;
    case '/' :
        require __DIR__ . '/view/index-view.php';
        break;
    case is_numeric($request) :
        $_GET['filmId'] = $request;
        require __DIR__ . '/controller/controller.php';
        // require __DIR__ . '/model/movies.php';
        // require __DIR__ . '/view/film.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}

?>