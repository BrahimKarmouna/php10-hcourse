
<?php 
use Core\Database;

   $table = 'notes';
    $currentUser_id = 1;
    $id = $_GET['id'] ?? null;
    $config = require base_path('./config.php');
    $connection = new Database($config['database']);
    $user_id = 1;
 authorize( $user_id ==$currentUser_id , \Core\Response::FORBIDDEN);
       $note =$connection->query("SELECT * FROM {$table} WHERE id = :id LIMIT 1", [
           'id' => $id
       ])->find();


view('./notes/show.vue', compact( 'note', 'currentUser_id')); ;

?>