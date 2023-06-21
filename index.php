
<?php get_header(); ?>



<div class="myborder">
    <?php
     
    if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
    </div>
         
    <?php endif; ?>
</div>






<?php get_footer(); ?>