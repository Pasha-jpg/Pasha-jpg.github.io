<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="delete.css">
    <title>Delete Reviews</title>
  </head>
  <body>
    <header></header>
    <p>Here are all the reviews in the database:</p>
    <?php foreach ($jokes as $joke): ?>
      <form action="?deletejoke" method="post">
        <blockquote>
          <p>
            <?php echo htmlspecialchars($joke['text'], ENT_QUOTES, 'UTF-8'); ?>
            <input type="hidden" name="id" value="<?php echo $joke['id']; ?>">
            <input type="submit" value="Delete">
          </p>
        </blockquote>
      </form>
    <?php endforeach; ?>
    <p><a href="..">Return to TMS home</a></p>
    <?php include '../logout.inc.html.php'; ?>
  </body>
</html>
