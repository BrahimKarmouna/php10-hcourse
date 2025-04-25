<?php

abstract class Connection
{
    protected string $dbname;

    protected string $host;

    protected int $port;

    protected string $user;

    protected string $password;

    protected PDO $pdo;

    public function __construct(
        string $dbname,
        string $user,
        string $password,
        string $host,
        int $port,
    ) {
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
        $this->host = $host;
        $this->port = $port;

        $this->connect();
    }

    protected function disconnect()
    {
        unset($this->pdo);
    }

    public function __destruct()
    {
        $this->disconnect();
    }

    public function getPdo()
    {
        return $this->pdo;
    }

    abstract protected function connect();
}

class PostgresConnection extends Connection
{
    public function connect()
    {
        $dsn = "pgsql:host=$this->host;port=$this->port;dbname=$this->dbname";

        $this->pdo = new PDO($dsn, $this->user, $this->password);
    }
}

class MySQLConnection extends Connection
{
    protected function connect()
    {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8";

        $this->pdo = new PDO($dsn, $this->user, $this->password);
    }
}

class SQLiteConnection extends Connection
{
    protected function connect()
    {
        $dsn = "sqlite:host=$this->host;port=$this->port;dbname=$this->dbname";

        $this->pdo = new PDO($dsn, $this->user, $this->password);
    }
}

// $users = $cn->getAll("users");

abstract class Grammar
{
    protected Connection $connection;

    public function __construct(
        Connection $connection
    )
    {
        $this->connection = $connection;
    }

    public function getAll(string $table): array
    {
        $statement = $this->connection->getPdo()->prepare("SELECT * FROM $table");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // public function where($column, $operator, $value)
    // {

    // }
}

class MySQLGrammar extends Grammar
{

}

$cn = new 





























































































































































































































('gym', 'root', '', 'localhost', 3306);

$grammar = new MySQLGrammar($cn);