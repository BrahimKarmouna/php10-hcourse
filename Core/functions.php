<?php

use Core\Response;

function dd($item){
    echo '<pre>';
    var_dump($item);
    echo '</pre>';
    die();
}
function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}
function base_path($path = ''){
    return BASE_PATH . $path;
}

function view($path, $data = []){
    extract($data);

    require base_path('views/' . $path . '.php');
}

function abort($code){
    http_response_code($code);
    require base_path("{$code}.php");
    die();
}
?>