<form action="" method="PATCH">
  <!-- <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" required><br><br> -->
<?php $note = $note['note']; ?>
  <label for="content">Content:</label><br>
  <textarea id="note" name="note" rows="6"  ><?= $note ?></textarea><br><br>
  <?php if (isset($errors['note'])):?>
 <p><?= $errors['note'] ?></p>
 <?php endif; ?>
  <button class="bg-green-500 text-white px-4 py-2 rounded" type="submit">UPDATE Note</button>
    <button class="bg-gray-500 text-white px-4 py-2 rounded" type="CANCEL">cancel</button>

</form>
