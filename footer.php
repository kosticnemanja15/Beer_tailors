<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WP_Ogitive
 */
?>




<footer>
	<div class="container">
		<div class="col-md-12">

			<div class="logo-footer">
				<a href="http://beer.ogitive.info"><img src="<?php echo get_template_directory_uri(); ?>/img/logofooter.png"></a>
			</div>


			<div class="menu-footer">
				            <div class="footernav">
                                 <?php get_template_part('navigation-footer'); ?>
                            </div>

                            <div class="web">
                              <div class="web-holder">
                            	<a href="https://www.instagram.com/beertailors/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" class="instagram"></a>
                            	<a href="https://twitter.com/beertailors/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" class="twitter"></a>
                            	<a href="https://www.facebook.com/beertailors.barcelona/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" class="facebook"></a>
                              </div>	
                            
                            </div>    
			</div>
		</div>
	</div>
</footer>



<?php wp_footer(); ?> 


</body>
</html>
