
<?php
CONST BASE_PATH = __DIR__ . '/../';

spl_autoload_register(function ($class) {
    
    require base_path($class . '.php');
    require base_path( 'bootstrap.php');
});

require '../Core/functions.php';
require base_path('Core/validator.php');


view('index.vue');
?>
