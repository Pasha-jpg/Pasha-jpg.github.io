<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
  <!DOCTYPE html>
  <html lang="en">
  
<footer class="responsive-blog-footer">
      <div class="row">
            <div class="medium-8 columns small-order-2 medium-order-1 about-container">
              <div class="row"> 
                
                 <div class="small-12 medium-4 columns small-order-1 medium-order-2 mailing-container">
                      <h2 class="mailing-list">Join our mailing list</h2>
                    
                      <div class="custom-menu-class"  >
                          Check us on social media
                            <?php 
                                 wp_nav_menu( array( 
                                'theme_location' => 'footer-menu', 
                                'container_class' => 'custom-menu-class' ) ); 
                            ?>
                     </div>
                     <a class="button expanded subscribe-button" href="#">Subscribe Now</a>
                 </div>
             </div>
         </div>
      </div>
   </footer>
      



 

</body>
</html>
