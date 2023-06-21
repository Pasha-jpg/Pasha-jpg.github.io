<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'admin/error.html.php';
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

include 'admin/list.html.php';




