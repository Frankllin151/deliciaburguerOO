<?php
session_start();
$base = 'http://127.0.0.1/deliciaburguer/';
$db_name = 'deleciaburguer';
$db_host = '127.0.0.1';
$db_user = 'root';
$db_pass = "";

$pdo = new PDO('mysql:dbname=' . $db_name . ';host' . $db_host, $db_user, $db_pass);
