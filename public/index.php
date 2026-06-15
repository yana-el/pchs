<?php


define('ROOT', dirname(__FILE__, 2));
define('VIEWS', ROOT . '/views/');
define('CONTROLLER', ROOT . '/controller/');
 
if (! isset($_SERVER['PATH_INFO'])) {
    include CONTROLLER.'home.php';
}
else{
    if($_SERVER['PATH_INFO'] == '/vente-materiel'){
        include CONTROLLER.'vente_materiel.php';
    }elseif($_SERVER['PATH_INFO'] == '/solution'){
        include CONTROLLER.'solution.php';
    }elseif($_SERVER['PATH_INFO'] == '/assistance'){
        include CONTROLLER.'assistance.php';
    }elseif($_SERVER['PATH_INFO'] == '/contact'){
        include CONTROLLER.'contact.php';
    }else{
        include VIEWS.'404.php';
    }
}