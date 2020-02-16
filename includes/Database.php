<?php

namespace AlaminFirdows\JSONToMySql;

final class Database
{
    private static $dbName = 'json-to-mysql';
    private static $dbUser = 'root';
    private static $dbPassword = '';

    private static $connection = null;

    public function __construct()
    {
        try {
            self::$connection = new \PDO("mysql:host=localhost;dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

    public function selectAll(string $table): mixed
    {
        $sql = "SELECT * FROM {$table}";
        $query = self::$connection->prepare($sql) or die('Failed!');
        $query->execute();

        return $query->fetch(\PDO::FETCH_ASSOC);
    }

    public function insert(string $table, array $data): bool
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";
        $query = self::$connection->prepare($sql);

        return $query->execute(array_values($data));
    }
}