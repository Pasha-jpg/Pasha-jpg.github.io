<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="add.css">
    <title>Add reviews</title>
  </head>
  
 

<?php get_header(); ?>
<div class="custom-menu-class" id="test">
         <?php 
              wp_nav_menu( array( 
             'theme_location' => 'my-custom-menu', 
             'container_class' => 'custom-menu-class' ) ); 
         ?>
</div>

  <!-- link changed to query string, shows different in the url-->
    <p><a href="?addjoke">Add your own Travel review</a></p>
    <p>Here are all the reviews in the database:</p>
    <?php foreach ($jokes as $joke): ?>
      <blockquote>
        <p><?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?></p>
      </blockquote>
    <?php endforeach; ?>
    <p><a href="">Return to CMS home</a></p>
    <?php include 'logout.inc.html.php'; ?>
  </body>
</html>
