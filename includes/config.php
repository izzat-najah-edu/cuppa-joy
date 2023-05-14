<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

class Database {
    private static ?Database $instance = null;

    private mysqli $connection;
    private mysqli_stmt $coffee_query;
    private mysqli_stmt $message_insert;
    private mysqli_stmt $subscriber_insert;

    public static function getInstance(): Database {
        if (!isset(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->connect();
    }

    private function connect(): void {
        try {
            $this->connection = new mysqli(
                'localhost',
                'root', '',
                'cuppa_joy_coffee_shop'
            );
            $this->coffee_query = $this->connection->prepare(
                "select * from coffee where id=?"
            );
            $this->message_insert = $this->connection->prepare(
                "insert into messages (first_name, last_name, email, message) values (?,?,?,?)"
            );
            $this->subscriber_insert = $this->connection->prepare(
                "insert into subscribers (email) values (?)"
            );
        } catch (mysqli_sql_exception $e) {
            echo 'Database Error: ' . $e->getMessage();
            die();
        }

        if ($this->connection->connect_error) {
            echo "Connection failed: " . $this->connection->connect_error;
            die();
        }
    }

    public function getTaxRate(): float {
        return 0.1;
    }

    public function getCoffee(int $id): mysqli_result|bool {
        $this->coffee_query->bind_param("i", $id);
        $this->coffee_query->execute();
        return $this->coffee_query->get_result();
    }

    public function getAllCoffee(): mysqli_result|bool {
        return $this->connection->query("SELECT * FROM coffee");
    }

    public function createMessage(string $firstName, string $lastName, string $email, string $message): bool {
        $this->message_insert->bind_param(
            "ssss", $firstName, $lastName, $email, $message
        );
        return $this->message_insert->execute();
    }

    public function subscribeEmail(string $email): bool {
        $this->subscriber_insert->bind_param("s", $email);
        return $this->subscriber_insert->execute();
    }
}
