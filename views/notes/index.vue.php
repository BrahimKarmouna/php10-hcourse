
<div class="min-h-screen bg-gray-100 p-6">
    <div class="max-w-5xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-gray-800">My Notes</h1>
            <a href="notes/create" class="inline-block px-6 py-2 bg-red-500 text-white font-semibold rounded-lg shadow hover:bg-red-600 transition">
                Create Note
            </a>
        </div>

        <div class="bg-white shadow-xl rounded-2xl p-8 overflow-x-auto">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Notes Table</h2>
            <table class="min-w-full table-auto border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Note</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">User ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 uppercase">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($notes as $note): ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 text-sm text-gray-900"><?= $note['id']; ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?= htmlspecialchars($note['note']); ?></td>
                            <td class="px-6 py-4 text-sm text-gray-700"><?= $note['user_id']; ?></td>
                            <td class="px-6 py-4 text-sm">
                                <a href="/note?id=<?php echo $note['id']; ?>" class="text-blue-500 hover:underline">Show</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>