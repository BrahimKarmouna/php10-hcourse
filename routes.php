<?php

$router->get('/', 'controllers/dashboard/index.php');
$router->get('/about', 'controllers/about/about.php');
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note/delete', 'controllers/notes/destroy.php');
$router->get('/note/edit/', 'controllers/notes/edit.php');


$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/create', 'controllers/notes/store.php');





// return[
//     '/'=> 'controllers/dashboard/index.php',
//     '/about'=>'controllers/about/about.php',
//     '/notes'=>'controllers/notes/index.php',
//     '/note'=>'controllers/notes/show.php',
//     '/notes/create'=>'controllers/notes/create.php'


// ];
?>