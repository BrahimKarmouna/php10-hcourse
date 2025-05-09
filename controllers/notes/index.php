
<?php
use Core\Database;
$config = require base_path('./config.php');
$connection = new Database($config['database']);
$currentUser_id = 1;
$connection->query('SELECT * FROM notes WHERE user_id = :currentUser_id', ['currentUser_id' => $currentUser_id]);
$notes = $connection->fetchAll();

view('notes/index.vue', [
    'heading' => 'Notes',
    'notes' => $notes
]);
