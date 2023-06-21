
<!DOCTYPE html>
<html lang="en">
<head>
<title>list</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/admin.css">
</head>
 
<?php wp_head(); ?>

<?php get_header(); ?>


<p>Here are all the travel reviews in the database:</p>
    <?php foreach ($jokes as $joke): ?>
      <blockquote>
        <p>
          <?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8'); ?>
        </p>
      </blockquote>
    <?php endforeach; ?>
    
    
   




<?php get_footer(); ?>



