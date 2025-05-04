<?php


if (isset($_GET['addjoke']))
{
  include 'form.html.php';
  exit();
}
// -------- connect to database ----------------------
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=listing-database-items-project', 'michael', '20123790');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}
// --------- Insert into joke set table
if (isset($_POST['joketext']))
{
  try
  {
    $sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':joketext', $_POST['joketext']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error adding submitted joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}
// ---------------- to delete joke ----------------
if (isset($_GET['deletejoke']))
{
  try
  {
    $sql = 'DELETE FROM joke WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting joke: ' . $e->getMessage();
    include 'error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

try
{
  $sql = 'SELECT id, joketext FROM joke';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $jokes[] = array('id' => $row['id'], 'text' => $row['joketext']);
}

include 'jokes.html.php';
