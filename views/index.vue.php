<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Sidebar -->
  <div class="flex">
    <?php
    include base_path('./partials/sidebar.vue.php');

    ?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Topbar -->
       <?php include base_path('partials/navbar.vue.php'); ?>
      <!-- Content -->
        <?php
        use Core\Router;

        $router = new Router;
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $method = $_POST['_method'] ?? $method;

        require base_path('./routes.php');

        $router->router($uri, $method);

        ?>

    </div>
  </div>
</body>
</html>
