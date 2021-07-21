<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    function insert(Todo $todo)
    {
        $statement = $this->pdo->prepare("INSERT INTO todos (name, description, due_date) VALUES({$todo->name}, {$todo->description}, {$todo->due_date})");

        $statement->execute();
    }
}
