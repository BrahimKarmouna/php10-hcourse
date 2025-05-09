<form action="" method="POST">
  <!-- <label for="title">Title:</label><br>
  <input type="text" id="title" name="title" required><br><br> -->

  <label for="content">Content:</label><br>
  <textarea id="note" name="note" rows="6" ></textarea><br><br>
  <?php if (isset($errors['note'])):?>
 <p><?= $errors['note'] ?></p>
 <?php endif; ?>
  <button type="submit">Create Note</button>
</form>
