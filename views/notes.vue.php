<?php
$config = require('./config.php');
$connection = new Database($config['database']);
$notes = $connection->get('notes');
?>

<div class="bg-white shadow-xl rounded-2xl p-8 w-full h-full overflow-auto">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Notes Table</h2>
    <table class="min-w-full table-auto border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase">ID</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase">Note</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 uppercase">ACTION</th>

            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($notes as $note): ?>
                <tr class="hover:bg-gray-50 transition">
                    <td class="px-6 py-4 text-sm text-gray-900"><?php echo $note['id']; ?></td>
                    <td class="px-6 py-4 text-sm text-gray-700"><?php echo $note['note']; ?></td>
                    <td class="px-6 py-4 text-sm text-gray-700"><a href="/note?id=<?php echo $note['id'] ?>">show</a></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>