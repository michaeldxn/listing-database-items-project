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

try // set the date of the joke using sql
{
  $sql = 'UPDATE joke SET jokedate="2025-04-01"
      WHERE joketext LIKE "%chicken%"';
  $affectedRows = $pdo->exec($sql);
}
catch (PDOException $e)
{
  $output = 'Error performing update: ' . $e->getMessage();
  include 'output.html.php';
  exit();
}

$output = "Updated $affectedRows rows.";
include 'output.html.php';
