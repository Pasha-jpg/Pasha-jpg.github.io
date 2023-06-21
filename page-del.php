<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '..../cms/wp-content/themes/travel/includes/access.inc.php';

//****************************************
//Don't forget to update server path
//****************************************
if (!userIsLoggedIn())
{
  include '../cms/wp-content/themes/travel/admin/login.html.php';
  exit();
}


if (isset($_GET['addjoke']))
{
  include 'admin/del/form.html.php';
  exit();
}

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.html.php';
  exit();
}

if (isset($_POST['reviewtext']))
{
  try
  {
    $sql = 'INSERT INTO wp_review SET
        reviewtext = :reviewtext,
        reviewdate = CURDATE()';
    $s = $pdo->prepare($sql);
    $s->bindValue(':reviewtext', $_POST['reviewtext']);
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

if (isset($_GET['deletejoke']))
{
  try
  {
    $sql = 'DELETE FROM wp_review WHERE id = :id';
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $_POST['id']);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error deleting review: ' . $e->getMessage();
    include 'admin/del/error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

try
{
  $sql = 'SELECT id, reviewtext FROM wp_review';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching review: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $jokes[] = array('id' => $row['id'], 'text' => $row['reviewtext']);
}

include 'admin/del/del.html.php';
