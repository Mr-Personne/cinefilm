<?php
$uri = $_SERVER['REQUEST_URI'];

$uriexp = explode("/", $uri);

print_r($uriexp);

//needs to make $uriexp[3] more flexible depending on if there are "sous-dossiers" or not
switch ($uriexp[3]) {
    case '/':
        require_once __DIR__ . '/controller/base.php';
        break;
    case '':
        require_once __DIR__ . '/controller/base.php';
        break;
    case 'index2.php':
        require_once __DIR__ . '/controller/base.php';
        break;
    case 'film':
        require_once __DIR__ . '/controller/film.php';
        break;
           
    default:
        require_once __DIR__ . '/view/404.php';
        break;
}

?>