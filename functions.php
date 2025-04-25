<?php
function dd($item){
    echo '<pre>';
    var_dump($item);
    echo '</pre>';    die();
};
function abort ($code){
    http_response_code($code);
    require "./{$code}.php";
    die();
}


?>