<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$database = [
    'host' => 'localhost',
    'user' => 'florentine',
    'password' => 'yHW5KqVtKTuzV&pLEjxMnrN3yn@ziyAEJgbyWqzKqKRs7Jdt%B',
    'database' => 'florentine',
];

$conn = mysqli_connect($database['host'], $database['user'], $database['password'], $database['database']);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());