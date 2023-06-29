<?php
require_once __DIR__ .'/../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../..');
$dotenv->load();

function Connect()
{
  $dbhost = getenv('DB_HOST');
  $dbuser = getenv('DB_USERNAME');
  $dbpass = getenv('DB_PASSWORD');
  $dbname = getenv('DB_NAME');

  // Create connection
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

 return $conn;
}
?>