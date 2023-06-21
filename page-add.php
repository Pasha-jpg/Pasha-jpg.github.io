

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '../cms/wp-content/themes/travel/includes/access.inc.php';

//****************************************
//Don't forget to update server path
//****************************************
if (!userIsLoggedIn())
{
  include '../cms/wp-content/themes/travel/admin/login.html.php';
  exit();
}

/*The controller can detect this query string and use it as a
    signal to display the “Add Joke” form instead of the list of jokes */
//Add this
if (isset($_GET['addjoke']))
{
  include 'admin/form.html.php';
  exit();
}
// Add above


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
    $error = 'Error adding submitted review: ' . $e->getMessage();
    include 'admin/error.html.php';
    exit();
  }

  header('Location: .');
  exit();
}

try
{
  $sql = 'SELECT reviewtext FROM wp_review';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include 'admin/error.html.php';
  exit();
}

while ($row = $result->fetch())
{
  $jokes[] = $row['reviewtext'];
}

include 'admin/add.html.php';
