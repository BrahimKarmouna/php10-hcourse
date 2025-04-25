<?php
class Database
{
    public $connection;

    private $statement;

    public function __construct($config,$username= 'root',$password= '')
    {

    //   require('config.php');
      $dsn='mysql:'.http_build_query($config,'',';');
    //   dd($dsn);
    //  dd($dsn);
        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['']}";
        // $username = 'root';
        // $password = '';
        $this->connection = new PDO($dsn, $username, $password,[
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ]  
    
    );
    }
 

    public function query($query, $params = [])
    {
        // $id=$_GET['id'];
        // $query = "SELECT Full_name FROM clients  "; 
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute( $params);
        // return $statement->fetchAll();
        return $this;
    } 

    public function get($tableName){
        return $this->query("SELECT * FROM  {$tableName}");
    }
    public function find() {
        // $stmt = $this->connection->prepare("SELECT * FROM {$table} WHERE id = ? LIMIT 1");
        // $stmt->execute([$id]);
        // return $stmt->fetch(PDO::FETCH_ASSOC);
        // return $this->query("SELECT * FROM {$table} WHERE id = :id LIMIT 1",[
        //     'id'=>$id 
        // ]);

        return $this->statement->fetch();
       
    }
    public function search($tableName,$search = ''){
    return $this->query("SELECT * FROM {$tableName} WHERE name LIKE :search OR email LIKE :search", ['search' => "%{$search}%"]);
    }

    //   public function query (){
    //     $statement= $this->connection->prepare($query);
    //     $statement->execute();
    //     return $statement;
    // }

    public function findOrFail() {
        $obj = $this->find();
        
        if ($obj == null) {
            abort(404);
        }
    
        return $obj;
    }
}

// Uncomment to use:
// $db = new Database($config);
// $assistants = $db->getClients();

// echo "<ul>";
// foreach ($assistants as $assistant) {
//     echo "<li>" . htmlspecialchars($assistant['name']) . "</li>";
// }
// echo "</ul>";

// $stats = [
//     'total_users' => [
//         'label' => 'Total Users',
//         'value' => 1248,
//     ],

//     'monthly_revenue' => [
//         'label' => 'Monthly Revenue',
//         'value' => 23451,
//     ]
// ];

// $db = new Database([]);

// $db->query("SELECT * FROM users WHERE name LIKE :search OR email LIKE :search", ['search' => '%jhghhgff%']);

