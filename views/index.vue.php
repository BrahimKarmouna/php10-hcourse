
  <script src="https://cdn.tailwindcss.com"></script>


 <!-- <h1><?php  echo $heading  ?> </h1> -->

 <?php
/*
require('Database.php');
$db = new Database();
$assistants = $db->getAssistants($_GET['id']);
echo "<ul>";
foreach ($assistants as $assistant) {
    echo "<li>" . htmlspecialchars($assistant['name']) . "</li>";
}
echo "</ul>";
*/
?>

    <!-- Main Content Area -->
 
<?php 

// dd($_SERVER)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Sidebar -->
  <div class="flex">
    <?php
    include('./partials/sidebar.vue.php');

    ?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
       <?php include('./partials/navbar.vue.php'); ?>
      <!-- Content -->
       <?php require('./router.php'); ?>
    </div>
  </div>
</body>
</html>
