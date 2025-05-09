
<?php
use Core\Response;

?>
<div class="bg-white shadow-xl rounded-xl p-8 w-full ">
    <?php if ($note): ?>
        <?php if ($note['user_id'] == $currentUser_id): ?>
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Note #<?= $note['id']; ?></h1>
            <p class="text-lg text-gray-700"><?= $note['note']; ?></p>
        <br>
        <a href="/note/edit/?id=<?= $note['id']; ?>" class="bg-green-500 text-white px-4 py-2 rounded">EDIT</a>
        <br>
            <form action="note/delete" method="POST" >
                <input type="hidden" name="id" value="<?= $note['id']; ?>">
                <input type="hidden" name="_method" value="DELETE">

<br>
                <button class="bg-red-500 text-white px-4 py-2 rounded" >delete </button>

            </form>
            <a href="/notes" class="mt-6 inline-block text-blue-600 hover:underline text-sm">← Back to all notes</a>
        <?php else: ?>
            <?php  abort(Response::FORBIDDEN); ?>
        <?php endif; ?>
    <?php else: ?>
     <?php  abort(Response::NOT_FOUND); ?>
    <?php endif; ?>
</div>