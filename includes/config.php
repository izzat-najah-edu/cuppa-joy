<?php
session_start();

class Database {
    private static ?mysqli $connection = null;

    public static function getConnection(): mysqli {
        if (self::$connection === null) {
            try {
                self::$connection = new mysqli(
                    'localhost',
                    'root', '',
                    'cuppa_joy_coffee_shop'
                );
            } catch (mysqli_sql_exception $e) {
                echo 'Database Error: ' . $e->getMessage();
                die();
            }
        }
        return self::$connection;
    }
}
