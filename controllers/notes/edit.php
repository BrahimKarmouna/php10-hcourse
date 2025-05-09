<?php
use Core\Database;
use Core\App;

$config = require base_path('./config.php');
$connection = new Database($config['database']);
$currentUser_id = 1;
$id = $_REQUEST['id'] ;
$user_id = 1;
$note =$connection->query("SELECT * FROM notes WHERE id = :id LIMIT 1", [
    'id' => $id
])->find();
authorize( $user_id ==$currentUser_id );

  view('./notes/edit.vue', compact( 'note', 'currentUser_id',)); ;








