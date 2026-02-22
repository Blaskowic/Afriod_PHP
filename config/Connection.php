<?php

class Connection {

    private $host = 'localhost'; // o mysql.hostinger.com
    private $dbname = 'u719601324_afroi_db';
    private $username = 'u719601324_afroi_db';
    private $password = 'Afroi2026@';

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            return new PDO($dsn, $this->username, $this->password, $options);

        } catch (Throwable $e) {
            die("❌ Error de conexión: " . $e->getMessage());
        }
    }
}

