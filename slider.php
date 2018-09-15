<?php
/**
 * The slider for our theme.
 *
 * @package WP_Ogitive
 */
?>

<div class="swipe">

        <?php

			// check if the repeater field has rows of data
			if( have_rows('slider_repeater','options') ):

			 	// loop through the rows of data
			    while ( have_rows('slider_repeater','options') ) : the_row(); ?>





  <div> <!-- slide1 -->
	<div class="gradient"></div>
     	<img src="<?php the_sub_field('bkg'); ?>" class="swipeimg" alt="">
  	        <div class="slider-content">
			       <div class="container">
				       <div class="row">
					       <div class="col-md-6">
						       <div class="img-holder">
							       <img src="<?php the_sub_field('image'); ?>" class="flasacasa">
						       </div>
					       </div>

					       <div class="col-md-6">
						       <div class="text-holder">
							       <h2><?php the_sub_field('text'); ?></h2>
							       
							       <a href="<?php the_sub_field('url'); ?>" class="btn orange">ORDER ONLINE</a>
						       </div>
					       </div>
				       </div> <!-- row -->
			       </div> <!-- container -->
		    </div>
		     <div class="wood">	
				<div class="gradient2"></div>
					<div class="row">
						<div class="col-md-12">
							<div class="woodpic">
								<img src="<?php echo get_template_directory_uri() ?>/img/astal.png" alt="astal" class="astal">
							</div>
						</div>
					</div>
		     </div>
  </div> <!-- slide1 -->




     <? endwhile;
			else :
			    echo 'Sadrzaj nije dostupan.';
			endif;
			?>					


</div> <!-- swipe -->




