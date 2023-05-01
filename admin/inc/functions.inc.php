<?php
require_once __DIR__ . '/../../inc/functions.inc.php';
session_start();
if(!isset($logging_in) && !isset($_SESSION['admin'])){
    header('Location: /admin/login');
    die;
}