<?php
// Set variables for database connection
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'web_project';

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $db;

// Create PDO instance
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);