<?php

define("DB_HOST", '127.0.0.1');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_NAME", 'php_dev');
define("DB_PORT", 3307);

// create connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT );

if($conn->connect_error){
  die('Connection failed '. $conn->connect_error);
}

