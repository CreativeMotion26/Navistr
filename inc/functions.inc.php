<?php
$database = [
    'host' => '185.252.233.213',
    'user' => 'YwUetX47DLgkXyCs',
    'password' => 'Vj8Xpc_vqNj9DM.88d',
    'database' => 'florentine',
];

$conn = mysqli_connect($database['host'], $database['user'], $database['password'], $database['database']);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());