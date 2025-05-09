
<?php 
use Core\Database;
    $config = require base_path('./config.php');
    $connection = new Database($config['database']);
    $currentUser_id = 1;
    $id = $_POST['id'] ?? null;
    $user_id = 1;



    authorize($user_id ==$currentUser_id , \Core\Response::FORBIDDEN);
       $connection->query(
           'DELETE FROM notes WHERE id = :id AND user_id = :currentUser_id',
           ['id' => $id, 'currentUser_id' => $currentUser_id]
       );
       header('Location: /notes');
        exit;




?>