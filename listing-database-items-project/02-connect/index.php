<?php 
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=listing-database-items-project', 'michael', '20123790');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $output = 'Unable to connect to the database server.';
  include 'output.html.php';
  exit();
}

$output = 'Database connection established.';
include 'output.html.php';
