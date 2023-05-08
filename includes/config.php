<?php
session_start();

function getDatabaseConnection(): mysqli {
    try {
        static $connection = new mysqli(
            'localhost',
            'root', '',
            'cuppa_joy_coffee_shop'
        );
    } catch (mysqli_sql_exception $e) {
        echo 'Database Error: ' . $e->getMessage();
        die();
    }
    return $connection;
}
