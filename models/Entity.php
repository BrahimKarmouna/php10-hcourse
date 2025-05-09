<?php

abstract class Entity
{
    public array $attributes = [];

    public function fetchAll()
    {
        $config = require './config.php';

        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');

        $connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $statement = $connection->prepare("SELECT * FROM {$this->table()}");

        $statement->execute();
        $data = $statement->fetchAll();

        return array_map(function ($record) {
            $n = new static();
            $n->attributes = $record;

            return $n;
        }, $data);
    }

    public function delete()
    {
        $config = require './config.php';

        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');

        $connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $statement = $connection->prepare("DELETE FROM {$this->table()} WHERE id = :id");

        $statement->execute([
            'id' => $this->attributes['id']
        ]);

        return true;
    }

    public function findById(int $id)
    {
        $config = require base_path('./config.php');

        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');

        $connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $statement = $connection->prepare("SELECT * FROM {$this->table()} WHERE id = :id LIMIT 1");

        $statement->execute([
            'id' => $id
        ]);

        $record = $statement->fetch();

        $n = new static();

        $n->attributes = $record;

        return $n;
    }

    public function insert()
    {
        $config = require './config.php';

        $dsn = 'mysql:' . http_build_query($config['database'], '', ';');

        $connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $keys = implode(',', array_keys($this->attributes));

        $placeholders = implode(', ', array_map(function () {
            return "?";
        }, array_keys($this->attributes)));

        $statement = $connection->prepare("INSERT INTO {$this->table()}($keys) VALUES($placeholders)");

        $statement->execute(array_values($this->attributes));

        $id = $connection->lastInsertId();

        $this->id = $id;

        return $this;
    }

    public function __get($key)
    {
        return $this->attributes[$key] ?? null;
    }

    public function __set($attribute, $value)
    {
        $this->attributes[$attribute] = $value;

        return $this;
    }

    abstract public function table();
}