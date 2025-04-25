<?php 
    $id = $_GET['id'] ?? null;
    $config = require('./config.php');
    $connection = new Database($config['database']);

    $table = 'notes';
    $currentUser_id = 1;
    $note = $id ? ($connection->query("SELECT * FROM {$table} WHERE id = :id LIMIT 1", [
        'id' => $id 
    ])[0] ?? null) : null;

    $note = $connection->query("SELECT * FROM {$table} WHERE id = :id LIMIT 1", [
        'id' => $id 
    ]);
?>
<div class="bg-white shadow-xl rounded-xl p-8 w-full ">
    <?php if ($note): ?>
        <?php if ($note['user_id'] == $currentUser_id): ?>
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Note #<?= $note['id']; ?></h1>
            <p class="text-lg text-gray-700"><?= $note['note']; ?></p>
            <a href="/" class="mt-6 inline-block text-blue-600 hover:underline text-sm">← Back to all notes</a>
        <?php else: ?>
            <?php  abort(Response::FORBIDDEN); ?>

        <?php endif; ?>
    <?php else: ?>
     <?php  abort(Response::NOT_FOUNT); ?>
    <?php endif; ?>
</div>