<?php
//  require('./functions.php');
// require('./response.php');
// require('functions.php');
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
// dd($uri);
//
$routes=[
    '/'=> './controllers/index.php',
    '/about'=>'controllers/about.php',
    '/notes'=>'controllers/notes.php',
    '/note'=>'controllers/note.php'

];

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    require abort(Response::NOT_FOUNT);
}

}




routeToController($uri,$routes);
?>
