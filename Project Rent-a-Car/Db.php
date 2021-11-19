<?php

class Db {
    private $hostname = "localhost";
    private $dbname = "Rent-a-Car-db";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb4";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $pdo = new PDO($dsn, $this->username, $this->password, $this->charset, $this->connection);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }
}
?>
