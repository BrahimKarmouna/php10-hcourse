<?php

use Core\Database;
use Core\Validator;

$config = require base_path('config.php');
$db = new Database($config['database']);

$errors = [];


if (! Validator::string($_POST['note'], 1, 1000)) {
$errors['note'] = 'Enter something in the note field.';
}
if (! empty($errors)) {
    return view("notes/create.vue", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}

$db->query('INSERT INTO notes (note, user_id) VALUES (:note, :user_id)', [
'note' => $_POST['note'],
'user_id' => 1
]);

header('location: /notes');
die();