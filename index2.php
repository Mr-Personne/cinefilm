<?php
$uri = $_SERVER['REQUEST_URI'];

$uriexp = explode("/", $uri);

print_r($uriexp);

//needs to make $uriexp[3] more flexible depending on if there are "sous-dossiers" or not
switch ($uriexp[3]) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}

?>