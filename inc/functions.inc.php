<?php
$database = [
    'host' => 'localhost',
    'user' => 'root',
    'password' => '',
    'database' => 'florentine',
];

$conn = mysqli_connect($database['host'], $database['user'], $database['password'], $database['database']);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());