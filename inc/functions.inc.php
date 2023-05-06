<?php
$database = [
    'host' => 'localhost',
    'user' => 'florentine',
    'password' => 'yHW5KqVtKTuzV&pLEjxMnrN3yn@ziyAEJgbyWqzKqKRs7Jdt%B',
    'database' => 'florentine',
];

$conn = mysqli_connect($database['host'], $database['user'], $database['password'], $database['database']);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());