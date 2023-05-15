<?php
session_start();

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

class Database {
    private static ?Database $instance = null;

    private mysqli $connection;
    private mysqli_stmt $admin_query;
    private mysqli_stmt $coffee_query;
    private mysqli_stmt $message_insert;
    private mysqli_stmt $subscriber_insert;

    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->connect();
        $this->prepare();
    }

    public function __destruct() {
        $this->admin_query->close();
        $this->coffee_query->close();
        $this->message_insert->close();
        $this->subscriber_insert->close();
        $this->connection->close();
    }

    private function connect(): void {
        try {
            $this->connection = mysqli_init();

            if (!mysqli_ssl_set(
                $this->connection,
                NULL, NULL,
                "/certs/DigiCertGlobalRootCA.crt.pem",
                NULL, NULL
            )) {
                die('Setting SSL failed');
            }

            echo 'SSL set successfully.';

            mysqli_real_connect(
                $this->connection,
                getenv("DB_HOST"),
                getenv("DB_USER"),
                getenv("DB_PASS"),
                "cuppa_joy",
            );

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            echo 'Connected successfully.';
        } catch (Throwable $e)  {
            echo "something went wrong";
        }
    }

    private function prepare(): void {
        try {
            $this->admin_query = $this->connection->prepare("select * from `admin` where username=?");
            $this->coffee_query = $this->connection->prepare("select * from coffee where id=?");
            $this->message_insert = $this->connection->prepare("insert into messages (first_name, last_name, email, message) values (?,?,?,?)");
            $this->subscriber_insert = $this->connection->prepare("insert into subscribers (email) values (?)");
        } catch (mysqli_sql_exception $e) {
            die("Database Error: " . $e->getMessage());
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
        $this->message_insert->bind_param("ssss", $firstName, $lastName, $email, $message);
        return $this->message_insert->execute();
    }

    public function subscribeEmail(string $email): bool {
        $this->subscriber_insert->bind_param("s", $email);
        return $this->subscriber_insert->execute();
    }

    public function login(string $username, string $password): bool {
        $this->admin_query->bind_param("s", $username);
        $this->admin_query->execute();
        $admin = $this->admin_query->get_result()->fetch_object();
        return $admin && password_verify($password, $admin->password);
    }
}
