<?php

//Connection to database

$server = "localhost";
$username = "wdd_site_client";
$password = "wddsiteclient";
$database = "wdd_site_db";
$dsn = "mysql:host=$server;dbname=$database";

try{
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $exc) {
      $message = 'Sorry the databse server encountered an error.';
      include 'wdd_site_view/error_pages/500.php';
      exit;
}